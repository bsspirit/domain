<?php
$this->breadcrumbs=array(
	'Tianji User Jsons'=>array('index'),
	$model->userid,
);

$this->menu=array(
	array('label'=>'List TianjiUserJson', 'url'=>array('index')),
	array('label'=>'Create TianjiUserJson', 'url'=>array('create')),
	array('label'=>'Update TianjiUserJson', 'url'=>array('update', 'id'=>$model->userid)),
	array('label'=>'Delete TianjiUserJson', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TianjiUserJson', 'url'=>array('admin')),
);
?>

<h1>View TianjiUserJson #<?php echo $model->userid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userid',
		'json',
	),
)); ?>
