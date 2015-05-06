<?php
$this->breadcrumbs=array(
	'Student Course Subjects',
);

$this->menu=array(
	array('label'=>'Create StudentCourseSubjects','url'=>array('create')),
	array('label'=>'Manage StudentCourseSubjects','url'=>array('admin')),
);
?>

<h1>Student Course Subjects</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
