<?php
/* @var $this PostiController */
/* @var $data Posti */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gorod')); ?>:</b>
	<?php echo CHtml::encode($data->id_gorod); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_post')); ?>:</b>
	<?php echo CHtml::encode($data->name_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KoordShir')); ?>:</b>
	<?php echo CHtml::encode($data->KoordShir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('KoordDolg')); ?>:</b>
	<?php echo CHtml::encode($data->KoordDolg); ?>
	<br />


</div>