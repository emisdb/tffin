<?php
/* @var $this ConcertController */
/* @var $model Concert */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'concert-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">���� � <span class="required">*</span> �����������.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '�������' : '���������'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->