<?php
$this->breadcrumbs=array(
	'Student Course Subjects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentCourseSubjects','url'=>array('index')),
	array('label'=>'Create StudentCourseSubjects','url'=>array('create')),
	array('label'=>'Update StudentCourseSubjects','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StudentCourseSubjects','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentCourseSubjects','url'=>array('admin')),
);
?>

<h1>View StudentCourseSubjects #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'student_id',
		'course_id',
		'subject_id',
		'subject_type',
		'status',
	),
)); ?>
