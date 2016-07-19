<?php
/* @var $this VechestvaController */
/* @var $model Vechestva */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_vechestva'); ?>
		<?php echo $form->textField($model,'id_vechestva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_vesh'); ?>
		<?php echo $form->textField($model,'name_vesh',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PDK_ss'); ?>
		<?php echo $form->textField($model,'PDK_ss'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PDK_mg'); ?>
		<?php echo $form->textField($model,'PDK_mg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_class_opasnosti'); ?>
		<?php echo $form->textField($model,'id_class_opasnosti'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->