<?php
$this->breadcrumbs=array(
	'Phd Vivas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PhdViva','url'=>array('index')),
	array('label'=>'Manage PhdViva','url'=>array('admin')),
);
?>

<h3>REGISTRATION FOR PROJECT WORK / THESIS</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>