<?php
$this->layout='column1';
?>

<h3 class="pull-left">Mobile Validation</h3>
<p class="pull-right help-block">Fields with <span class="required">*</span> are required.</p>
<div class="clear"></div>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
<div class="span3 control-group"> <?php echo $form->labelEx($model,'otp'); ?> <?php echo $form->textField($model,'otp',array('readonly'=>true)); ?> <?php echo $form->error($model,'otp'); ?> </div>
<div class="span3 control-group"> <?php echo $form->labelEx($model,'mobile'); ?> <?php echo $form->textField($model,'mobile',array('readonly'=>true)); ?> <?php echo $form->error($model,'mobile'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'otp1'); ?> <?php echo $form->textField($model,'otp1'); ?> <?php echo $form->error($model,'otp1'); ?> </div>
</div>

<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
<?php $this->endWidget(); ?>
