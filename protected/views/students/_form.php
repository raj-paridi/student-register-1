<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'roll_no',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'first_name',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'last_name',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'father_name',array('class'=>'span5','maxlength'=>350)); ?>

	<?php echo $form->textFieldRow($model,'mother_name',array('class'=>'span5','maxlength'=>350)); ?>

	<?php echo $form->textFieldRow($model,'mobile',array('class'=>'span5','maxlength'=>12)); ?>

	<?php echo $form->textFieldRow($model,'alternate_number',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'email',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textAreaRow($model,'present_address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'permanent_address',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'caste',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'sub_caste',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'father_occupation',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'father_income',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'mother_occupation',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'mother_income',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'home_phone',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textFieldRow($model,'father_mobile',array('class'=>'span5','maxlength'=>12)); ?>

	<?php echo $form->textFieldRow($model,'mother_mobile',array('class'=>'span5','maxlength'=>12)); ?>
	<?php echo $form->textFieldRow($model,'father_mail',array('class'=>'span5','maxlength'=>250)); ?>
	<?php echo $form->textFieldRow($model,'mother_mail',array('class'=>'span5','maxlength'=>250)); ?>
	<?php echo $form->textFieldRow($model,'gender',array('class'=>'span5','maxlength'=>6)); ?>

	<?php echo $form->textFieldRow($model,'dob',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'marital_status',array('class'=>'span5','maxlength'=>9)); ?>
	<?php echo $form->textFieldRow($model,'religion',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'blood_group',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'photo',array('class'=>'span5','maxlength'=>250)); ?>

	<?php echo $form->textFieldRow($model,'school_name',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'school_location',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'school_syllabus',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'school_percentage',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'school_transcript',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'inter_college_name',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'inter_college_location',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'inter_percentage',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'inter_transcript',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'ug_district',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ug_college',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ug_course',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ug_branch',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ug_regno',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'ug_percentage',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'ug_transcript',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'pg_district',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pg_college',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pg_course',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pg_branch',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pg_specialization',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'pg_program_type',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'pg_regno',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'pg_percentage',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'pg_transcript',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'phd_regno',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'phd_branch',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'phd_program_type',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'phd_thesis_title',array('class'=>'span5','maxlength'=>300)); ?>

	<?php echo $form->textFieldRow($model,'phd_dor',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'registration_status',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'profile_created_on',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'registration_completed_on',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'approved_on',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'last_login_on',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'remarks',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>8)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
