<?php

class CoursesController extends Controller
{
	public function actionGetBranch()	
	{
		$course = $_REQUEST['course'];
		$sample = array(0 => array('id' => '','branch' => 'Select Branch'));
		$options = Yii::app()->db->createCommand()->select('branch as id,branch')->from('ceh_courses')->where('course=:course', array(':course' => $course))->order('branch')->queryAll();

		$data = array_merge($sample, $options);
		$data = CHtml::listData($data, 'id', 'branch');
		foreach ($data as $value => $option) 
		{
			echo CHtml::tag('option', array('value' => $value), CHtml::encode($option), true);
		}
	}		
	public function actionGetSpecialization()	
	{
		$course = $_REQUEST['course'];
		$branch = $_REQUEST['branch'];
		$sample = array(0 => array('id' => '','specialization' => 'Select Specialization'));
		$options = Yii::app()->db->createCommand()->select('specialization as id,specialization')->from('ceh_courses')->where('course=:course AND branch=:branch', array(':course' => $course, ':branch'=>$branch))->order('specialization')->queryAll();

		$data = array_merge($sample, $options);
		$data = CHtml::listData($data, 'id', 'specialization');
		foreach ($data as $value => $option) 
		{
			echo CHtml::tag('option', array('value' => $value), CHtml::encode($option), true);
		}
	}	
}