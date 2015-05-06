
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>
<legend>Secondary Education</legend>
<div class="row">
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'school_name'); ?> <?php echo $model->school_name; ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'school_location'); ?> <?php echo $model->school_location; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'school_board'); ?> <?php echo $model->school_board; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'school_percentage'); ?> <?php echo $model->school_percentage; ?> </div>
</div>
<legend>Intermediate/Diploma Education</legend>
<div class="row">
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'inter_college_name'); ?> <?php echo $model->inter_college_name; ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'inter_college_location'); ?> <?php echo $model->inter_college_location; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'inter_board'); ?> <?php echo $model->inter_board; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'inter_percentage'); ?> <?php echo $model->inter_percentage; ?> </div>
</div>
<?php if ($model->type=='PG' || $model->type=='PHD') {?>
<legend>Under Graduation</legend>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'ug_district'); ?> <?php echo $model->ug_district; ?> </div>
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'ug_college'); ?> <?php echo $model->ug_college; ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'ug_course'); ?> <?php echo $model->ug_course; ?> </div>
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'ug_branch'); ?> <?php echo $model->ug_branch; ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'ug_regno'); ?> <?php echo $model->ug_regno; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'ug_percentage'); ?> <?php echo $model->ug_percentage; ?> </div>
</div>
<?php } if($model->type=='PHD') { ?>
<legend>Post Graduation</legend>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_district'); ?> <?php echo $model->pg_district; ?> </div>
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'pg_college'); ?> <?php echo $model->pg_college; ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_course'); ?> <?php echo $model->pg_course; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_branch'); ?> <?php echo $model->pg_branch; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_specialization'); ?> <?php echo $model->pg_specialization; ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_regno'); ?> <?php echo $model->pg_regno; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_percentage'); ?> <?php echo $model->pg_percentage; ?> </div> 	
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'pg_program_type'); ?> <?php echo $model->pg_program_type; ?> </div>
</div>

<legend>Phd Details</legend>
<div class="row">
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'phd_thesis_title'); ?> <?php echo $model->phd_thesis_title; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'phd_dor'); ?> <?php echo $model->phd_dor; ?> </div>
</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'phd_regno'); ?> <?php echo $model->phd_regno; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'phd_branch'); ?> <?php echo $model->phd_branch; ?> </div> 	
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'phd_program_type'); ?> <?php echo $model->phd_program_type; ?> </div>
</div>
<?php } ?>
<?php $this->endWidget(); ?>
