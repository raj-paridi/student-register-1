<?php
$this->breadcrumbs=array(
	'Student Course Subjects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentCourseSubjects','url'=>array('index')),
	array('label'=>'Create StudentCourseSubjects','url'=>array('create')),
	array('label'=>'View StudentCourseSubjects','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage StudentCourseSubjects','url'=>array('admin')),
);
?>

<h1>Update StudentCourseSubjects <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>