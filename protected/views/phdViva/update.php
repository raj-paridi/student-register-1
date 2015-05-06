<?php
$this->breadcrumbs=array(
	'Phd Vivas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PhdViva','url'=>array('index')),
	array('label'=>'Create PhdViva','url'=>array('create')),
	array('label'=>'View PhdViva','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage PhdViva','url'=>array('admin')),
);
?>

<h1>Update PhdViva Registraton Forms<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>