<?php
$this->breadcrumbs=array(
	'Domains'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Domain', 'url'=>array('index')),
	array('label'=>'Create Domain', 'url'=>array('create')),
	array('label'=>'View Domain', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Domain', 'url'=>array('admin')),
);
?>

<h1>Update Domain <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>