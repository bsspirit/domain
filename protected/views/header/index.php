<?php
$this->breadcrumbs=array(
	'Headers',
);

$this->menu=array(
	array('label'=>'Create Header', 'url'=>array('create')),
	array('label'=>'Manage Header', 'url'=>array('admin')),
);
?>

<h1>Headers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
