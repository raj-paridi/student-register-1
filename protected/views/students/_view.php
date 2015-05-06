<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course')); ?>:</b>
	<?php echo CHtml::encode($data->course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roll_no')); ?>:</b>
	<?php echo CHtml::encode($data->roll_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('father_name')); ?>:</b>
	<?php echo CHtml::encode($data->father_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_name')); ?>:</b>
	<?php echo CHtml::encode($data->mother_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_validation')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_validation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alternate_number')); ?>:</b>
	<?php echo CHtml::encode($data->alternate_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_validation')); ?>:</b>
	<?php echo CHtml::encode($data->email_validation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('present_address')); ?>:</b>
	<?php echo CHtml::encode($data->present_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('permanent_address')); ?>:</b>
	<?php echo CHtml::encode($data->permanent_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physicallyhandicapped')); ?>:</b>
	<?php echo CHtml::encode($data->physicallyhandicapped); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caste')); ?>:</b>
	<?php echo CHtml::encode($data->caste); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_caste')); ?>:</b>
	<?php echo CHtml::encode($data->sub_caste); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_occupation')); ?>:</b>
	<?php echo CHtml::encode($data->father_occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_income')); ?>:</b>
	<?php echo CHtml::encode($data->father_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_occupation')); ?>:</b>
	<?php echo CHtml::encode($data->mother_occupation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_income')); ?>:</b>
	<?php echo CHtml::encode($data->mother_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_phone')); ?>:</b>
	<?php echo CHtml::encode($data->home_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->father_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mother_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('father_mail')); ?>:</b>
	<?php echo CHtml::encode($data->father_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mother_mail')); ?>:</b>
	<?php echo CHtml::encode($data->mother_mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dob')); ?>:</b>
	<?php echo CHtml::encode($data->dob); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_status')); ?>:</b>
	<?php echo CHtml::encode($data->marital_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religion')); ?>:</b>
	<?php echo CHtml::encode($data->religion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_group')); ?>:</b>
	<?php echo CHtml::encode($data->blood_group); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_name')); ?>:</b>
	<?php echo CHtml::encode($data->school_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_location')); ?>:</b>
	<?php echo CHtml::encode($data->school_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_board')); ?>:</b>
	<?php echo CHtml::encode($data->school_board); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->school_percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inter_college_name')); ?>:</b>
	<?php echo CHtml::encode($data->inter_college_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inter_college_location')); ?>:</b>
	<?php echo CHtml::encode($data->inter_college_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inter_board')); ?>:</b>
	<?php echo CHtml::encode($data->inter_board); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inter_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->inter_percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ug_district')); ?>:</b>
	<?php echo CHtml::encode($data->ug_district); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ug_college')); ?>:</b>
	<?php echo CHtml::encode($data->ug_college); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ug_course')); ?>:</b>
	<?php echo CHtml::encode($data->ug_course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ug_branch')); ?>:</b>
	<?php echo CHtml::encode($data->ug_branch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ug_regno')); ?>:</b>
	<?php echo CHtml::encode($data->ug_regno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ug_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->ug_percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pg_district')); ?>:</b>
	<?php echo CHtml::encode($data->pg_district); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pg_college')); ?>:</b>
	<?php echo CHtml::encode($data->pg_college); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pg_course')); ?>:</b>
	<?php echo CHtml::encode($data->pg_course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pg_branch')); ?>:</b>
	<?php echo CHtml::encode($data->pg_branch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pg_specialization')); ?>:</b>
	<?php echo CHtml::encode($data->pg_specialization); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pg_program_type')); ?>:</b>
	<?php echo CHtml::encode($data->pg_program_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pg_regno')); ?>:</b>
	<?php echo CHtml::encode($data->pg_regno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pg_percentage')); ?>:</b>
	<?php echo CHtml::encode($data->pg_percentage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phd_regno')); ?>:</b>
	<?php echo CHtml::encode($data->phd_regno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phd_branch')); ?>:</b>
	<?php echo CHtml::encode($data->phd_branch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phd_program_type')); ?>:</b>
	<?php echo CHtml::encode($data->phd_program_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phd_thesis_title')); ?>:</b>
	<?php echo CHtml::encode($data->phd_thesis_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phd_dor')); ?>:</b>
	<?php echo CHtml::encode($data->phd_dor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_status')); ?>:</b>
	<?php echo CHtml::encode($data->registration_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profile_created_on')); ?>:</b>
	<?php echo CHtml::encode($data->profile_created_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('registration_completed_on')); ?>:</b>
	<?php echo CHtml::encode($data->registration_completed_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved_on')); ?>:</b>
	<?php echo CHtml::encode($data->approved_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login_on')); ?>:</b>
	<?php echo CHtml::encode($data->last_login_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otp')); ?>:</b>
	<?php echo CHtml::encode($data->otp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	*/ ?>

</div>