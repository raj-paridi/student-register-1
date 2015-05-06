<?php
$this->breadcrumbs=array(
	'Student Courses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentCourse','url'=>array('index')),
	array('label'=>'Manage StudentCourse','url'=>array('admin')),
);
?>

<h1>Create StudentCourse</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>