<?php
/* @var $this NabludController */
/* @var $model Nablud */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_vechestva'); ?>
		<?php echo $form->textField($model,'id_vechestva'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'result'); ?>
		<?php echo $form->textField($model,'result'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'datazam'); ?>
		<?php echo $form->textField($model,'datazam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timezam'); ?>
		<?php echo $form->textField($model,'timezam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id_meteopar'); ?>
		<?php echo $form->textField($model,'Id_meteopar',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_posti'); ?>
		<?php echo $form->textField($model,'id_posti'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->