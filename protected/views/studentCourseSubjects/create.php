<?php
$this->breadcrumbs=array(
	'Student Course Subjects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentCourseSubjects','url'=>array('index')),
	array('label'=>'Manage StudentCourseSubjects','url'=>array('admin')),
);
?>

<h1>Create StudentCourseSubjects</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>