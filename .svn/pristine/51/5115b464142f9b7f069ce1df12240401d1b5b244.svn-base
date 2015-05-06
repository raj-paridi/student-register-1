<?php
$this->layout='column1';

?>
<style>
#students-form { 
margin: 0px;
}
.row{margin-left:0;}
[class*="span"] { 
margin-left:0px;
margin-right:10px;
}
 .control-group{
	 border-bottom:1px dashed #EEEEEE;
	 padding-bottom:10px;
	 margin-bottom:10px;
 }
.span3{width:235px;}
.span6{width: 480px;}
label { 
color: #595959;
font-family: "Arial", "Helvetica", sans-serif;
font-size: 11px;
font-weight: 400;
margin-left:-5px;
margin-bottom: 0px;
}
.ui-widget-content a {
color: #0088cc; }
</style>
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
<?php echo $this->renderPartial('/site/leftmenu', array('active'=>'my_profile')); ?>
<div class="pull-right w790">
  <?php
$this->widget('zii.widgets.jui.CJuiTabs',array(
    'tabs'=>array(
		'Personal'=>array('id'=>'personal','content'=>$this->renderPartial("personal_details", array('model' => $model),TRUE)),   
		'Parental'=>array('id'=>'parental','content'=>$this->renderPartial("parental_details", array('model' => $model),TRUE)),   
		'Educational'=>array('id'=>'educational','content'=>$this->renderPartial("educational_details", array('model' => $model),TRUE)),   
		'Others'=>array('id'=>'others','content'=>$this->renderPartial("other_details", array('model' => $model),TRUE)),   
		'Documents'=>array('id'=>'documents','content'=>$this->renderPartial("student_documents", array('student_documents' => $student_documents,'pageSize'=>'10'),TRUE)),   
    ),
    // additional javascript options for the tabs plugin
    'options'=>array(
        'collapsible'=>true,
    ),
    'id'=>'MyProfile-Tab',
));
?>

</div>
<div class="clear"></div>
