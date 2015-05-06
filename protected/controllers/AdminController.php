<?php

class AdminController extends Controller
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
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','create_students'),
				'expression'=>'yii::app()->user->hasState("role") && yii::app()->user->role==1'
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Admin');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionCreate_Students()
	{
		$model=new Students;
		$student=new Students;
		$rows='';
		$model->scenario = 'create_student';
		if(isset($_POST['Students']))
		{
			$model->attributes=$_POST['Students'];
 			$uploadedFile=CUploadedFile::getInstance($model,'file_name');
			$fileName = "{$uploadedFile}";  // random number + file name
			if($fileName!='')
			{	
				$model->file_name = $fileName;
				$uploadedFile->saveAs('documents/temp/'.$model->file_name);
				error_reporting(E_ALL ^ E_NOTICE);
				require_once 'F:/wamp/www/'.yii::app()->baseUrl.'/protected/vendor/excel_reader2.php';
				$data = new Spreadsheet_Excel_Reader('documents/temp/'.$model->file_name);
				$rows = $data->sheets[0][cells];
				$count=1;
				foreach($rows as $row)
				{
					if($count!=1)// to discard first row
					{
						$student = new Students;
						$student->type = $model->type;
						$student->course = $model->course;
						$student->roll_no = $row[1];
						//$student->full_name = $row[2];
						$student->mobile = $row[2];
						$student->email = $row[3];
						
						$student->password = md5($student->roll_no);
						if($student->save())
							$rows[$count][4] = 'created';
						else
							$rows[$count][4] = 'failed';
						$count++;

					}
					else
					$count++;
				}
				
			}
						
			
		}
		$this->render('create_students',array(
			'model'=>$model,'rows' => $rows, 'student'=> $student
		));
	}
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Admin::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='admin-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
