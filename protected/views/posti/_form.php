<?php
/* @var $this PostiController */
/* @var $model Posti */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posti-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля отмеченые <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_города'); ?>
		<?php echo $form->textField($model,'id_gorod',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'id_gorod'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Наименования поста'); ?>
		<?php echo $form->textField($model,'name_post',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Широта'); ?>
		<?php echo $form->textField($model,'KoordShir'); ?>
		<?php echo $form->error($model,'KoordShir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Долгота'); ?>
		<?php echo $form->textField($model,'KoordDolg'); ?>
		<?php echo $form->error($model,'KoordDolg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->