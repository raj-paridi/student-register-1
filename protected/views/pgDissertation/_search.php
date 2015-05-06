<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'roll_no',array('class'=>'span5','maxlength'=>11)); ?>

	<?php echo $form->textFieldRow($model,'course',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'area_of_work',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'institute_name',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'guide_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'date_of_reg',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'file_name',array('class'=>'span5','maxlength'=>150)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
