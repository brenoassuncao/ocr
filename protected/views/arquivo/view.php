<?php
/* @var $this ArquivoController */
/* @var $model Arquivo */
?>

<?php
$this->breadcrumbs=array(
	'Arquivos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Arquivo', 'url'=>array('index')),
	array('label'=>'Create Arquivo', 'url'=>array('create')),
	array('label'=>'Update Arquivo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Arquivo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Arquivo', 'url'=>array('admin')),
);
?>

<h1>View Arquivo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'nome_arquivo',
		'user_id',
		'data',
		'mimetype',
		'status',
		'tamanho',
	),
)); ?>