<?php
/* @var $this VechestvaController */
/* @var $model Vechestva */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vechestva-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_vesh'); ?>
		<?php echo $form->textField($model,'name_vesh',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_vesh'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PDK_ss'); ?>
		<?php echo $form->textField($model,'PDK_ss'); ?>
		<?php echo $form->error($model,'PDK_ss'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PDK_mg'); ?>
		<?php echo $form->textField($model,'PDK_mg'); ?>
		<?php echo $form->error($model,'PDK_mg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_class_opasnosti'); ?>
		<?php echo $form->textField($model,'id_class_opasnosti'); ?>
		<?php echo $form->error($model,'id_class_opasnosti'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->