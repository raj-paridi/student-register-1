<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ForgotForm extends CFormModel
{
	public $roll_no;
	public $mobile;
	
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('roll_no, mobile', 'required'),
			// password needs to be authenticated
			//array('rollno,mobile', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
		'roll_no'=>'Enter Your Roll No:',	
		'mobile'=>'Enter Your mobile No:',
			);
	}
}