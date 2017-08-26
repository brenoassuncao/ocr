<?php

class ArquivoController extends RController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';


   	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'rights', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}


	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Arquivo;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Arquivo'])) {
			$model->attributes=$_POST['Arquivo'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Arquivo'])) {
			$model->attributes=$_POST['Arquivo'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */

	public function actionDelete($id)
	{

		// dd($id);
			// we only allow deletion via POST request
        $arquivo=$this->loadModel($id);
		if (Yii::app()->user->checkAccess('admin') || Yii::app()->user->Id == $arquivo->user_id) {

            $folder_in       =  Yii::app()->params['ocr_folder_in']; // pasta de entrada do OCR (onde o OCR-server vai buscar arquivos para processar)
            $folder_out      =  Yii::app()->params['ocr_folder_out']; // pasta de saída do OCR (onde o OCR-server vai colocar os arquivos convertidos corretamente)
            $folder_proc     =  Yii::app()->params['ocr_folder_proc']; // pasta de arquivos processados do OCR (onde o OCR-server vai colocar os arquivos processados corretamente)
            $folder_erro     =  Yii::app()->params['ocr_folder_erro']; // pasta de erro do OCR (onde o OCR-server vai colocar os arquivos com erro no processamento)

           if(file_exists($folder_in  .$arquivo->hash))     {  unlink( $folder_in  .$arquivo->hash) ; }
           if(file_exists($folder_out .$arquivo->hash))     {  unlink( $folder_out .$arquivo->hash) ; }
           if(file_exists($folder_proc.$arquivo->hash))     {  unlink( $folder_proc.$arquivo->hash) ; }
           if(file_exists($folder_erro.$arquivo->hash))     {  unlink( $folder_erro.$arquivo->hash) ; }

			$arquivo->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			
		} else {
			throw new CHttpException(403,'Operação não permitida. Apenas o usuário que criou o documento pode deletar o mesmo.');
		}

		Yii::app()->user->setFlash('success','<b>Arquivo deletado com sucesso!</b> <br />');
       
             
        Yii::app()->request->redirect('/');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{

        $this->layout='//layouts/column1';

        // echo phpinfo();
		$model=new Arquivo('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Arquivo'])) {
            $model->attributes=$_GET['Arquivo'];
        }

        $this->render('index',array(
            'model'=>$model,
        ));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Arquivo('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['Arquivo'])) {
			$model->attributes=$_GET['Arquivo'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}


    /**
     * UploadFiles
     */
    public function actionUpload()
    {

        if (!empty($_FILES)) { // salva o arquivo

            $user_id = Yii::app() -> user -> Id;

            $ds             = DIRECTORY_SEPARATOR; // separador de diretório "/"
            $folder_in       =  Yii::app()->params['ocr_folder_in']; // pasta de entrada do OCR (onde o OCR-server vai buscar arquivos para processar)

            $hashName       = md5(uniqid(rand(), true)) . ".pdf";
            $targetFile     = $folder_in. $ds . $hashName;   // caminho + hash do arquivo

            $tempFile       = $_FILES['file']['tmp_name'];   // armazena o arquivo em uma variável temporária
            move_uploaded_file($tempFile,$targetFile);       // move o arquivo para pasta "$targetPath"

            // Salvar os dados na tabela
            $arquivo                = new Arquivo;
            $arquivo->nome_arquivo  = $_FILES['file']['name'];
            $arquivo->hash          = $hashName;
            $arquivo->tamanho       = $_FILES['file']['size'];
            $arquivo->user_id       = Yii::app() -> user -> Id;
            $arquivo->data          = date("Y-m-d H:i");
            $arquivo->status        = 1 ;  // 1 - Novo  / 2 - Processado   / 3 - Erro

            $arquivo->validate();
            $arquivo->save();

            Yii::app()->user->setFlash('success','<b>Arquivo adicionado com sucesso!</b> <br />Por favor aguarde o processamento do arquivo. Você será alertado por email quando estiver concluído.');
        } else {
            Yii::app()->user->setFlash('danger','<b>Ops, Faltou anexar um arquivo! Por favor tente novamente.</b>');

        }

        Yii::app()->request->redirect('/');
    }

    public function actionView($id)
    {
        $arquivo=Arquivo::model()->findByPk($id);
       	if (Yii::app()->user->checkAccess('admin') || Yii::app()->user->Id == $arquivo->user_id) {

            $folder_in       =  Yii::app()->params['ocr_folder_in']; // pasta de entrada do OCR (onde o OCR-server vai buscar arquivos para processar)
            $folder_proc     =  Yii::app()->params['ocr_folder_proc']; // pasta de arquivos processados do OCR (onde o OCR-server vai colocar os arquivos processados corretamente)
            
	        if($arquivo->status != 1){
		   		$folder      =  $folder_proc;
			} else {        
				$folder      =  $folder_in;
			}
	        $file_path      =  $folder.$arquivo->hash ;

	        header('Content-Description: File Transfer');
	        header('Content-Type: application/octet-stream');
	        header('Content-Disposition: attachment; filename="'.basename($arquivo->nome_arquivo).'"');
	        header('Expires: 0');
	        header('Cache-Control: must-revalidate');
	        header('Pragma: public');
	        header('Content-Length: ' . filesize($file_path));
	        readfile($file_path);
			
		} else {
			throw new CHttpException(403,'Operação não permitida. Apenas o usuário que criou o documento pode acessar o mesmo.');
		}


    }

    public function actionViewOcr($id)
    {
       	$arquivo=Arquivo::model()->findByPk($id);
       	if (Yii::app()->user->checkAccess('admin') || Yii::app()->user->Id == $arquivo->user_id) {
				
	        $folder_out      =  Yii::app()->params['ocr_folder_out']; // pasta de saída do OCR (onde o OCR-server vai colocar os arquivos convertidos corretamente)

	        $file_path      =  $folder_out.$arquivo->hash ;

	        header('Content-Description: File Transfer');
	        header('Content-Type: application/octet-stream');
	        header('Content-Disposition: attachment; filename="OCR_'.basename($arquivo->nome_arquivo).'"');
	        header('Expires: 0');
	        header('Cache-Control: must-revalidate');
	        header('Pragma: public');
	        header('Content-Length: ' . filesize($file_path));
	        readfile($file_path);
		} else {
			throw new CHttpException(403,'Operação não permitida. Apenas o usuário que criou o documento pode acessar o mesmo.');
		}

    }

    public function actionUpdateStatus()
    {
    	$status=1; //Status processando

    	//realizar busca usando  o status
    	$criteria = new CDbCriteria();
		$criteria->condition = "status = $status";
    	$arquivos =Arquivo::model()->findAll($criteria);

    	//caminhos das pastas de busca
    	$folder_out      =  Yii::app()->params['ocr_folder_out']; // pasta de saída do OCR (onde o OCR-server vai colocar os arquivos convertidos corretamente)
        $folder_erro     =  Yii::app()->params['ocr_folder_erro']; // pasta de erro do OCR (onde o OCR-server vai colocar os arquivos com erro no processamento)

    	//Atualização do Status
    	foreach ($arquivos as $arquivo) {
    		if(file_exists($folder_out.$arquivo->hash)){
    			  $arquivo->status=2;
    			  $arquivo->save();
    		}
           if(file_exists($folder_error.$arquivo->hash)){
    			  $arquivo->status=3;
    			  $arquivo->save();
         	}
    	}
    }

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Arquivo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Arquivo::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Arquivo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='arquivo-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
