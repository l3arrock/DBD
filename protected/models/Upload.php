<?php

class Upload extends CFormModel {

    public $image;

    public function rules() {
        return array(
            array('image', 'file', 'types' => 'jpg, gif, png'),
        );
    }

    public function attributeLabels() {
        return array(
            'image' => 'รูปภาพ'
        );
    }

}

?>
