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
<?php echo $this->renderPartial('/site/leftmenu', array('active'=>'my_dashboard')); ?>
<table>
	<tr>
		<td> &nbsp &nbsp &nbsp  </td>
		<td align="center"><h1>Welcome to <?php echo $student->first_name; ?></h1></td>
	<td> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   </td>
	<td><img src="<?php echo yii::app()->baseUrl.'/documents/images/'.$student->photo; ?>" width="125"/></td>
	</tr>
</table>
<div class="clear"></div>
