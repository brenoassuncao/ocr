<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>true,
	    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,

	'htmlOptions' => array('enctype'=>'multipart/form-data','class' => 'bs-example'),
));
?>

	<?php echo $form->errorSummary(array($model,$profile)); ?>

	<div class="row">
		<div class="col-md-6">
			<div class="col-md-12">
				<?php echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>

			<div class="col-md-12">
				<?php  echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>

			<div class="col-md-12">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>

			<div class="col-md-6">
				<?php echo $form->labelEx($model,'superuser'); ?>
				<?php echo $form->dropDownList($model,'superuser',User::itemAlias('AdminStatus')); ?>
				<?php echo $form->error($model,'superuser'); ?>
			</div>

			<div class="col-md-6">
				<?php echo $form->labelEx($model,'status'); ?>
				<?php echo $form->dropDownList($model,'status',User::itemAlias('UserStatus')); ?>
				<?php echo $form->error($model,'status'); ?>
			</div>
		</div>
		<div class="col-md-6">
			<?php 
				$profileFields=$profile->getFields();
				if ($profileFields) {
					foreach($profileFields as $field) {
					?>
						<div class="col-md-12">
							<?php echo $form->labelEx($profile,$field->varname); ?>
							<?php 
							if ($widgetEdit = $field->widgetEdit($profile)) {
								echo $widgetEdit;
							} elseif ($field->range) {
								echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
							} elseif ($field->field_type=="TEXT") {
								echo CHtml::activeTextArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
							} else {
								echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
							}
							 ?>
							<?php echo $form->error($profile,$field->varname); ?>
						</div>
					<?php
					}
				}
			?>
		</div>
		<div class="col-md-12 buttons">

			<?php echo BsHtml::submitButton($model->isNewRecord ? UserModule::t('Criar') : UserModule::t('Salvar'), 
							array('color' => BsHtml::BUTTON_COLOR_PRIMARY));
			// echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Create') : UserModule::t('Save')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->