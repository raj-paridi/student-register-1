<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roll_no')); ?>:</b>
	<?php echo CHtml::encode($data->roll_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course')); ?>:</b>
	<?php echo CHtml::encode($data->course); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_of_work')); ?>:</b>
	<?php echo CHtml::encode($data->area_of_work); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('institute_name')); ?>:</b>
	<?php echo CHtml::encode($data->institute_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guide_name')); ?>:</b>
	<?php echo CHtml::encode($data->guide_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_reg')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_reg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_name')); ?>:</b>
	<?php echo CHtml::encode($data->file_name); ?>
	<br />

	*/ ?>

</div>