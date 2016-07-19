<?php
/* @var $this VechestvaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vechestvas',
);

$this->menu=array(
	array('label'=>'Create Vechestva', 'url'=>array('create')),
	array('label'=>'Manage Vechestva', 'url'=>array('admin')),
);
?>

<h1>Vechestvas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
