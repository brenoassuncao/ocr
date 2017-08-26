<?php
/**
 * The following variables are available in this template:
 * - $this: the BootstrapCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $dataProvider CActiveDataProvider */
<?php echo "?>\n"; ?>

<?php
echo "<?php\n";
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create <?php echo $this->modelClass; ?>', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<?php echo "<?php echo BsHtml::pageHeader('$label') ?>\n"; ?>
<?php echo "<?php"; ?> $this->widget('bootstrap.widgets.BsListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>