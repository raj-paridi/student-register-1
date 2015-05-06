<?php
$this->layout='column1';

?>
<!-- alert messages -->
<?php $this->widget('bootstrap.widgets.TbAlert', array(
			'alerts'=>array( // configurations per alert type
				'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
				'info'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
				'warning'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
				'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'&times;'), // success, info, warning, error or danger
			),
		));	?>
<!-- End alert message -->
<?php echo $this->renderPartial('/site/admin_leftmenu', array('active'=>'my_dashboard')); ?>
<div class="pull-right w790">
<h1>Welcome <?php echo yii::app()->user->name; ?></h1>

</div>

<div class="clear"></div>
