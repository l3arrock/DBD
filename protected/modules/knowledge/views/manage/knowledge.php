<div style="padding: 5px;">
    <h3>บทความ</h3>
    <div style="text-align: center;">
        <?php
        echo CHtml::button('เพิ่มบทความ', array('onClick' => "window.location='" . CHtml::normalizeUrl(array(
                '/knowledge/manage/insert'
            )) . "'")
        );
        ?>
    </div>
    <hr>
    <h3>บทความแนะนำ</h3>
    <?php
    $this->renderPartial('_grid_guide_knowledge', array(
        'model' => $model,
    ));
    ?>
    <h3>บทความทั้งหมด</h3>
    <?php
    $this->renderPartial('_grid_all_knowledge', array(
        'model' => $model,
    ));
    ?>
    <div style="text-align: center;">
        <?php
        echo CHtml::button('ย้อนกลับ', array('onClick' => "window.location='" . CHtml::normalizeUrl(array(
                Yii::app()->user->getState('knowledge')
            )) . "'")
        );
        ?>
    </div>
</div>