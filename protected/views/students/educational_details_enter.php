<?php
$this->layout='column1';
?>

<h3 class="pull-left">Enter your educational details</h3>
<p class="pull-right help-block">Fields with <span class="required">*</span> are required.</p>
<div class="clear"></div>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>
<?php echo $form->errorSummary($model); ?>
<legend>Secondary Education</legend>
<div class="row">
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'school_name'); ?> <?php echo $form->textField($model,'school_name',array('style'=>'width:506px')); ?> <?php echo $form->error($model,'school_name'); ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'school_location'); ?> <?php echo $form->textField($model,'school_location'); ?> <?php echo $form->error($model,'school_location'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'school_board'); ?>  <?php echo $form->dropDownlist($model,'school_board',array(''=>'Select','SSC'=>'SSC','CBSE'=>'CBSE','ICSE'=>'ICSE','Other'=>'Other')); ?><?php echo $form->error($model,'school_board'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'school_percentage'); ?> <?php echo $form->textField($model,'school_percentage'); ?> <?php echo $form->error($model,'school_percentage'); ?> </div>
</div>
<legend>Intermediate/Diploma Education</legend>
<div class="row">
  <div class="span6 control-group"> 
  <?php echo $form->labelEx($model,'inter_college_name'); ?> 
  <?php echo $form->textField($model,'inter_college_name',array('style'=>'width:506px')); ?> 
  <?php echo $form->error($model,'inter_college_name'); ?> 
 </div>
</div>
<div class="row">
  <div class="span3 control-group"> 
  <?php echo $form->labelEx($model,'inter_college_location'); ?> 
  <?php echo $form->textField($model,'inter_college_location'); ?> 
  <?php echo $form->error($model,'inter_college_location'); ?> 
  </div>
  <div class="span3 control-group"> 
  <?php echo $form->labelEx($model,'inter_board'); ?> 
  <?php echo $form->dropDownlist($model,'inter_board',array(''=>'Select','BIE'=>'BIE','CBSE'=>'CBSE','ICSE'=>'ICSE','Other'=>'Other')); ?> 
  <?php echo $form->error($model,'inter_board'); ?> 
  </div>
  <div class="span3 control-group"> 
  <?php echo $form->labelEx($model,'inter_percentage'); ?> 
  <?php echo $form->textField($model,'inter_percentage'); ?> 
  <?php echo $form->error($model,'inter_percentage'); ?> 
  </div>
</div>
<?php if ($model->type=='PG' || $model->type=='PHD') {?>
<legend>Under Graduation</legend>
<div class="row">
  <div class="span3 control-group"> 
  <?php echo $form->labelEx($model,'ug_district'); ?> 
  <?php echo $form->dropDownlist($model,'ug_district',CHtml::listData(Colleges::model()->findAll(array('order'=>'district')), 'district', 'district'),array('prompt'=>'Select','ajax' => array(
                                       'type'=>'POST', //request type
                                       'url'=>CController::createUrl('colleges/getcolleges'),  'update'=>'#Students_ug_college',
                                       'data' => 'js:{ "district" : $("#Students_ug_district").val(),"rand" : Math.floor(Math.random()*11)}',
                   ))); ?>  
	<?php echo $form->error($model,'ug_district'); ?> 
   </div>
  <div class="span6 control-group"> 
  <?php echo $form->labelEx($model,'ug_college'); ?> 
  <?php echo $form->dropDownlist($model,'ug_college',array(''=>'Select'),array('style'=>'width:506px')); ?>
  <?php echo $form->error($model,'ug_college'); ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> 
  <?php echo $form->labelEx($model,'ug_course'); ?> 
  <?php echo $form->dropDownlist($model,'ug_course',CHtml::listData(Courses::model()->findAll(array('order'=>'course')), 'course', 'course'),array('prompt'=>'Select','ajax' => array(
                                       'type'=>'POST', //request type
                                       'url'=>CController::createUrl('courses/getbranch'),  'update'=>'#Students_ug_branch',
                                       'data' => 'js:{ "course" : $("#Students_ug_course").val(),"rand" : Math.floor(Math.random()*11)}',
                   )));?> 
  <?php echo $form->error($model,'ug_course'); ?> 
  </div>
  <div class="span6 control-group"> 
  <?php echo $form->labelEx($model,'ug_branch'); ?> 
  <?php echo $form->dropDownlist($model,'ug_branch',array(''=>'Select'),array('style'=>'width:506px')); ?>
  <?php echo $form->error($model,'ug_branch'); ?> 
  </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'ug_regno'); ?> <?php echo $form->textField($model,'ug_regno'); ?> <?php echo $form->error($model,'ug_regno'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'ug_percentage'); ?> <?php echo $form->textField($model,'ug_percentage'); ?> <?php echo $form->error($model,'ug_percentage'); ?> </div>
