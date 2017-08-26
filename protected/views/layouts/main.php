<?php /* @var $this Controller */ 
	$cs = Yii::app()->clientScript;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!-- blueprint CSS framework -->
	<?php 
		$cs
	    ->registerCssFile('/css/bootstrap.min.css')
	    ->registerCssFile('/css/animate.min.css')
	    ->registerCssFile('/css/paper-dashboard.css');

	    $cs
		    ->registerCoreScript('jquery',CClientScript::POS_END)
		    ->registerCoreScript('jquery.ui',CClientScript::POS_END)
		    ->registerScriptFile('/js/bootstrap.min.js',CClientScript::POS_END)
		    ->registerScriptFile('/js/bootstrap-checkbox-radio.js',CClientScript::POS_END)
		    ->registerScriptFile('/js/chartist.min.js',CClientScript::POS_END)
		    ->registerScriptFile('/js/bootstrap-notify.js',CClientScript::POS_END)
		    ->registerScriptFile('/js/paper-dashboard.js',CClientScript::POS_END)
		    

		    ->registerScript('tooltip',
		        "$('[data-toggle=\"tooltip\"]').tooltip();
		        $('[data-toggle=\"popover\"]').tooltip()"
		        ,CClientScript::POS_READY);
    ?>
    <!--  Google Maps Plugin    -->
    <!-- script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script -->

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/css/themify-icons.css" rel="stylesheet">



	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">
 		<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">
                    <?php echo CHtml::encode(Yii::app()->name); ?>
                </a>
            </div>

				<?php $this->widget('zii.widgets.CMenu',array(
					'activeCssClass'=>'active',
					'activateParents'=>true,
					'items'=>array(
				       
				        array('url'=>'/', 
				        	'label'=>'<i class="ti-home"></i> <p>Início</p>', 
				        	'visible'=>!Yii::app()->user->isGuest),

				        
				        array('url'=>'/user/profile', 
				        	 'label'=>'<i class="ti-id-badge"></i> <p>'.Yii::app()->getModule('user')->t("Profile") .'</p>', 
				        	 'visible'=>!Yii::app()->user->isGuest),

				        array('label'=>'<i class="ti-user"></i> <p>Usuários</p>', 
				        	'url'=>array('/user/admin'), 
                            'visible'=>Yii::app()->user->checkAccess('admin')),

                        array('label'=>'<i class="ti-lock"></i> <p>Rights</p>', 
                            'url'=>array('/rights'), 
				        	'visible'=>Yii::app()->user->checkAccess('admin')),

				        array('url'=>Yii::app()->getModule('user')->loginUrl, 
				        	'label'=>Yii::app()->getModule('user')->t("Login"), 
				        	'visible'=>Yii::app()->user->isGuest),

				        array('url'=>Yii::app()->getModule('user')->logoutUrl, 
				        	'label'=>'<i class="ti-power-off"></i> <p> Sair ('.Yii::app()->user->name.') </p>', 
				        	'visible'=>!Yii::app()->user->isGuest),
				),
				'encodeLabel' => false,
                'htmlOptions' => array(
                    'class'=>'nav',
                        ),
				)); ?>

           
         
    	</div>
    </div>


   <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#"><?php echo end($this->breadcrumbs); ?></a>

                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                    	
				        <?php if(!Yii::app()->user->isGuest):?>
                    		<li>
                            	<a href="/user/logout">
									<i class="ti-power-off"></i>
									<p>Sair (<?php echo Yii::app()->user->name ;?>)</p>
                            	</a>
                        	</li>
				        <?php endif;?>
                        <!--li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul
yii>                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li-->
                    </ul >

                </div>
            </div>            
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    		<?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/">Início</a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Embrapa Produtos e Mercado.  <a href="/site">créditos</a>
                </div>
            </div>
        </footer>

    </div>
</div>



</body>
</html>
