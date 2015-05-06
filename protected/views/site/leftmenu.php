<div class="pull-left w200">
<?php
$this->widget('bootstrap.widgets.TbMenu',array(
    'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
    'stacked'=>true, // whether this is a stacked menu
    'items'=>array(
		array('label'=>'My Dashboard', 'url'=>Yii::app()->baseUrl . "/students/", 'icon'=>'icon-th-large','active'=>$active=='my_dashboard'?1:0),
		array('label'=>'My Profile', 'url'=>Yii::app()->baseUrl . "/students/my_profile",'icon'=>'user', 'active'=>$active=='my_profile'?1:0),
		//array('label'=>'My Courses', 'url'=>Yii::app()->baseUrl . "/studentCourse/mycourses",'icon'=>'icon-list-alt', 'active'=>$active=='my_courses'?1:0),
		array('label'=>'Change Password', 'url'=>Yii::app()->baseUrl . "/students/changepassword",'icon'=>'user','active'=>$active=='changepassword'?1:0),
	),
	'htmlOptions'=>array(
		'style'=>'width:180px;float:left'
	),
));?>
</div>