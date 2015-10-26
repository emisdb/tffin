<?php
/* @var $this DepartmentController */
/* @var $model Department */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'department-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Поля с <span class="required">*</span> обязательны.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'depid'); ?>
		<?php echo $form->textField($model,'depid',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'depid'); ?>
	</div>
	<?php
	foreach ($props as $key => $value) {
			echo  '<div class="row">';
			echo CHtml::label($value->_key,$value->_key);
			echo CHtml::textField("Prop[".$value->_key."]",$value->_value,array('size'=>32,'maxlength'=>64));
			echo  '</div>';

		}

	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->