<?php
$this->breadcrumbs=array(
	'Headers'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Header', 'url'=>array('index')),
	array('label'=>'Create Header', 'url'=>array('create')),
	array('label'=>'Update Header', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Header', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Header', 'url'=>array('admin')),
);
?>

<h1>View Header #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'domain',
		'title',
		'lang',
		'charset',
		'icon',
		'keywords',
		'description',
		'create_time',
	),
)); ?>
