<?php
$this->breadcrumbs=array(
	'Student Documents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StudentDocuments','url'=>array('index')),
	array('label'=>'Create StudentDocuments','url'=>array('create')),
	array('label'=>'Update StudentDocuments','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StudentDocuments','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentDocuments','url'=>array('admin')),
);
?>

<h1>View StudentDocuments #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'student_id',
		'document_type',
		'document',
		'file_name',
		'uploaded_on',
		'status',
	),
)); ?>
