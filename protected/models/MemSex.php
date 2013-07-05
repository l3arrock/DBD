<?php

/**
 * This is the model class for table "mem_sex".
 *
 * The followings are the available columns in table 'mem_sex':
 * @property integer $id
 * @property string $name
 *
 * The followings are the available model relations:
 * @property MemPerson[] $memPeople
 * @property MemRegistration[] $memRegistrations
 */
class MemSex extends MemSexBase {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return MemSex the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'memPeople' => array(self::HAS_MANY, 'MemPerson', 'sex'),
            'memRegistrations' => array(self::HAS_MANY, 'MemRegistration', 'sex'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getSex() {
        $list = CHtml::listData(MemSex::model()->findAll(), 'id', 'name');
        return $list;
    }

}