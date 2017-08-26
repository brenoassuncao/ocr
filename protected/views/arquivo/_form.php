<?php
/* @var $this ArquivoController */
/* @var $model Arquivo */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'arquivo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->textFieldControlGroup($model,'nome_arquivo',array('span'=>5,'maxlength'=>260)); ?>

            <?php echo $form->textFieldControlGroup($model,'user_id',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'data',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'mimetype',array('span'=>5,'maxlength'=>45)); ?>

            <?php echo $form->textFieldControlGroup($model,'status',array('span'=>5)); ?>

            <?php echo $form->textFieldControlGroup($model,'tamanho',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->