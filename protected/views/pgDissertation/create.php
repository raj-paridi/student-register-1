<?php
$this->breadcrumbs=array(
	'Pg Dissertations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PgDissertation','url'=>array('index')),
	array('label'=>'Manage PgDissertation','url'=>array('admin')),
);
?>

<h3>REGISTRATION FOR PROJECT WORK / DISSERTATION</h3>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>