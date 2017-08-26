<?php
/* @var $this ArquivoController */
/* @var $model Arquivo */
?>

<?php
$this->breadcrumbs=array(
	'Arquivos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Arquivo', 'url'=>array('index')),
	array('label'=>'Manage Arquivo', 'url'=>array('admin')),
);
?>

<h1>Create Arquivo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>