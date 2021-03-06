<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),

)); ?>
<p class="help-block">The verification process will be initiated only after all documents are submitted.You can upload scanned documents or simply take a photograph of the documents and upload them!</p>
<?php echo $form->errorSummary($model); ?>
<?php if(empty($id_proof)) { ?>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->textField($model,'document_type1',array('value'=>'ID Proof', 'readonly'=>'readonly')); ?> <?php echo $form->error($model,'document_type1'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->dropDownlist($model,'document1',array(''=>'Select','PAN Card'=>'PAN Card','Driving License'=>'Driving License','Passport'=>'Passport','Aadhar Card'=>'Aadhar Card','Voter ID Card'=>'Voter ID Card'),array('required'=>'required')); ?> <?php echo $form->error($model,'document1'); ?> </div>
  <div class="span3 control-group"> 
  
  <?php echo CHtml::activeFileField($model,'file_name1',array('required'=>'required')); ?> 
  <?php echo $form->error($model,'file_name1'); ?> </div>
</div>
<?php } ?>

<?php if(empty($school_document)) { ?>
<div class="row">
  <div class="span3 control-group"><?php echo $form->textField($model,'document_type2',array('value'=>'Secondary Education', 'readonly'=>'readonly')); ?> <?php echo $form->error($model,'document_type2'); ?> </div>
  <div class="span3 control-group"><?php echo $form->dropDownlist($model,'document2',array(''=>'Select','Transcript'=>'Transcript'),array('required'=>'required')); ?> <?php echo $form->error($model,'document2'); ?> </div>
  <div class="span3 control-group"> <?php echo CHtml::activeFileField($model,'file_name2',array('required'=>'required')); ?> <?php echo $form->error($model,'file_name2'); ?> </div>
</div>
<?php } ?>

<?php if(empty($inter_document)) { ?>
<div class="row">
  <div class="span3 control-group"><?php echo $form->textField($model,'document_type3',array('value'=>'Intermediate', 'readonly'=>'readonly')); ?> <?php echo $form->error($model,'document_type3'); ?> </div>
  <div class="span3 control-group"><?php echo $form->dropDownlist($model,'document3',array(''=>'Select','Transcript'=>'Transcript'),array('required'=>'required')); ?> <?php echo $form->error($model,'document3'); ?> </div>
  <div class="span3 control-group"><?php echo CHtml::activeFileField($model,'file_name3',array('required'=>'required')); ?> <?php echo $form->error($model,'file_name3'); ?> </div>
</div>
<?php } ?>

<?php if($student->type=='PG' || $student->type=='PHD') {?>
<?php if(empty($ug_document)) { ?>
<div class="row">
  <div class="span3 control-group"><?php echo $form->textField($model,'document_type4',array('value'=>'Under Graduation', 'readonly'=>'readonly')); ?> <?php echo $form->error($model,'document_type4'); ?> </div>
  <div class="span3 control-group"><?php echo $form->dropDownlist($model,'document4',array(''=>'Select','Transcript'=>'Transcript'),array('required'=>'required')); ?><?php echo $form->error($model,'document4'); ?> </div>
  <div class="span3 control-group"><?php echo CHtml::activeFileField($model,'file_name4',array('required'=>'required')); ?> <?php echo $form->error($model,'file_name4'); ?> </div>
</div>
<?php } }?>
<?php if($student->type=='PHD') {?>
<?php if(empty($pg_document)) { ?>
<div class="row">
  <div class="span3 control-group"><?php echo $form->textField($model,'document_type5',array('value'=>'Post Graduation', 'readonly'=>'readonly')); ?> <?php echo $form->error($model,'document_type5'); ?> </div>
  <div class="span3 control-group"><?php echo $form->dropDownlist($model,'document5',array(''=>'Select','Transcript'=>'Transcript'),array('required'=>'required')); ?> <?php echo $form->error($model,'document5'); ?> </div>
  <div class="span3 control-group"><?php echo CHtml::activeFileField($model,'file_name5',array('required'=>'required')); ?> <?php echo $form->error($model,'file_name5'); ?> </div>
</div>
<?php } }?>


<div class="row">
  <div class="span3 control-group">
  <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>'Upload',
		)); ?>
        </div></div>
<?php $this->endWidget(); ?>
