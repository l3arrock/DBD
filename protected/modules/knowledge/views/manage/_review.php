<div style="padding: 0px 100px;">
    <div style="text-align: center;">
        <img src="/file/knowledge/<?php echo $model->image; ?>" style="height: 300px;" />
    </div>
    <div class="textpad">
        <h3>
            <?php
            echo $model->subject;
            ?>
        </h3>
        <p><?php echo $model->detail; ?></p>
        <div style="text-align: center;">
            <?php
            echo CHtml::button('เสร็จสิ้น', array(
                'onclick' => "window.location='" . CHtml::normalizeUrl(array(
                    '/knowledge/manage/addAlert/con/2',
                )) . "'",
                'confirm' => 'คุณต้องการบันทึกบทความหรือไม่?')
            );

            echo CHtml::button('แก้ไข', array('onClick' => "window.location='" . CHtml::normalizeUrl(array(
                    '/knowledge/manage/insert/id/' . $model->id . '/new/1'
                )) . "'")
            );
//            echo CHtml::button('เสร็จสิ้น', array('onClick' => "window.location='" . CHtml::normalizeUrl(array(
//                    '/knowledge/manage/knowledge',
//                )) . "'")
//            );

            echo CHtml::button('เพิ่มบทความใหม่', array('onClick' => "window.location='" . CHtml::normalizeUrl(array(
                    '/knowledge/manage/addAlert/con/1',
                )) . "'")
            );
            ?>
        </div>
    </div>
</div>
