<?php
$this->breadcrumbs=array(
	'Tianji User Jsons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TianjiUserJson', 'url'=>array('index')),
	array('label'=>'Manage TianjiUserJson', 'url'=>array('admin')),
);
?>

<h1>Create TianjiUserJson</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>