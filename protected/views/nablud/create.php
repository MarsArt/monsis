<?php
/* @var $this NabludController */
/* @var $model Nablud */

$this->breadcrumbs=array(
	'Nabluds'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nablud', 'url'=>array('index')),
	array('label'=>'Manage Nablud', 'url'=>array('admin')),
);
?>

<h1>Create Nablud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>