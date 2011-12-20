<?php
$this->breadcrumbs=array(
	'Tianji User Jsons',
);

$this->menu=array(
	array('label'=>'Create TianjiUserJson', 'url'=>array('create')),
	array('label'=>'Manage TianjiUserJson', 'url'=>array('admin')),
);
?>

<h1>Tianji User Jsons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
