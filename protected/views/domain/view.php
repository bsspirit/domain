<?php
$this->breadcrumbs=array(
	'Domains'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Domain', 'url'=>array('index')),
	array('label'=>'Create Domain', 'url'=>array('create')),
	array('label'=>'Update Domain', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Domain', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Domain', 'url'=>array('admin')),
);
?>

<h1>View Domain #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'domain',
		'grade',
		'image',
		'create_time',
	),
)); ?>
