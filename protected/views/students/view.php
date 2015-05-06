<?php
$this->breadcrumbs=array(
	'Students'=>array('view'),
	$model->id,
);
?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label' => 'Prev',
			'url' => 'admin/index',
		)); ?>
<h1>View Student &nbsp&nbsp&nbsp#<?php echo $model->roll_no; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'roll_no',
		'first_name',
		'last_name',
		'type',
		'course',
		'father_name',
		'mother_name',
		'mobile',
		'email',
		'present_address',
		'permanent_address',
		'caste',
		'sub_caste',
		'father_occupation',
		'father_income',
		'mother_occupation',
		'mother_income',
		'home_phone',
		'gender',
		'dob',
		'marital_status',
		'religion',
		'school_name',
		'school_location',
		'school_board',
		'school_percentage',
		'inter_college_name',
		'inter_college_location',
		'inter_board',
		'inter_percentage',
		'ug_district',
		'ug_college',
		'ug_course',
		'ug_branch',
		'ug_regno',
		'ug_percentage',
		'pg_district',
		'pg_college',
		'pg_course',
		'pg_branch',
		'pg_specialization',
		'pg_program_type',
		'pg_regno',
		'pg_percentage',
		'phd_regno',
		'phd_branch',
		'phd_program_type',
		'phd_thesis_title',
		'phd_dor',
		'registration_status',
		'profile_created_on',
		'registration_completed_on',
		'approved_on',
		'status',
	),
)); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Next',
			'url'=>'admin/index'
		)); ?>
