<?php
$this->breadcrumbs=array(
	'Headers'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Header', 'url'=>array('index')),
	array('label'=>'Create Header', 'url'=>array('create')),
	array('label'=>'View Header', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Header', 'url'=>array('admin')),
);
?>

<h1>Update Header <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>