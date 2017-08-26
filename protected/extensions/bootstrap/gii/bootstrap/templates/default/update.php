<?php
/**
 * The following variables are available in this template:
 * - $this: the BootstrapCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
<?php echo "?>\n"; ?>

<?php
echo "<?php\n";
$nameColumn = $this->guessNameColumn($this->tableSchema->columns);
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	\$model->{$nameColumn}=>array('view','id'=>\$model->{$this->tableSchema->primaryKey}),
	'Update',
);\n";
?>

$this->menu=array(
    array('icon' => 'glyphicon glyphicon-list','label'=>'List <?php echo $this->modelClass; ?>', 'url'=>array('index')),
	array('icon' => 'glyphicon glyphicon-plus-sign','label'=>'Create <?php echo $this->modelClass; ?>', 'url'=>array('create')),
    array('icon' => 'glyphicon glyphicon-list-alt','label'=>'View <?php echo $this->modelClass; ?>', 'url'=>array('view', 'id'=>$model-><?php echo $this->tableSchema->primaryKey; ?>)),
    array('icon' => 'glyphicon glyphicon-tasks','label'=>'Manage <?php echo $this->modelClass; ?>', 'url'=>array('admin')),
);
?>

<?php echo "<?php echo BsHtml::pageHeader('Update','$this->modelClass '.\$model->{$this->tableSchema->primaryKey}) ?>\n"; ?>
<?php echo "<?php \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>