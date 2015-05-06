<?php
$this->layout='column1';
?>
<?php echo $this->renderPartial('/site/leftmenu', array('active'=>'my_courses')); ?>
<div class="pull-right w790">
<h1>Manage Student Courses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'student-course-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>new CArrayDataProvider($model),
	'columns'=>array(
		array('name'=>'student_id','header'=>'Course','type'=>'raw','value'=>'$data->student->course'),
		'year',
		'semester',
		array('name'=>'status','header'=>'Status','type'=>'raw','value'=>'$data->status=="To Register"?"<a href=\"".yii::app()->baseUrl."/studentCourse/register/$data->id\">Register Now</a>":
																		  "<a href=\"".yii::app()->baseUrl."/studentCourse/view/$data->id\">$data->status</a>"'
		),
	),
)); ?>
</div>