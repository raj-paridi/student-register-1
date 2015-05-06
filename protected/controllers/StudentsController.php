<?php

class StudentsController extends Controller
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
				'actions'=>array('index','preregister','validation','personal_details_enter','parental_details_enter','educational_details_enter','other_details_enter','my_profile','changepassword'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('view'),
				'expression'=>'yii::app()->user->hasState("role") && yii::app()->user->role==1'
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */

	public function actionIndex()
	{
		$student=Students::model()->findByPk(yii::app()->user->id);
		switch($student->registration_status)
		{
			case 0:
				$this->redirect(Yii::app()->baseUrl . "/students/preregister/");
				break;
			case 1:
				$this->redirect(Yii::app()->baseUrl . "/students/validation/");
				break;				
			case 2:
				$this->redirect(Yii::app()->baseUrl . "/students/personal_details_enter/");
				break;
			case 3:
				$this->redirect(Yii::app()->baseUrl . "/students/parental_details_enter/");
				break;
			case 4:
				$this->redirect(Yii::app()->baseUrl . "/students/educational_details_enter/");
				break;
			case 5:
				$this->redirect(yii::app()->baseUrl.'/studentDocuments/upload');
				break;
			case 6:
				$this->redirect(Yii::app()->baseUrl . "/students/other_details_enter/");
                break;
			case 7:
				$this->render('index', array('student' => $student,));
                break;
		}
	}

	public function actionPreRegister()
	{
		$model=Students::model()->findByPk(yii::app()->user->id);
		$model->scenario = 'preregister';

		// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

		if (isset($_POST['Students']))
		{
            $model->attributes = $_POST['Students'];
			$password1=$model->password1;
			$password2=$model->password2;
			$model->profile_created_on = date('Y-m-d H:i:s');
			$model->registration_status=1;
			$model->otp=SMSGateway::model()->generateOTP();
            if ($model->password1 != '' && $model->password1 == $model->password2)
			{
                $model->password  = md5($model->password1);
            }
			if($model->save())
			{
				$url=SMSGateway::model()->sendSMS($model->mobile,'Your JNTUHCEH verification code is '.$model->otp);
				$this->redirect(yii::app()->baseUrl.'/students/validation');
			}
		}
		$this->render('preregister', array('model' => $model,));
	}

	public function actionValidation()
	{
		$model=Students::model()->findByPk(yii::app()->user->id);
		$model->scenario='mobile_validation';
		if (isset($_POST['Students']))
		{
			$model->otp1=$_POST['Students']['otp1'];
			if($model->otp==$model->otp1)
			{
				$model->mobile_validation=1;
				$model->registration_status=2;
			}
			if($model->save())
			{
				$this->redirect(yii::app()->baseUrl.'/students/personal_details_enter');
			}
		}
		$this->render('validation', array('model' => $model,));
	}
	
	public function actionPersonal_Details_Enter()
	{
		$model=Students::model()->findByPk(yii::app()->user->id);
		$model->scenario = 'personal_details_enter';

		// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

		if (isset($_POST['Students']))
		{
            $model->attributes = $_POST['Students'];
			$model->dob=$model->year.'-'.$model->month.'-'.$model->day;
			$model->home_phone=$model->home_phone_code.'-'.$model->home_phone_number;
			$model->registration_status=3;

			if($model->save())
			{
				$this->redirect(yii::app()->baseUrl.'/students/parental_details_enter');
			}
			else
			{

				$date_of_birth=explode('-',$model->dob);
				$model->year=$date_of_birth[0];
				$model->month=$date_of_birth[1];
				$model->day=$date_of_birth[2];

				$home_phone=explode('-',$model->home_phone);
				$model->home_phone_code=$home_phone[0];
				$model->home_phone_number=$home_phone[1];
			}
		}
		$this->render('personal_details_enter', array('model' => $model,));
	}

	public function actionParental_Details_Enter()
	{
		$model=Students::model()->findByPk(yii::app()->user->id);
		$model->scenario = 'parental_details_enter';

		// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

		if (isset($_POST['Students']))
		{
            $model->attributes = $_POST['Students'];
			$model->registration_status=4;

			if($model->save())
			{
				$this->redirect(yii::app()->baseUrl.'/students/educational_details_enter');
			}
		}
		$this->render('parental_details_enter', array('model' => $model,));
	}
	
	public function actionEducational_Details_Enter()
	{
		$model=Students::model()->findByPk(yii::app()->user->id);
		if($model->type=='UG')
		$model->scenario = 'ug_educational_details_enter';
		else if($model->type=='PG')
		$model->scenario = 'pg_educational_details_enter';
		else if($model->type=='PHD')
		$model->scenario = 'phd_educational_details_enter';
		
		// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

		if (isset($_POST['Students']))
		{
            $model->attributes = $_POST['Students'];
			$model->registration_status=5;

			if($model->save())
			{
				$this->redirect(yii::app()->baseUrl.'/studentDocuments/upload');
			}
		}
		$this->render('educational_details_enter', array('model' => $model,));
	}
	
	public function actionOther_Details_Enter()
	{
		$model=Students::model()->findByPk(yii::app()->user->id);
		$model->scenario = 'other_details_enter';
		
		// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

		if (isset($_POST['Students']))
		{
            $model->attributes = $_POST['Students'];
			$model->registration_completed_on = date("Y-m-d H:i:s");
			$model->registration_status=7;
			$uploadedFile=CUploadedFile::getInstance($model,'photo');
			$photo = "{$uploadedFile}";  // random number + file name
			if($photo!='')
				$model->photo = yii::app()->user->id.'_'.date('U').'_'.$photo;
			if($model->save())
			{
					$uploadedFile->saveAs('documents/images/'.$model->photo);
				$this->redirect(yii::app()->baseUrl.'/students/index');
			}
		}
		$this->render('other_details_enter', array('model' => $model,));
	}
	
	public function actionMy_Profile()
	{
		$model=Students::model()->findByPk(yii::app()->user->id);
		$student_documents=StudentDocuments::model()->findAll(array('condition'=>'student_id='.yii::app()->user->id.' AND status!="Rejected"'));
		$this->render('my_profile', array('model' => $model, 'student_documents' => $student_documents));
	}
	
	public function actionChangepassword()
	{
		$model=Students::model()->findByPk(yii::app()->user->id);
		//$model->scenario = 'changepassword';

		// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

		if (isset($_POST['Students']))
		{
            $model->attributes = $_POST['Students'];
			$password1=$model->password1;
			$password2=$model->password2;
			$current_password=$model->current_password;
			if ($model->password1 != '' && $model->password1 == $model->password2)
			{
				if(md5($current_password) == $model->password)
				{
					$model->password  = md5($model->password1);
				}
				if($model->save())
				{
					$this->redirect('index', array('model' => $model));
				}
			}
		}
		$this->render('changepassword',array('model' => $model));
	}

	public function loadModel($id)
	{
		$model=Students::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}


	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='students-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
