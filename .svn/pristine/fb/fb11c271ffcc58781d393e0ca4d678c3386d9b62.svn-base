<?php
$this->breadcrumbs=array(
	'Ceh Feedbacks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List CehFeedback','url'=>array('index')),
	array('label'=>'Create CehFeedback','url'=>array('create')),
	array('label'=>'Update CehFeedback','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete CehFeedback','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CehFeedback','url'=>array('admin')),
);
?>

<h1>View CehFeedback #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'type',
		'name',
		'subject',
		'body',
		'sent_on',
	),
)); ?>
