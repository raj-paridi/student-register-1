<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Forgotvalidation';
$this->breadcrumbs=array(
	'Forgotvalidation',
);
?>
<?php if(Yii::app()->user->hasFlash('failure')):?>
    <div class="flash-error">
        <?php echo Yii::app()->user->getFlash('failure'); ?>
    </div>
<?php endif; ?>

<p>Please fill out the following form with your Forgot Password credentials:</p>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'login-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->textFieldRow($model,'roll_no'); ?>

	<?php echo $form->textFieldRow($model,'otp'); ?>

	<?php echo $form->passwordFieldRow($model,'password1'); ?>

	<?php echo $form->passwordFieldRow($model,'password2'); ?>
	

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Next',
        )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
