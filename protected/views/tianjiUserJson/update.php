<?php
$this->breadcrumbs=array(
	'Tianji User Jsons'=>array('index'),
	$model->userid=>array('view','id'=>$model->userid),
	'Update',
);

$this->menu=array(
	array('label'=>'List TianjiUserJson', 'url'=>array('index')),
	array('label'=>'Create TianjiUserJson', 'url'=>array('create')),
	array('label'=>'View TianjiUserJson', 'url'=>array('view', 'id'=>$model->userid)),
	array('label'=>'Manage TianjiUserJson', 'url'=>array('admin')),
);
?>

<h1>Update TianjiUserJson <?php echo $model->userid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>