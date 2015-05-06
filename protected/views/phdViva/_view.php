<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_exam')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_exam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_name')); ?>:</b>
	<?php echo CHtml::encode($data->student_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('roll_no')); ?>:</b>
	<?php echo CHtml::encode($data->roll_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_designation')); ?>:</b>
	<?php echo CHtml::encode($data->st_designation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('st_place_of_work')); ?>:</b>
	<?php echo CHtml::encode($data->st_place_of_work); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area_of_work')); ?>:</b>
	<?php echo CHtml::encode($data->area_of_work); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supervisor_name')); ?>:</b>
	<?php echo CHtml::encode($data->supervisor_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('su_designation')); ?>:</b>
	<?php echo CHtml::encode($data->su_designation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('su_place_of_work')); ?>:</b>
	<?php echo CHtml::encode($data->su_place_of_work); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('examiner_name')); ?>:</b>
	<?php echo CHtml::encode($data->examiner_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ex_designation')); ?>:</b>
	<?php echo CHtml::encode($data->ex_designation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ex_place_of_work')); ?>:</b>
	<?php echo CHtml::encode($data->ex_place_of_work); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file_name')); ?>:</b>
	<?php echo CHtml::encode($data->file_name); ?>
	<br />

	*/ ?>

</div>