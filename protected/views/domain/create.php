<?php
$this->breadcrumbs=array(
	'Domains'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Domain', 'url'=>array('index')),
	array('label'=>'Manage Domain', 'url'=>array('admin')),
);
?>

<h1>Create Domain</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>