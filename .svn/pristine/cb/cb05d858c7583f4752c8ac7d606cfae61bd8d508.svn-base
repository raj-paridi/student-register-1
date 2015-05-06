<?php
$this->layout='column1';
?>

<h1 class="pull-left">Register for New Course</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'student-course-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Submit',
	'buttonType'=>'submit',
    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'normal', // null, 'large', 'small' or 'mini'
	'htmlOptions'=>array('style'=>'float:right;','onclick'=>'return confirm("Once you submit the form, you cant edit it.")'),
)); ?>
	<?php echo $form->hiddenField($student_course,'status',array('value'=>'Registered')); ?>
<?php $this->endWidget(); ?>
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
<?php $this->widget('bootstrap.widgets.TbButton', array(
    'label'=>'Add New Subject',
    'type'=>'success', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'small', // null, 'large', 'small' or 'mini'
	'htmlOptions'=>array('style'=>'float:right;','data-toggle'=>'modal',
        'data-target'=>'#myModal',
),
)); ?>
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
<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'student-course-subjects-form',
	'enableAjaxValidation'=>false,
)); ?>
 
<div class="modal-header">
    <a class="close" data-dismiss="modal">&times;</a>
    <h4>Add New Subject</h4>
</div>
 
<div class="modal-body">

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($subject); ?>
	<?php echo $form->textFieldRow($subject,'subject_type',array('class'=>'span5','maxlength'=>100)); ?>
      <?php echo $form->dropDownlistRow($subject,'subject_id',CHtml::listData(Subjects::model()->findAll(array('order'=>'subject_name')), 'id', 'subject_name'),array('prompt'=>'Select',)); ?> 


</div>
 
<div class="modal-footer">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
        'type'=>'primary',
        'label'=>'Add',
    )); ?>
</div>
 <?php $this->endWidget(); ?>

<?php $this->endWidget(); ?>