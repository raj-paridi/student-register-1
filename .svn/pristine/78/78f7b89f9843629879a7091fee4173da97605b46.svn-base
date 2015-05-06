<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$record=Students::model()->findByAttributes(array('roll_no'=>strtoupper($this->username)));
        if($record===null)
		{
			$record=Admin::model()->findByAttributes(array('email'=>strtoupper($this->username)));
			if($record===null)
				$this->errorCode=self::ERROR_USERNAME_INVALID;
			else if(($record->password)!==md5($this->password))
				$this->errorCode=self::ERROR_PASSWORD_INVALID;
			else
			{
				$this->setState('id', $record->id);
				$this->setState('name', $record->name);
				$this->setState('role', $record->role);
				$this->errorCode=self::ERROR_NONE;
				Admin::model()->fnSetLastLogin($record->id);
			}
			return !$this->errorCode;
		}
        else if(($record->password)!==md5($this->password))
         	$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
	    {
            $this->setState('id', $record->id);
            $this->setState('name', $record->first_name.' '.$record->last_name);
			$this->setState('roll_no', $record->roll_no);
			$this->setState('role', 'Student');
            $this->errorCode=self::ERROR_NONE;
			Students::model()->fnSetLastLogin($record->id);
        }
		return !$this->errorCode;
	}
}