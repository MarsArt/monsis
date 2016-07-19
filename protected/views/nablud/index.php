<?php
/* @var $this NabludController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nabluds',
);

$this->menu=array(
	array('label'=>'Create Nablud', 'url'=>array('create')),
	array('label'=>'Manage Nablud', 'url'=>array('admin')),
);
?>

<h1>Nabluds</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