</div>



<?php } if($model->type=='PHD') { ?>
<legend>Post Graduation</legend>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_district'); ?> <?php echo $form->dropDownlist($model,'pg_district',CHtml::listData(Colleges::model()->findAll(array('order'=>'district')), 'district', 'district'),array('prompt'=>'Select','ajax' => array(
                                       'type'=>'POST', //request type
                                       'url'=>CController::createUrl('colleges/getcolleges'),  'update'=>'#Students_pg_college',
                                       'data' => 'js:{ "district" : $("#Students_pg_district").val(),"rand" : Math.floor(Math.random()*11)}',
                   ))); ?>  <?php echo $form->error($model,'pg_district'); ?> </div>
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'pg_college'); ?> <?php echo $form->dropDownlist($model,'pg_college',array(''=>'Select'),array('style'=>'width:506px')); ?><?php echo $form->error($model,'pg_college'); ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_course'); ?> <?php echo $form->dropDownlist($model,'pg_course',array(''=>'Select','M.B.A'=>'M.B.A','M.C.A'=>'M.C.A','M.Pharma'=>'M.Pharma','M.Sc'=>'M.Sc','M.Tech'=>'M.Tech','MS'=>'MS'),array('ajax' => array(
                                       'type'=>'POST', //request type
                                       'url'=>CController::createUrl('courses/getbranch'),  'update'=>'#Students_pg_branch',
                                       'data' => 'js:{ "course" : $("#Students_pg_course").val(),"rand" : Math.floor(Math.random()*11)}',
                   ))); ?> <?php echo $form->error($model,'pg_course'); ?> </div>

  <div class="span3 control-group"> 
  <?php echo $form->labelEx($model,'pg_branch'); ?> 
  <?php echo $form->dropDownlist($model,'pg_branch',array(''=>'Select'),array('ajax' => array(
                                       'type'=>'POST', //request type
                                       'url'=>CController::createUrl('courses/getspecialization'),  'update'=>'#Students_pg_specialization',
                                       'data' => 'js:{ "course":$("#Students_pg_course").val(), "branch":$("#Students_pg_branch").val(), "rand":Math.floor(Math.random()*11)}',
                   ))); ?> 
				   <?php echo $form->error($model,'pg_branch'); ?> 
  </div>
  <div class="span3 control-group"> 
  <?php echo $form->labelEx($model,'pg_specialization'); ?> 
  <?php echo $form->dropDownlist($model,'pg_specialization',array(''=>'select')); ?> 
  <?php echo $form->error($model,'pg_specialization'); ?> 
  </div>
</div>




<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_regno'); ?> <?php echo $form->textField($model,'pg_regno'); ?> <?php echo $form->error($model,'pg_regno'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_percentage'); ?> <?php echo $form->textField($model,'pg_percentage'); ?> <?php echo $form->error($model,'pg_percentage'); ?> </div> 	
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_program_type'); ?> <?php echo $form->textField($model,'pg_program_type'); ?> <?php echo $form->error($model,'pg_program_type'); ?> </div>
</div>

<legend>Phd Details</legend>
<div class="row">
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'phd_thesis_title'); ?> <?php echo $form->textField($model,'phd_thesis_title',array('style'=>'width:506px')); ?> <?php echo $form->error($model,'phd_thesis_title'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'phd_dor'); ?> <?php echo $form->textField($model,'phd_dor'); ?> <?php echo $form->error($model,'phd_dor'); ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'phd_regno'); ?> <?php echo $form->textField($model,'phd_regno'); ?> <?php echo $form->error($model,'phd_regno'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'phd_branch'); ?> <?php echo $form->dropDownlist($model,'phd_branch',CHtml::listData(Courses::model()->findAll(array('order'=>'course','condition'=>'course="Ph.D"')), 'branch', 'branch'),array('prompt'=>'Select'));?> <?php echo $form->error($model,'phd_branch'); ?> </div> 	
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'phd_program_type'); ?> <?php echo $form->textField($model,'phd_program_type'); ?> <?php echo $form->error($model,'phd_program_type'); ?> </div>
</div>
<?php } ?>
<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
<?php $this->endWidget(); ?>
