<?php
$this->breadcrumbs=array(
	'Pg Dissertations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PG Dissertation','url'=>array('index')),
	array('label'=>'Create PG Dissertation','url'=>array('create')),
	array('label'=>'View PG Dissertation','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PG Dissertation','url'=>array('admin')),
);
?>

<h2>Update PG Dissertation #<?php echo $model->roll_no; ?></h2>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>