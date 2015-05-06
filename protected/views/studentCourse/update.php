<?php
$this->breadcrumbs=array(
	'Student Courses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentCourse','url'=>array('index')),
	array('label'=>'Create StudentCourse','url'=>array('create')),
	array('label'=>'View StudentCourse','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage StudentCourse','url'=>array('admin')),
);
?>

<h1>Update StudentCourse <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>