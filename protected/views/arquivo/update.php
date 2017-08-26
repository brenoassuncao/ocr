<?php
/* @var $this ArquivoController */
/* @var $model Arquivo */
?>

<?php
$this->breadcrumbs=array(
	'Arquivos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Arquivo', 'url'=>array('index')),
	array('label'=>'Create Arquivo', 'url'=>array('create')),
	array('label'=>'View Arquivo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Arquivo', 'url'=>array('admin')),
);
?>

    <h1>Update Arquivo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>