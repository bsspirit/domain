<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tianji-user-json-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userid'); ?>
		<?php echo $form->textField($model,'userid',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'userid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'json'); ?>
		<?php echo $form->textField($model,'json',array('size'=>60,'maxlength'=>2048)); ?>
		<?php echo $form->error($model,'json'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->