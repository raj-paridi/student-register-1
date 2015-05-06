<?php
$this->breadcrumbs=array(
	'Pg Dissertations',
);

$this->menu=array(
	array('label'=>'Create PgDissertation','url'=>array('create')),
	array('label'=>'Manage PgDissertation','url'=>array('admin')),
);
?>

<h3>REGISTRATION FOR PROJECT WORK / DISSERTATION</h3>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
