<?php
/* @var $this VechestvaController */
/* @var $model Vechestva */

$this->breadcrumbs=array(
	'Vechestvas'=>array('index'),
	$model->id_vechestva=>array('view','id'=>$model->id_vechestva),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vechestva', 'url'=>array('index')),
	array('label'=>'Create Vechestva', 'url'=>array('create')),
	array('label'=>'View Vechestva', 'url'=>array('view', 'id'=>$model->id_vechestva)),
	array('label'=>'Manage Vechestva', 'url'=>array('admin')),
);
?>

<h1>Update Vechestva <?php echo $model->id_vechestva; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>