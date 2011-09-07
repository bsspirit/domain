<?php
$this->breadcrumbs=array(
	'Domains',
);

$this->menu=array(
	array('label'=>'Create Domain', 'url'=>array('create')),
	array('label'=>'Manage Domain', 'url'=>array('admin')),
);
?>

<h1>Domains</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
