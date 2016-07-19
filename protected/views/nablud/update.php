<?php
/* @var $this NabludController */
/* @var $model Nablud */

$this->breadcrumbs=array(
	'Nabluds'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nablud', 'url'=>array('index')),
	array('label'=>'Create Nablud', 'url'=>array('create')),
	array('label'=>'View Nablud', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nablud', 'url'=>array('admin')),
);
?>

<h1>Update Nablud <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>