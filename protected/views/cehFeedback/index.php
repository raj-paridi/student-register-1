<?php
$this->breadcrumbs=array(
	'Ceh Feedbacks',
);

$this->menu=array(
	array('label'=>'Create CehFeedback','url'=>array('create')),
	array('label'=>'Manage CehFeedback','url'=>array('admin')),
);
?>

<h1>Ceh Feedbacks</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
