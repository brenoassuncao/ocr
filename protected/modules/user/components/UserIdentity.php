<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_name ;
	private $_email 	;
	private $_department ;
	private $_dn;
	const ERROR_EMAIL_INVALID=3;
	const ERROR_STATUS_NOTACTIV=4;
	const ERROR_STATUS_BAN=5;

    const ERROR_NO_DOMAIN_CONTROLLER_AVAILABLE = 1001; // could not bind anonymously to any domain controllers
    const ERROR_INVALID_CREDENTIALS = 1002; // could not bind with user's credentials
    const ERROR_NOT_PERMITTED = 1003; //user was not found in search criteria

	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

    public function authenticate()
    {
        $this->errorCode = self::ERROR_NONE;
        
        if(Yii::app()->params['autentication'] == 'bd') { // autenticação via banco de dados
            /**
             * Autentica via Banco de dados. 
            */

            if (strpos($this->username,"@")) {
                $user=User::model()->notsafe()->findByAttributes(array('email'=>$this->username));
            } else {
                $user=User::model()->notsafe()->findByAttributes(array('username'=>$this->username));
            }
            if($user===null)
                if (strpos($this->username,"@")) {
                    $this->errorCode=self::ERROR_EMAIL_INVALID;
                } else {
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
                }
            else if(Yii::app()->getModule('user')->encrypting($this->password)!==$user->password)
                $this->errorCode=self::ERROR_PASSWORD_INVALID;
            else if($user->status==0&&Yii::app()->getModule('user')->loginNotActiv==false)
                $this->errorCode=self::ERROR_STATUS_NOTACTIV;
            else if($user->status==-1)
                $this->errorCode=self::ERROR_STATUS_BAN;
            else {
                $this->_id=$user->id;
                $this->username=$user->username;
                $this->errorCode=self::ERROR_NONE;
            }
        } else {
          // autenticação via LDAP    

           
            $options = Yii::app()->params['ldap'];
            $connection = ldap_connect($options['host'], $options['port']);
            ldap_set_option($connection, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($connection, LDAP_OPT_REFERRALS, 0);
     
            if($connection && $this->username != '' && $this->password != '')
            {
            	$bind = false;
            	$bind_user = false;
                $connected = false;
                $ldap = false;
                $foundInSearch = false;

                try
                {
                       
                    $admin_username = $options['admin_username']; 
                    $admin_password	= $options['admin_password']; 
                    $admin_dn		= $options['admin_dn']; 
                    $general_dn 	= $options['general_dn']; 

                    // conecta no servidor ldap para realizar a busca de usuários
                    $bind_search = @ldap_bind($connection, "cn=".$admin_username.",".$admin_dn."", $admin_password);

                    if($bind_search) {
                    	$filter = "(uid=".$this->username.")";
    	                $read = ldap_search($connection, $general_dn, $filter) or exit(">>Unable to search ldap server<<");
    		            $info = ldap_get_entries($connection, $read);           
    		            
                        if($info['count'] > 0){        		            
                            $this->_name 		= (isset($info['0']['displayname']['0']))?($info['0']['displayname']['0']):('');
                            $this->_email 		= (isset($info['0']['mail']['0']))?($info['0']['mail']['0']):('');
                            $this->_department 	= (isset($info['0']['departmentnumber']['0']))?($info['0']['departmentnumber']['0']):('');
                            $this->_dn 	= (isset($info['0']['dn']))?($info['0']['dn']):('');

                            $foundInSearch = true;
                        }
     					if(!$foundInSearch){
                            $this->errorCode = self::ERROR_NOT_PERMITTED;
                        }
    	                @$bind_user = ldap_bind($connection, $this->_dn, $this->password);
    		          		            	           
                    	$this->errorCode = self::ERROR_NONE;
                    	
                    } else {
                    	$this->errorCode = self::ERROR_NO_DOMAIN_CONTROLLER_AVAILABLE;
                    }

                }
                catch (Exception $e){
                    echo $e->getMessage();
                }
                if(!$bind_user) $this->errorCode = self::ERROR_PASSWORD_INVALID;
                else $this->errorCode = self::ERROR_NONE;
            } else {
            	$this->errorCode = self::ERROR_INVALID_CREDENTIALS;
            }

            switch($this->errorCode){
                case self::ERROR_INVALID_CREDENTIALS :
                    $this->errorMessage = 'Invalid Credentials.';
                    break;
                case self::ERROR_NO_DOMAIN_CONTROLLER_AVAILABLE :
                    $this->errorMessage = 'No domain controller available.';
                    break;
                case self::ERROR_NOT_PERMITTED:
                    $this->errorMessage = 'Not permitted in application.';
                    break;
                case self::ERROR_NONE :
                    $this->setState('name', $this->_name);
                    $this->setState('email', $this->_email);
                    $this->setState('departamento', $this->_department);
                    $this->username = $this->username;
                     
                    //$dbUser = User::model()->findByAttributes(array('username' => $this->username));
                    $dbUser = User::model()->find('LOWER(username)=?', array(strtolower($this->username)));

    	            if (!$dbUser) {
    	                $dbUser = new User();
    	                $dbUser->username 	= $this->username;
    	                $dbUser->email 		= $this->_email;
    	                $dbUser->superuser 	= 0;
    	                $dbUser->status 	= 1;
                    	
    	                $dbUser->save();

    	                $profile = new Profile();
    	                $profile->user_id 	= $dbUser->primaryKey;
    	                $profile->name 		= $this->_name;
    	                $profile->setor 	= $this->_department;
    	                $profile->save();
    				
            			// adiciona o perfil "Autenticado" a todo usuário cadastrado 
            			$authorizer = Yii::app()->getModule("rights")->getAuthorizer();
            			$authorizer->authManager->assign('Authenticated', $profile->user_id);
            	       
    	            }	            
    	            $this->_id = $dbUser->primaryKey;

                    break;
                default : $this->errorMessage = 'Unable to Authenticate';
            }

        }


        return !$this->errorCode;
	}



    /**
    * @return integer the ID of the user record
    */
	public function getId()
	{
		return $this->_id;
	}
}

