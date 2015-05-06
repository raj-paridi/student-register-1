<?php
$this->layout='column1';
?>

<h1>Create Students</h1>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>
<p class="help-block">Fields with <span class="required">*</span> are required.</p>
<?php echo $form->errorSummary($student); ?>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->dropDownlistRow($model,'type',array(''=>'Select Course Type','UG'=>'UG','PG'=>'PG','PHD' =>'PHD'),array()); ?> </div>
  <div class="span3 control-group"> <?php echo $form->dropDownlistRow($model,'course',array(''=>'Select Course','B.Tech'=>'B.Tech','M.Tech'=>'M.Tech','PHD' =>'PHD','IDP'=>'IDP','IDDMP'=>'IDDMP','IIDDMP'=>'IIDDMP','Mca'=>'Mca','IIDDAPLP'=>'IIDDAPLP'),array()); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'file_name'); ?><?php echo CHtml::activeFileField($model,'file_name',array('required'=>'required')); ?> <br />
    <a href="<?php echo yii::app()->baseUrl.'/images/create_students_excel.xls';?>"><small>Download Excel Format</small></a><br />
    <?php echo $form->error($model,'file_name'); ?> </div>
</div>
<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Create',
		)); ?>
</div>
<?php 
if(!empty($rows))
{?>
<table cellspacing="3" cellpadding="3">
  <?php foreach ($rows as $row) {?>
  <tr>
    <?php foreach ($row as $col) {?>
    <td><?php echo $col; ?></td>
    <?php } ?>
  </tr>
  <?php } ?>
</table>
<?php
}
?>
<?php $this->endWidget(); ?>
