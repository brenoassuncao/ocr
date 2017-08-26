<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Acesso ao Sistema OCR"),
);
?>

<div class="middle-box text-center loginscreen" style="width:50%; margin: 0 auto;">

	<div class="card">
		<br/>
		<img src="/img/logo.png" alt="Inicio" width="10%">

		<h2 class="center" style="margin-top: 5px;"> <?php echo UserModule::t("Login"); ?></h2>

		<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

		<div class="success">
			<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
		</div>

		<?php endif; ?>

		<p>Informe suas credenciais de acesso</p>

		<div class="form">
		<?php echo CHtml::beginForm(); ?>

			
			<?php echo CHtml::errorSummary($model); ?>
			
			<div class="row">
				<label class="required" for="UserLogin_username">
					Usuário<span class="required">*</span>
				</label>
				<?php echo CHtml::activeTextField($model,'username') ?>
			</div>
			
			<div class="row">
				
				<label class="required" for="UserLogin_password">
					Senha<span class="required">*</span> &nbsp;
				</label>
				<?php echo CHtml::activePasswordField($model,'password') ?>
			</div>
							
			<!-- div class="row rememberMe">
				<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
				<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
			</div -->

		<br/>
			<div class="row submit">
				<button type="submit" class="btn btn-info btn-fill btn-wd">Entrar</button>
			</div>
			
		<?php echo CHtml::endForm(); ?>
		<br/>
		<br/>
		</div><!-- form -->


		<?php
		$form = new CForm(array(
		    'elements'=>array(
		        'username'=>array(
		            'type'=>'text',
		            'maxlength'=>32,
		        ),
		        'password'=>array(
		            'type'=>'password',
		            'maxlength'=>32,
		        ),
		        'rememberMe'=>array(
		            'type'=>'checkbox',
		        )
		    ),

		    'buttons'=>array(
		        'login'=>array(
		            'type'=>'submit',
		            'label'=>'Login',
		        ),
		    ),
		), $model);
		?>
	</div><!-- card -->
</div><!-- box-middle -->