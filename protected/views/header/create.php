<?php
$this->breadcrumbs=array(
	'Headers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Header', 'url'=>array('index')),
	array('label'=>'Manage Header', 'url'=>array('admin')),
);
?>

<h1>Create Header</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>