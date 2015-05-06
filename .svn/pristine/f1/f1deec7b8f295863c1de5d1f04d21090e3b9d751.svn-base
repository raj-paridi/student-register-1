<?php
$this->breadcrumbs=array(
	'Ceh Feedbacks'=>array('index'),
	'Create',
);
?>

<h1>Give Your Valuable Feedback</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'ceh-feedback-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownlistRow($model,'type',array(''=>'Select','STUDENT'=>'STUDENT','PARENT'=>'PARENT','FACULTY'=>'FACULTY'),array('class'=>'span5','maxlength'=>7)); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'subject',array('class'=>'span5','maxlength'=>350)); ?>

	<?php echo $form->textAreaRow($model,'body',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Send',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
