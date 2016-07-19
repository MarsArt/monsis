<?php
/* @var $this NabludController */
/* @var $data Nablud */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vechestva')); ?>:</b>
	<?php echo CHtml::encode($data->id_vechestva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('result')); ?>:</b>
	<?php echo CHtml::encode($data->result); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datazam')); ?>:</b>
	<?php echo CHtml::encode($data->datazam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timezam')); ?>:</b>
	<?php echo CHtml::encode($data->timezam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id_meteopar')); ?>:</b>
	<?php echo CHtml::encode($data->Id_meteopar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_posti')); ?>:</b>
	<?php echo CHtml::encode($data->id_posti); ?>
	<br />


</div>