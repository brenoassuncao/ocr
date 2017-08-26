<?php
/* @var $this ArquivoController */
/* @var $model Arquivo */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'nome_arquivo',array('span'=>5,'maxlength'=>260)); ?>

                    <?php echo $form->textFieldControlGroup($model,'user_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'data',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'mimetype',array('span'=>5,'maxlength'=>45)); ?>

                    <?php echo $form->textFieldControlGroup($model,'status',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'tamanho',array('span'=>5)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->