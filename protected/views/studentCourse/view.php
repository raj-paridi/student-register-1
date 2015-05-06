<?php
$this->layout='column1';
?>

<h1 class="pull-left">Course Registration</h1>

<div class="clear"></div>

<table width="100%">
  <tr>
    <td>Name :</td>
    <td><?php echo $student->full_name; ?></td>
    <td>Father Name :</td>
    <td><?php echo $student->father_name; ?></td>
  </tr>
  <tr>
    <td>Roll No :</td>
    <td><?php echo $student->roll_no; ?></td>
    <td>Course :</td>
    <td><?php echo $student->course; ?></td>
  </tr>
  <tr>
    <td>Year :</td>
    <td><?php echo $student_course->year; ?></td>
    <td>Semister :</td>
    <td><?php echo $student_course->semester; ?></td>
  </tr>
</table>
<br />
<h3 class="pull-left">Registered Subjects</h3>

<div class="clear"></div>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'student-course-subject-grid',
	'type'=>'striped bordered condensed',
	'template'=>'{items}{pager}',
	'dataProvider'=>new CArrayDataProvider($registered_subject),
	'columns'=>array(
		array('name'=>'id','header'=>'subject type','type'=>'raw','value'=>'$data->subject_type'),
		array('name'=>'id','header'=>'subject type','type'=>'raw','value'=>'$data->subject_type'),
		array('name'=>'id','header'=>'subject code','type'=>'raw','value'=>'$data->subject->code'),
		array('name'=>'id','header'=>'subject name','type'=>'raw','value'=>'$data->subject->subject_name'),
	),
)); ?>
