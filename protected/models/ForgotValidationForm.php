<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ForgotValidationForm extends CFormModel
{
	public $roll_no;
	public $otp;
	public $password1;
	public $password2;
	
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
			array('roll_no, otp, password1, password2', 'required'),
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
		'roll_no'=>'Your Roll Number :',
		'otp'=>'OTP you\'re receive :',	
		'password1'=>'Your Password :',
		'password2'=>'Re-type Password :',
			);
	}
}