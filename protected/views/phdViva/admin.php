<?php
$this->breadcrumbs=array(
	'Phd Vivas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List PhdViva','url'=>array('index')),
	array('label'=>'Create PhdViva','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('phd-viva-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Manage Phd Viva Forms(Thesis Registration)</h3>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'phd-viva-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date_of_exam',
		'student_name',
		'roll_no',
		'st_designation',
		'st_place_of_work',
		/*
		'address',
		'mobile',
		'area_of_work',
		'supervisor_name',
		'su_designation',
		'su_place_of_work',
		'examiner_name',
		'ex_designation',
		'ex_place_of_work',
		'file_name',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
