<?php
/* @var $this VechestvaController */
/* @var $model Vechestva */

$this->breadcrumbs=array(
	'Vechestvas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vechestva', 'url'=>array('index')),
	array('label'=>'Manage Vechestva', 'url'=>array('admin')),
);
?>

<h1>Create Vechestva</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>