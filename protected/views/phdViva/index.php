<?php
$this->breadcrumbs=array(
	'Phd Vivas',
);

$this->menu=array(
	array('label'=>'Create PhdViva','url'=>array('create')),
	array('label'=>'Manage PhdViva','url'=>array('admin')),
);
?>

<h1>Phd Viva Registration Forms</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
