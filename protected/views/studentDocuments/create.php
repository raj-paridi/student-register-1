<?php
$this->breadcrumbs=array(
	'Student Documents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentDocuments','url'=>array('index')),
	array('label'=>'Manage StudentDocuments','url'=>array('admin')),
);
?>

<h1>Create StudentDocuments</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>