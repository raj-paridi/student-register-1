<?php

/**
 * This is the model class for table "ceh_sms_gateway".
 *
 * The followings are the available columns in table 'ceh_sms_gateway':
 * @property integer $id
 * @property integer $user_id
 * @property string $mobile
 * @property string $status
 * @property string $message_id
 * @property string $sent_on
 */
class SMSGateway extends CActiveRecord
{
	public $username='JNTUHCEH';
	public $password='JNTUHCEH2008';
	public $sender_id='JNTUHC';
	public $msg_type='N'; /*N/OL/R/P/L/F/WP/LS*/
	public $delivery_report='Y'; /*Y/N*/

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ceh_sms_gateway';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, mobile, sent_on', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('mobile, status, message_id', 'length', 'max'=>15),
			array('status, message_id', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, mobile, status, message_id, sent_on', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'mobile' => 'Mobile',
			'status' => 'Status',
			'message_id' => 'Message',
			'sent_on' => 'Sent On',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('message_id',$this->message_id,true);
		$criteria->compare('sent_on',$this->sent_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SMSGateway the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
		
	public function generateOTP()
	{
		$otp= rand(100000, 999999);
		return $otp;
	}
	
	public function sendSMS($mobile_no,$message)
	{
		$url='http://api.smscountry.com/SMSCwebservice_bulk.aspx?User='.$this->username.'&passwd='.$this->password.'&mobilenumber='.$mobile_no.'&message='.$message.'&sid='.$this->sender_id.'&mtype=N&DR=Y';

        $request = curl_init();
        $postData = 'User='.$this->username.'&passwd='.$this->password.'&mobilenumber='.$mobile_no.'&message='.$message.'&sid='.$this->sender_id.'&mtype=N&DR=Y';
        curl_setopt($request, CURLOPT_POST, 7);
        curl_setopt($request, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        {
            curl_setopt($request, CURLOPT_URL, 'http://api.smscountry.com/SMSCwebservice_bulk.aspx');
        }
        $response = curl_exec($request);
		$response=explode(':',$response);
		$this->user_id=yii::app()->user->id;
		$this->mobile=$mobile_no;
		$this->status=$response[0];
		$this->message_id=$response[1];
		return $this->save();
	}

}
