<?php
/* @var $this PostiController */
/* @var $dataProvider CActiveDataProvider */
echo $dat;
$this->breadcrumbs=array(
	'Посты',
);

$this->menu=array(
	array('label'=>'Добавить пост', 'url'=>array('create')),
	array('label'=>'Управление постами', 'url'=>array('admin')),
);
?>

<h1>Посты</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',

)); ?>
