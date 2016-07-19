<?php
/* @var $this PostiController */
/* @var $model Posti */

$this->breadcrumbs=array(
	'Посты'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список постов', 'url'=>array('index')),
	array('label'=>'Управление постами', 'url'=>array('admin')),
);
?>

<h1>Создать пост</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>