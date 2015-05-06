<?php

class UgRegForm extends CFormModel
{
	public $group_id;
	public $count;
	
	public function rules()
	{
		return array(
			// username and password are required
			array('group_id,count', 'required'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'group_id'=>'Enter Group ID',
			'count'=>'Enter Number of Students in this Group',
		);
	}
}
