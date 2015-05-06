<?php
$this->breadcrumbs=array(
	'Ceh Feedbacks'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CehFeedback','url'=>array('index')),
	array('label'=>'Create CehFeedback','url'=>array('create')),
	array('label'=>'View CehFeedback','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage CehFeedback','url'=>array('admin')),
);
?>

<h1>Update CehFeedback <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>