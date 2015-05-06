<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>'Welcome to '.CHtml::encode(Yii::app()->name),
)); ?>

<!-- <p>Congratulations! You have successfully created your Yii application.</p> -->

<?php $this->endWidget(); ?>

<!-- <p>You may change the content of this page by modifying the following two files:</p>

<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>
-->

<h2>Instructions to fill this registration form </h2>
<ul>
	<li>1) Click on "Login" option.</li>
	<li>2) Login with your roll number (Like 12011F0001---here F-- is capital).</li>
	<li>3) Both username and password will be your roll_id for the first time.(like roll_id and password same as 12011F0001(capitals)).</li>
	<li>4) Then Fill your Details according to instructions given in labels(like names are capital and without periods(.)).</li>
	<li>5) After submitting your "preregister" page, you recieve your "otp" number in your mobiles.You will fill your 'otp' number on 'otp1' label(Somebody doesnot have mobile,who recieve the 'otp' number on your validation page like otp==otp1).</li>
	<li>6) Your Parental details also Capital with spaces(without periods) </li>
	<li>7) If you belongs to Diploma then you fill Inter details and give a feedback for this problem.</li>  
	<li>8) If you do not have your upload-documents then you will fill with dummy images.</li>
	<li>9) Upload your photo and finally give your feedback.</li>


</ul>