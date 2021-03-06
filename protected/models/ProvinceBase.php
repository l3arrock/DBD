<?php

/**
 * This is the model class for table "province".
 *
 * The followings are the available columns in table 'province':
 * @property integer $id
 * @property string $name
 * @property integer $zone_id
 *
 * The followings are the available model relations:
 * @property District[] $districts
 * @property MemPerson[] $memPeople
 * @property MemRegistration[] $memRegistrations
 * @property Prefecture[] $prefectures
 * @property Zone $zone
 */
class ProvinceBase extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProvinceBase the static model class
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
		return 'province';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, zone_id', 'required'),
			array('zone_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, zone_id', 'safe', 'on'=>'search'),
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
			'districts' => array(self::HAS_MANY, 'District', 'province_id'),
			'memPeople' => array(self::HAS_MANY, 'MemPerson', 'province'),
			'memRegistrations' => array(self::HAS_MANY, 'MemRegistration', 'province'),
			'prefectures' => array(self::HAS_MANY, 'Prefecture', 'province_id'),
			'zone' => array(self::BELONGS_TO, 'Zone', 'zone_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'zone_id' => 'Zone',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('zone_id',$this->zone_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}