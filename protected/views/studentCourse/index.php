<?php
$this->breadcrumbs=array(
	'Student Courses',
);

$this->menu=array(
	array('label'=>'Create StudentCourse','url'=>array('create')),
	array('label'=>'Manage StudentCourse','url'=>array('admin')),
);
?>

<h1>Student Courses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
