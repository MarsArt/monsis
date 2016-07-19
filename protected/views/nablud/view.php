<?php
/* @var $this NabludController */
/* @var $model Nablud */

$this->breadcrumbs=array(
	'Nabluds'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Nablud', 'url'=>array('index')),
	array('label'=>'Create Nablud', 'url'=>array('create')),
	array('label'=>'Update Nablud', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nablud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nablud', 'url'=>array('admin')),
);
?>

<h1>View Nablud #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_vechestva',
		'result',
		'datazam',
		'timezam',
		'Id_meteopar',
		'id_posti',
	),
)); ?>
