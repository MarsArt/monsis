<?php
/* @var $this PostiController */
/* @var $model Posti */
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
		<?php echo $form->label($model,'id_gorod'); ?>
		<?php echo $form->textField($model,'id_gorod',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name_post'); ?>
		<?php echo $form->textField($model,'name_post',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KoordShir'); ?>
		<?php echo $form->textField($model,'KoordShir'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'KoordDolg'); ?>
		<?php echo $form->textField($model,'KoordDolg'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->