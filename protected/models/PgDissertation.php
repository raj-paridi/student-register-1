<?php

/**
 * This is the model class for table "ceh_pg_dissertation".
 *
 * The followings are the available columns in table 'ceh_pg_dissertation':
 * @property integer $id
 * @property string $name
 * @property string $roll_no
 * @property string $course
 * @property string $area_of_work
 * @property string $institute_name
 * @property string $guide_name
 * @property string $date_of_reg
 * @property string $file_name
 */
class PgDissertation extends CActiveRecord
{
	public $day,$month,$year;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ceh_pg_dissertation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, roll_no, course, area_of_work, institute_name, guide_name, date_of_reg, file_name,day, month, year', 'required'),
			array('name, guide_name', 'length', 'max'=>100),
			array('roll_no', 'length', 'max'=>11),
			array('course', 'length', 'max'=>6),
			array('area_of_work, institute_name', 'length', 'max'=>250),
			array('file_name', 'length', 'max'=>150),
			array('file_name', 'file', 'types'=>'pdf, ppt, zip, doc','maxSize'=>104857600, 'tooLarge'=>'File has to be smaller than 10MB','allowEmpty'=>true, 'on'=>'create'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, roll_no, course, area_of_work, institute_name, guide_name, date_of_reg, file_name, day, month, year', 'safe', 'on'=>'search'),
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
			'name' => 'Name of the Student',
			'roll_no' => 'Roll No',
			'course' => 'Course',
			'area_of_work' => 'Proposed area of work',
			'institute_name' => 'Institution where the work is to taken up',
			'guide_name' => 'Name of the guide(If guide is external give names of Internal guide)',
			'date_of_reg' => 'Date of Registration',
			'file_name' => 'Abstract File',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('roll_no',$this->roll_no,true);
		$criteria->compare('course',$this->course,true);
		$criteria->compare('area_of_work',$this->area_of_work,true);
		$criteria->compare('institute_name',$this->institute_name,true);
		$criteria->compare('guide_name',$this->guide_name,true);
		$criteria->compare('date_of_reg',$this->date_of_reg,true);
		$criteria->compare('file_name',$this->file_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PgDissertation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
