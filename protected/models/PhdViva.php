<?php

/**
 * This is the model class for table "ceh_phd_viva".
 *
 * The followings are the available columns in table 'ceh_phd_viva':
 * @property integer $id
 * @property string $date_of_exam
 * @property string $student_name
 * @property string $roll_no
 * @property string $st_designation
 * @property string $st_place_of_work
 * @property string $address
 * @property string $mobile
 * @property string $area_of_work
 * @property string $supervisor_name
 * @property string $su_designation
 * @property string $su_place_of_work
 * @property string $examiner_name
 * @property string $ex_designation
 * @property string $ex_place_of_work
 * @property string $file_name
 */
class PhdViva extends CActiveRecord
{
	public $day,$month,$year;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ceh_phd_viva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date_of_exam, student_name, roll_no, st_designation, st_place_of_work, address, mobile, area_of_work, supervisor_name, su_designation, su_place_of_work, examiner_name, ex_designation, ex_place_of_work, file_name, day, month, year', 'required'),
			array('student_name, st_designation, area_of_work, supervisor_name, su_designation, examiner_name', 'length', 'max'=>100),
			array('roll_no', 'length', 'max'=>12),
			array('st_place_of_work, su_place_of_work, ex_designation, ex_place_of_work', 'length', 'max'=>400),
			array('mobile', 'length', 'max'=>13),
			array('file_name', 'length', 'max'=>200),
			array('file_name', 'file', 'types'=>'pdf, ppt, zip, doc','maxSize'=>104857600, 'tooLarge'=>'File has to be smaller than 10MB','allowEmpty'=>true, 'on'=>'create'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date_of_exam, student_name, roll_no, st_designation, st_place_of_work, address, mobile, area_of_work, supervisor_name, su_designation, su_place_of_work, examiner_name, ex_designation, ex_place_of_work, file_name, day, month, year', 'safe', 'on'=>'search'),
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
			'date_of_exam' => 'Date Of Exam',
			'student_name' => 'Name of the Ph.D Student',
			'roll_no' => 'Roll No',
			'st_designation' => 'Student Designation',
			'st_place_of_work' => 'Student Place Of Work',
			'address' => 'Permanent Address',
			'mobile' => 'Mobile Number',
			'area_of_work' => 'Proposed Area Of Work',
			'supervisor_name' => 'Name of the Supervisor',
			'su_designation' => 'Supervisor Designation',
			'su_place_of_work' => 'Superivsor Place Of Work',
			'examiner_name' => 'Name of the Viva Examiner',
			'ex_designation' => 'Examiner Designation',
			'ex_place_of_work' => 'Examiner Place Of Work',
			'file_name' => 'Ph.D Thesis File Upload',
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
		$criteria->compare('date_of_exam',$this->date_of_exam,true);
		$criteria->compare('student_name',$this->student_name,true);
		$criteria->compare('roll_no',$this->roll_no,true);
		$criteria->compare('st_designation',$this->st_designation,true);
		$criteria->compare('st_place_of_work',$this->st_place_of_work,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('area_of_work',$this->area_of_work,true);
		$criteria->compare('supervisor_name',$this->supervisor_name,true);
		$criteria->compare('su_designation',$this->su_designation,true);
		$criteria->compare('su_place_of_work',$this->su_place_of_work,true);
		$criteria->compare('examiner_name',$this->examiner_name,true);
		$criteria->compare('ex_designation',$this->ex_designation,true);
		$criteria->compare('ex_place_of_work',$this->ex_place_of_work,true);
		$criteria->compare('file_name',$this->file_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PhdViva the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
