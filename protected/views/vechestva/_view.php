<?php
/* @var $this VechestvaController */
/* @var $data Vechestva */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_vechestva')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_vechestva), array('view', 'id'=>$data->id_vechestva)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_vesh')); ?>:</b>
	<?php echo CHtml::encode($data->name_vesh); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PDK_ss')); ?>:</b>
	<?php echo CHtml::encode($data->PDK_ss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PDK_mg')); ?>:</b>
	<?php echo CHtml::encode($data->PDK_mg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_class_opasnosti')); ?>:</b>
	<?php echo CHtml::encode($data->id_class_opasnosti); ?>
	<br />


</div>