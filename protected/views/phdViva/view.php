<?php
$this->breadcrumbs=array(
	'Phd Vivas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PhdViva','url'=>array('index')),
	array('label'=>'Create PhdViva','url'=>array('create')),
	array('label'=>'Update PhdViva','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete PhdViva','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PhdViva','url'=>array('admin')),
);
?>

<h1>View PhdViva #<?php echo $model->roll_no; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_of_exam',
		'student_name',
		'roll_no',
		'st_designation',
		'st_place_of_work',
		'address',
		'mobile',
		'area_of_work',
		'supervisor_name',
		'su_designation',
		'su_place_of_work',
		'examiner_name',
		'ex_designation',
		'ex_place_of_work',
		'file_name',
	),
)); ?>
