
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>

<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'father_name'); ?> <?php echo $model->father_name; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_name'); ?> <?php echo $model->mother_name; ?> </div>
</div>

<div class="row">
	<div class="span3 control-group"> <?php echo $form->labelEx($model,'father_occupation'); ?> <?php echo $model->father_occupation; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_occupation'); ?> <?php echo $model->mother_occupation; ?> </div>
</div>

<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'father_income'); ?> <?php echo $model->father_income; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_income'); ?> <?php echo $model->mother_income; ?> </div>
</div>

<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'father_mobile'); ?> <?php echo $model->father_mobile; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_mobile'); ?> <?php echo $model->mother_mobile; ?> </div>
</div>

<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'father_mail'); ?> <?php echo $model->father_mail; ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'mother_mail'); ?> <?php echo $model->mother_mail; ?> </div>
</div>

<?php $this->endWidget(); ?>
