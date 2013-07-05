<?php
class KnowledgeThem extends KnowledgeThemBase
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function tableName()
	{
		return 'knowledge_them';
	}
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('main_id, appro_status', 'required'),
			array('main_id', 'numerical', 'integerOnly'=>true),
			array('appro_status', 'length', 'max'=>1),
			array('date_appro', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, main_id, appro_status, date_appro', 'safe', 'on'=>'search'),
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
			'main' => array(self::BELONGS_TO, 'Knowledge', 'main_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'main_id' => 'รหัสบทความ',
			'appro_status' => 'สถานะการอนุญาต',
			'date_appro' => 'วันที่อนุญาต',
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
		$criteria->compare('main_id',$this->main_id);
		$criteria->compare('appro_status',$this->appro_status,true);
		$criteria->compare('date_appro',$this->date_appro,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}