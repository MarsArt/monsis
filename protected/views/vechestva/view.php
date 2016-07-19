<?php
/* @var $this VechestvaController */
/* @var $model Vechestva */

$this->breadcrumbs=array(
	'Vechestvas'=>array('index'),
	$model->id_vechestva,
);

$this->menu=array(
	array('label'=>'List Vechestva', 'url'=>array('index')),
	array('label'=>'Create Vechestva', 'url'=>array('create')),
	array('label'=>'Update Vechestva', 'url'=>array('update', 'id'=>$model->id_vechestva)),
	array('label'=>'Delete Vechestva', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_vechestva),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vechestva', 'url'=>array('admin')),
);
?>

<h1>View Vechestva #<?php echo $model->id_vechestva; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_vechestva',
		'name_vesh',
		'PDK_ss',
		'PDK_mg',
		'id_class_opasnosti',
	),
)); ?>
