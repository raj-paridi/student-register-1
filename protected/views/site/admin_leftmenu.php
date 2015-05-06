<div class="pull-left w200">
<?php
$this->widget('bootstrap.widgets.TbMenu',array(
    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>true, // whether this is a stacked menu
    'items'=>array(
		array('label'=>'My Dashboard', 'url'=>Yii::app()->baseUrl . "/admin/", 'icon'=>'icon-th-large','active'=>$active=='my_dashboard'?1:0),
		array('label'=>'Create Students', 'url'=>Yii::app()->baseUrl . "/admin/create_students", 'icon'=>'icon-user','active'=>$active=='create_student'?1:0),
		array('label'=>'Ph.D Thesis', 'url'=>Yii::app()->baseUrl . "/phdViva/create", 'icon'=>'icon-th-large','active'=>$active=='phd_hesis'?1:0),
		array('label'=>'PG Dissertation', 'url'=>Yii::app()->baseUrl . "/pgDissertation/create", 'icon'=>'icon-th-large','active'=>$active=='pg_dissertation'?1:0),
		array('label'=>'Students List', 'url'=>Yii::app()->baseUrl . "/students/view/3636", 'icon'=>'icon-user','active'=>$active=='students_list'?1:0),
		
	),
	'htmlOptions'=>array(
		'style'=>'width:200px;float:left'
	),
));?>
</div>