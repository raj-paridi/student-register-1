<?php
$this->layout='column1';
?>

<h3 class="pull-left">Enter your parental details</h3>
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
	<div class="span3 control-group"> <?php echo $form->labelEx($model,'father_name'); ?> <?php echo $form->textField($model,'father_name'); ?> <?php echo $form->error($model,'father_name'); ?> </div>
	<div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_name'); ?> <?php echo $form->textField($model,'mother_name'); ?> <?php echo $form->error($model,'mother_name'); ?> </div>
</div>

<div class="row">
	<div class="span3 control-group"> <?php echo $form->labelEx($model,'father_occupation'); ?> <?php echo $form->textField($model,'father_occupation'); ?> <?php echo $form->error($model,'father_occupation'); ?> </div>
	<div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_occupation'); ?> <?php echo $form->textField($model,'mother_occupation'); ?> <?php echo $form->error($model,'mother_occupation'); ?> </div>
</div>

<div class="row">
    <div class="span3 control-group"> <?php echo $form->labelEx($model,'father_income'); ?> <?php echo $form->textField($model,'father_income'); ?> <?php echo $form->error($model,'father_income'); ?> </div>
    <div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_income'); ?> <?php echo $form->textField($model,'mother_income'); ?> <?php echo $form->error($model,'mother_income'); ?> </div>
</div>

<div class="row">
	<div class="span3 control-group"> <?php echo $form->labelEx($model,'father_mobile'); ?> <?php echo $form->textField($model,'father_mobile'); ?> <?php echo $form->error($model,'father_mobile'); ?> </div>
	<div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_mobile'); ?> <?php echo $form->textField($model,'mother_mobile'); ?> <?php echo $form->error($model,'mother_mobile'); ?> </div>
</div>

<div class="row">
	<div class="span3 control-group"> <?php echo $form->labelEx($model,'father_mail'); ?> <?php echo $form->textField($model,'father_mail'); ?> <?php echo $form->error($model,'father_mail'); ?> </div>
	<div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_mail'); ?> <?php echo $form->textField($model,'father_mail'); ?> <?php echo $form->error($model,'mother_mail'); ?> </div>
</div>


<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
<?php $this->endWidget(); ?>
