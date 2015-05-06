<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'date_of_exam',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'student_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'roll_no',array('class'=>'span5','maxlength'=>12)); ?>

	<?php echo $form->textFieldRow($model,'st_designation',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'st_place_of_work',array('class'=>'span5','maxlength'=>400)); ?>

	<?php echo $form->textAreaRow($model,'address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'mobile',array('class'=>'span5','maxlength'=>13)); ?>

	<?php echo $form->textFieldRow($model,'area_of_work',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'supervisor_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'su_designation',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'su_place_of_work',array('class'=>'span5','maxlength'=>400)); ?>

	<?php echo $form->textFieldRow($model,'examiner_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'ex_designation',array('class'=>'span5','maxlength'=>400)); ?>

	<?php echo $form->textFieldRow($model,'ex_place_of_work',array('class'=>'span5','maxlength'=>400)); ?>

	<?php echo $form->textFieldRow($model,'file_name',array('class'=>'span5','maxlength'=>200)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
