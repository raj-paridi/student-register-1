<?php

class StudentDocumentsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('upload','update'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionUpload()

	{
		$student=Students::model()->findByPk(yii::app()->user->id);
		$model=new StudentDocuments;
		$model1=new StudentDocuments;
		$model2=new StudentDocuments;
		$model3=new StudentDocuments;
		$model4=new StudentDocuments;
		$model5=new StudentDocuments;
		$id_proof=StudentDocuments::model()->findByAttributes(array('student_id'=>yii::app()->user->id,'document_type'=>'ID Proof'),'status != "Rejected"');
		$school_document=StudentDocuments::model()->findByAttributes(array('student_id'=>yii::app()->user->id,'document_type'=>'Secondary Education'),'status != "Rejected"');
		$inter_document=StudentDocuments::model()->findByAttributes(array('student_id'=>yii::app()->user->id,'document_type'=>'Intermediate'),'status != "Rejected"');
		$ug_document=StudentDocuments::model()->findByAttributes(array('student_id'=>yii::app()->user->id,'document_type'=>'Under Graduation'),'status != "Rejected"');
		$pg_document=StudentDocuments::model()->findByAttributes(array('student_id'=>yii::app()->user->id,'document_type'=>'Post Graduation'),'status != "Rejected"');

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StudentDocuments']))
		{
			$model->attributes=$_POST['StudentDocuments'];
			// Start id proof upload 
			{
				$model1->student_id=yii::app()->user->id;
				$model1->uploaded_on =date("Y-m-d H:i:s");
				$model1->document_type=$model->document_type1;
				$model1->document=$model->document1;
				$uploadedFile1=CUploadedFile::getInstance($model,'file_name1');
				$fileName1 = "{$uploadedFile1}";  // random number + file name
				if($fileName1!='')
					$model1->file_name = yii::app()->user->id.'_'.date('U').'_'.$model1->document_type.'_'.$fileName1;
				
				if($model1->save())
				{
					$uploadedFile1->saveAs('documents/'.$model1->file_name);
				}
			}
			
			// Start 10th transcript
			{
				$model2->student_id=yii::app()->user->id;
				$model2->uploaded_on =date("Y-m-d H:i:s");
				$model2->document_type=$model->document_type2;
				$model2->document=$model->document2;
				$uploadedFile2=CUploadedFile::getInstance($model,'file_name2');
				$fileName2 = "{$uploadedFile2}";  // random number + file name
				if($fileName2!='')
					$model2->file_name = yii::app()->user->id.'_'.date('U').'_'.$model2->document_type.'_'.$fileName2;
				
				if($model2->save())
				{
					$uploadedFile2->saveAs('documents/'.$model2->file_name);
				}
			}
			
			// Start inter transcript
			{
				$model3->student_id=yii::app()->user->id;
				$model3->uploaded_on =date("Y-m-d H:i:s");
				$model3->document_type=$model->document_type3;
				$model3->document=$model->document3;
				$uploadedFile3=CUploadedFile::getInstance($model,'file_name3');
				$fileName3 = "{$uploadedFile3}";  // random number + file name
				if($fileName3!='')
					$model3->file_name = yii::app()->user->id.'_'.date('U').'_'.$model3->document_type.'_'.$fileName3;
				
				if($model3->save())
				{
					$uploadedFile3->saveAs('documents/'.$model3->file_name);
				}
			}
			// Start UG Transcript
			if($student->type=='PG' || $student->type=='PHD')
			{
				$model4->student_id=yii::app()->user->id;
				$model4->uploaded_on =date("Y-m-d H:i:s");
				$model4->document_type=$model->document_type4;
				$model4->document=$model->document4;
				$uploadedFile4=CUploadedFile::getInstance($model,'file_name4');
				$fileName4 = "{$uploadedFile4}";  // random number + file name
				if($fileName4!='')
					$model4->file_name = yii::app()->user->id.'_'.date('U').'_'.$model4->document_type.'_'.$fileName4;
				
				if($model4->save())
				{
					$uploadedFile4->saveAs('documents/'.$model4->file_name);
				}
			}
			
			// Start PG Tanscript
			if($student->type=='PHD')
			{
				$model5->student_id=yii::app()->user->id;
				$model5->uploaded_on =date("Y-m-d H:i:s");
				$model5->document_type=$model->document_type5;
				$model5->document=$model->document5;
				$uploadedFile5=CUploadedFile::getInstance($model,'file_name5');
				$fileName5 = "{$uploadedFile5}";  // random number + file name
				if($fileName5!='')
					$model5->file_name = yii::app()->user->id.'_'.date('U').'_'.$model5->document_type.'_'.$fileName5;
				
				if($model5->save())
				{
					$uploadedFile5->saveAs('documents/'.$model5->file_name);
				}
			}
			if(!$model1->hasErrors() && !$model2->hasErrors() && !$model3->hasErrors())
			{
				$student->registration_status=6;
				$student->save();
				$this->redirect(yii::app()->baseUrl.'/students/other_details_enter');
			}
		}

		$this->render('upload',array(
			'model'=>$model,'model1'=>$model1,'model2'=>$model2,'model3'=>$model3,'model4'=>$model4,'model5'=>$model5,
			'id_proof'=>$id_proof, 'school_document'=>$school_document, 'inter_document'=>$inter_document, 'ug_document'=>$ug_document, 'pg_document'=>$ug_document, 
			'student'=>$student,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=StudentDocuments::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='student-documents-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
