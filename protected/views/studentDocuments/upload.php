<?php
$this->layout='column1';
?>

<h1>Upload Documents</h1>
<p class="note">All Fields are required.Please fill:</p>
<?php echo $this->renderPartial('_form', array(
			'model'=>$model,'model1'=>$model1,'model2'=>$model2,'model3'=>$model3,'model4'=>$model4,'model5'=>$model5,
			'id_proof'=>$id_proof, 'school_document'=>$school_document, 'inter_document'=>$inter_document, 'ug_document'=>$ug_document, 'pg_document'=>$ug_document, 
			'student'=>$student,
)); ?>