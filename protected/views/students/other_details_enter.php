<?php
$this->layout='column1';
?>

<h3 class="pull-left">Enter your Other details</h3>
<p class="pull-right help-block">Fields with <span class="required">*</span> are required.</p>
<div class="clear"></div>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
<?php echo $form->errorSummary($model); ?>

<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'photo'); ?> <?php echo CHtml::activeFileField($model,'photo',array('required'=>'required')); ?> <?php echo $form->error($model,'photo'); ?> </div>
  
</div>
<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
<?php $this->endWidget(); ?>
