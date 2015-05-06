<?php

class StudentCourseController extends Controller
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
				'actions'=>array('MyCourses','Register','View'),
				'users'=>array('@'),
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
	public function actionView($id)
	{
		$student_course=StudentCourse::model()->findByPk($id);
		$student=Students::model()->findByPk(yii::app()->user->id);
		$registered_subject = StudentCourseSubjects::model()->findAll(array('condition'=>'course_id = '.$id));

		$this->render('view',array(
				'student_course'=>$student_course,'registered_subject'=>$registered_subject,'student'=>$student,
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new StudentCourse;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StudentCourse']))
		{
			$model->attributes=$_POST['StudentCourse'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['StudentCourse']))
		{
			$model->attributes=$_POST['StudentCourse'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('StudentCourse');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new StudentCourse('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['StudentCourse']))
			$model->attributes=$_GET['StudentCourse'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function actionMyCourses()
	{
		$model=StudentCourse::model()->findAll(array('condition'=>'student_id ='.yii::app()->user->id));

		$this->render('my_courses',array(
			'model'=>$model,
		));
	}
	public function actionRegister($id)
	{
		$student_course=StudentCourse::model()->findByPk($id);
		if($student_course->student_id==yii::app()->user->id && $student_course->status=='To Register')
		{
			$student=Students::model()->findByPk(yii::app()->user->id);
			$registered_subject = StudentCourseSubjects::model()->findAll(array('condition'=>'course_id = '.$id));
			$subject= new StudentCourseSubjects();
			if(isset($_POST['StudentCourseSubjects']))
			{
				$subject->attributes=$_POST['StudentCourseSubjects'];
				$subject->student_id=yii::app()->user->id;
				$subject->course_id=$id;
				if($subject->save())
				{
					$this->redirect(yii::app()->baseUrl.'/studentCourse/register/'.$id);
				}
			}
			if(isset($_POST['StudentCourse']))
			{
				$student_course->status='Registered';
				$student_course->registered_on=date('Y-m-s H:i:s');
				if($student_course->save())
				$this->redirect(yii::app()->baseUrl.'/studentCourse/mycourses');
			}
			$this->render('register',array(
				'student_course'=>$student_course, 'subject'=>$subject, 'registered_subject'=>$registered_subject,'student'=>$student,
			));
		}
		else
		{
				$this->redirect(yii::app()->baseUrl.'/studentCourse/mycourses');
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=StudentCourse::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='student-course-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
