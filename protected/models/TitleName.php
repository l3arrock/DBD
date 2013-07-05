<?php

class TitleName extends TitleNameBase {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return TitleName the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function rules() {
        return array(
            array('name', 'required'),
            array('name', 'length', 'max' => 100),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, name', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'memPeople' => array(self::HAS_MANY, 'MemPerson', 'tname'),
            'memRegistrations' => array(self::HAS_MANY, 'MemRegistration', 'tname'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'name' => 'Name',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function getTitleName($language) {
        $list = CHtml::listData(TitleName::model()->findAll("language = '" . $language . "'"), 'id', 'name');
        return $list;
    }

}