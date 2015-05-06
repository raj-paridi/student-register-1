<?php
$this->breadcrumbs=array(
	'Pg Dissertations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PgDissertation','url'=>array('index')),
	array('label'=>'Create PgDissertation','url'=>array('create')),
	array('label'=>'Update PgDissertation','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete PgDissertation','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PgDissertation','url'=>array('admin')),
);
?>

<h1>View PgDissertation of #<?php echo $model->roll_no; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'roll_no',
		'course',
		'area_of_work',
		'institute_name',
		'guide_name',
		'date_of_reg',
		'file_name',
	),
)); ?>
