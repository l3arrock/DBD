<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'group-form',
    'enableClientValidation' => false,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'enableAjaxValidation' => false,
        ));
echo $form->errorSummary($model);
?>


<div class="rowContact clearfix">
    <?php
    echo Yii::t('language', $form->labelEx($model, 'name'));
    echo $form->textField($model, 'name', array('size' => '90'));
    echo Yii::t('language', $form->error($model, 'name'));
    ?>
</div>
<?php
echo CHtml::ajaxSubmitButton(
        'บันทึก',
        CController::createUrl('/link/default/managegrouplink'),
        array('success' => 'js:function(data){//submit form}',
        )
);
?>
<?php $this->endWidget(); ?>