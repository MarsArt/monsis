<?php
/* @var $this PostiController */
/* @var $model Posti */

$this->breadcrumbs=array(
	'Пост'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список постов', 'url'=>array('index')),
	array('label'=>'Добавить пост', 'url'=>array('create')),
	array('label'=>'Редактировать пост', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить пост', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление постами', 'url'=>array('admin')),
);
?>

<h1>Детали поста <?php echo $model->name_post; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_gorod',
		'name_post',
		'KoordShir',
		'KoordDolg',
	),
)); ?>
