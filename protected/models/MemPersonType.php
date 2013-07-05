<?php

class MemPersonType extends MemPersonTypeBase {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function rules() {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 100),
            array('id, name', 'safe', 'on' => 'search'),
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

    public function getMemberType() {
        $list = CHtml::listData(MemPersonType::model()->findAll(), 'id', 'name');
        return $list;
    }

}