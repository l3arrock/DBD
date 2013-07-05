<?php

/**
 * This is the model class for table "mem_company".
 *
 * The followings are the available columns in table 'mem_company':
 * @property integer $id
 * @property integer $mem_id
 * @property integer $com_id
 * @property string $date_write
 *
 * The followings are the available model relations:
 * @property Company $com
 * @property MemRegistration $mem
 */
class MemCompany extends MemCompany
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MemCompany the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'mem_company';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('mem_id, com_id, date_write', 'required'),
			array('mem_id, com_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, mem_id, com_id, date_write', 'safe', 'on'=>'search'),
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
			'com' => array(self::BELONGS_TO, 'Company', 'com_id'),
			'mem' => array(self::BELONGS_TO, 'MemRegistration', 'mem_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'mem_id' => 'Mem',
			'com_id' => 'Com',
			'date_write' => 'Date Write',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('mem_id',$this->mem_id);
		$criteria->compare('com_id',$this->com_id);
		$criteria->compare('date_write',$this->date_write,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}