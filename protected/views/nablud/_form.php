<?php
/* @var $this NabludController */
/* @var $model Nablud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nablud-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_vechestva'); ?>
		<?php echo $form->textField($model,'id_vechestva'); ?>
		<?php echo $form->error($model,'id_vechestva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'result'); ?>
		<?php echo $form->textField($model,'result'); ?>
		<?php echo $form->error($model,'result'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datazam'); ?>
		<?php echo $form->textField($model,'datazam'); ?>
		<?php echo $form->error($model,'datazam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'timezam'); ?>
		<?php echo $form->textField($model,'timezam'); ?>
		<?php echo $form->error($model,'timezam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Id_meteopar'); ?>
		<?php echo $form->textField($model,'Id_meteopar',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'Id_meteopar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_posti'); ?>
		<?php echo $form->textField($model,'id_posti'); ?>
		<?php echo $form->error($model,'id_posti'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->