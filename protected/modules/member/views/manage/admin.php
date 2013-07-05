<div style="padding: 0px 5px;">
    <h3>จัดการสมาชิก</h3>
    <hr>
    <div><!-- grid view -->
        <h3>สมาชิกนิติบุคคลทั้งหมดที่ยังไม่ได้รับการยืนยัน</h3>
        <?php
        echo $this->renderPartial('_admin_grid_view', array(
            'dataProvider' => $model->getRegistration(),
            'model' => $model,
        )); 
        ?>
        <h3>สมาชิกนิติบุคคลทั้งหมด</h3>
        <?php
        echo $this->renderPartial('_admin_grid_view', array(
            'dataProvider' => $model->getDataRegistration(),
            'model' => $model,
        )); 
        ?>
        <h3>สมาชิกบุคคลธรรมดาทั้งหมด</h3>
        <?php
        echo $this->renderPartial('_admin_grid_view', array(
            'dataProvider' => $model->getDataPerson(),
            'model' => $model,
        ));
        ?>
    </div>
    <div style="text-align: center;">
        <?php
        echo CHtml::button('ย้อนกลับ', array('onClick' => "window.location='" . CHtml::normalizeUrl(array(
                '/member/manage/profile'
            )) . "'")
        );
        ?>
    </div>
</div>