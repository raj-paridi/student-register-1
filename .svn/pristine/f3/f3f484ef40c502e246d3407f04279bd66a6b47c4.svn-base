<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<?php Yii::app()->bootstrap->register(); ?>
<!-- Custom Scripts -->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/general.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/template.css" />
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="<?php echo Yii::app()->baseUrl; ?>/images/favicon.png"/>
</head>

<body>
<div class="wrapper">
  <header> <img src="<?php echo yii::app()->baseUrl; ?>/images/logo.png" class="logo">
    <div class="header"> <span class="college_name">JNTUH College of Engineering Hyderabad(Autonomous)</span><br/>
      <br/>
      <span class="college_address">Kukatpally, Hyderabad - 500 085, Telangana, India</span> </div>
    <div class="clear"></div>
  </header>
  <?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'type'=>'inverse', // null or 'inverse'
	'fixed' => false,		
    'brand'=>'Home',
    'brandUrl'=>yii::app()->baseUrl.'/',
    'collapse'=>true, // requires bootstrap-responsive.css
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
              /*  array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Dropdown', 'url'=>'#', 'items'=>array(
                    array('label'=>'Action', 'url'=>'#'),
                    array('label'=>'Another action', 'url'=>'#'),
                    array('label'=>'Something else here', 'url'=>'#'),
                )), */
            ),
        ),
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'My Account', 'url'=>array('/admin/index'), 'visible'=>yii::app()->user->hasState("role") && yii::app()->user->role==1),
                array('label'=>'My Account', 'url'=>array('/students/index'), 'visible'=>yii::app()->user->hasState("role") && yii::app()->user->role=='Student'),
				array('label'=>'Feed Back', 'url'=>array('/cehFeedback/create'), 'visible'=>yii::app()->user->hasState("role") && yii::app()->user->role=='Student'),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
        ),
    ),
)); ?>
  <!--start breadcrumbs -->
  <?php if(isset($this->breadcrumbs)):?>
  <?php // $this->widget('bootstrap.widgets.TbBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?>
  <?php endif?>
  <!--end  breadcrumbs --> 
  <?php echo $content; ?>
  <div class="clear"></div>
  <footer>
    <div class="footer"> Copyright &copy; 2013 - <?php echo date('Y'); ?>, JNTUHCEH. | All Rights Reserved. | Powered by <a href="http://www.jntuh.ac.in" target="_blank">JNTU-CEH</a>. </div>
  </footer>
  <!-- footer --> 
  
</div>
<!-- wrapper -->

</body>
</html>
