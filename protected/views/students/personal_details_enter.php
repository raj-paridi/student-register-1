<?php
$this->layout='column1';
?>

<h3 class="pull-left">Enter your personal details</h3>
<p class="pull-right help-block">Fields with <span class="required">*</span> are required.</p>
<div class="clear"></div>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'students-form',
	'type'=>'horizontal',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>
<?php echo $form->errorSummary($model); ?>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'dob'); ?> <?php echo $form->dropDownlist($model,'day',array(''=>'Day','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31'),array('style'=>'width:60px')); ?> <?php echo $form->dropDownlist($model,'month',array(''=>'Month','01'=>'Jan','02'=>'Feb','03'=>'Mar','04'=>'Apr','05'=>'May','06'=>'Jun','07'=>'Jul','08'=>'Aug','09'=>'Sep','10'=>'Oct','11'=>'Nov','12'=>'Dec'),array('style'=>'width:78px')); ?> <?php echo $form->dropDownlist($model,'year',array(''=>'Year','1923'=>'1923','1924'=>'1924','1925'=>'1925','1926'=>'1926','1927'=>'1927','1928'=>'1928','1929'=>'1929','1930'=>'1930','1931'=>'1931','1932'=>'1932','1933'=>'1933','1934'=>'1934','1935'=>'1935','1936'=>'1936','1937'=>'1937','1938'=>'1938','1939'=>'1939','1940'=>'1940','1941'=>'1941','1942'=>'1942','1943'=>'1943','1944'=>'1944','1945'=>'1945','1946'=>'1946','1947'=>'1947','1948'=>'1948','1949'=>'1949','1950'=>'1950','1951'=>'1951','1952'=>'1952','1953'=>'1953','1954'=>'1954','1955'=>'1955','1956'=>'1956','1957'=>'1957','1958'=>'1958','1959'=>'1959','1960'=>'1960','1961'=>'1961','1962'=>'1962','1963'=>'1963','1964'=>'1964','1965'=>'1965','1966'=>'1966','1967'=>'1967','1968'=>'1968','1969'=>'1969','1970'=>'1970','1971'=>'1971','1972'=>'1972','1973'=>'1973','1974'=>'1974','1975'=>'1975','1976'=>'1976','1977'=>'1977','1978'=>'1978','1979'=>'1979','1980'=>'1980','1981'=>'1981','1982'=>'1982','1983'=>'1983','1984'=>'1984','1985'=>'1985','1986'=>'1986','1987'=>'1987','1988'=>'1988','1989'=>'1989','1990'=>'1990','1991'=>'1991','1992'=>'1992','1993'=>'1993','1994'=>'1994','1995'=>'1995','1996'=>'1996','1997'=>'1997','1998'=>'1998','1999'=>'1999','2000'=>'2000','2001'=>'2001','2002'=>'2002','2003'=>'2003','2004'=>'2004','2005'=>'2005','2006'=>'2006','2007'=>'2007','2008'=>'2008','2009'=>'2009','2010'=>'2010'),array('style'=>'width:70px',)); ?> <?php echo $form->error($model,'day'); ?> <?php echo $form->error($model,'month'); ?> <?php echo $form->error($model,'year'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'gender'); ?> <?php echo $form->dropDownlist($model,'gender',array(''=>'Select','Male'=>'Male','Female'=>'Female')); ?> <?php echo $form->error($model,'gender'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'marital_status'); ?> <?php echo $form->dropDownlist($model,'marital_status',array(''=>'Select','Unmarried'=>'Unmarried','Married'=>'Married')); ?> <?php echo $form->error($model,'marital_status'); ?> </div>

  
</div>
<div class="row">
	<div class="span3 control-group">
	<?php echo $form->labelEx($model,'religion'); ?> 
	<?php echo $form->dropDownlist($model,'religion',array(''=>'Select','Hindu'=>'Hindu','Muslim'=>'Muslim','christian'=>'christian','Buddh'=>'Buddh','Other'=>'Other')); ?> 
	<?php echo $form->error($model,'religion'); ?> 
	</div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'blood_group'); ?> <?php echo $form->dropDownlist($model,'blood_group',array(''=>'Select','unknown'=>'unknown','A-'=>'A-','A+'=>'A+','B-'=>'B-','B+'=>'B+', 'AB-'=>'AB-','AB+'=>'AB+','O-'=>'O-','O+'=>'O+')); ?> <?php echo $form->error($model,'blood_group'); ?> </div>
	<div class="span3 control-group">
	<?php echo $form->labelEx($model,'physicallyhandicapped'); ?> 
	<?php echo $form->dropDownlist($model,'physicallyhandicapped',array(''=>'Select','Yes'=>'Yes','No'=>'No')); ?> 
	<?php echo $form->error($model,'physicallyhandicapped'); ?> 
	</div>

</div>
<div class="row">
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'caste'); ?> <?php echo $form->dropDownlist($model,'caste',array(''=>'Select','OC'=>'OC','BC-A'=>'BC-A','BC-B'=>'BC-B','BC-C'=>'BC-C','BC-D'=>'BC-D','BC-E'=>'BC-E', 'SC'=>'SC','ST'=>'ST','OTHER'=>'OTHER')); ?> <?php echo $form->error($model,'caste'); ?> </div>
  <div class="span3 control-group"> <?php echo $form->labelEx($model,'sub_caste'); ?> <?php echo $form->textField($model,'sub_caste'); ?> <?php echo $form->error($model,'sub_caste'); ?> </div>
</div>
<div class="row">
    <div class="span3 control-group"> 
	  <?php echo $form->labelEx($model,'home_phone_number'); ?>
      <?php echo $form->textField($model,'home_phone_code',array('style'=>'width:43px;','maxlength'=>5,'onkeyup'=>'extractNumber(this,0,false);')); ?> 
      <?php echo $form->textField($model,'home_phone_number',array('style'=>'width:145px;','maxlength'=>8,'onkeyup'=>'extractNumber(this,0,false);')); ?> 
      <?php echo $form->error($model,'home_phone_number'); ?> 
    </div>

  <div class="span3 control-group"> <?php echo $form->labelEx($model,'alternate_number'); ?> <?php echo $form->textField($model,'alternate_number'); ?> <?php echo $form->error($model,'alternate_number'); ?> </div>
  
</div>
<div class="row">
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'present_address'); ?> <?php echo $form->textArea($model,'present_address',array('style'=>'width:506px;height:100px;')); ?> <?php echo $form->error($model,'present_address'); ?> </div>
</div>

<div class="row">
  <div class="span6 control-group"> <?php echo $form->labelEx($model,'permanent_address'); ?> <?php echo $form->textArea($model,'permanent_address',array('style'=>'width:506px;height:100px;')); ?> <?php echo $form->error($model,'permanent_address'); ?> </div>
</div>

<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
<?php $this->endWidget(); ?>
			