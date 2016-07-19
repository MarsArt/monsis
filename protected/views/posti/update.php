<?php
/* @var $this PostiController */
/* @var $model Posti */

$this->breadcrumbs=array(
	'Postis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Posti', 'url'=>array('index')),
	array('label'=>'Create Posti', 'url'=>array('create')),
	array('label'=>'View Posti', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Posti', 'url'=>array('admin')),
);
?>

<h1>Update Posti <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>