<div style="padding: 0px 5px;">
    <h3>สมาชิก</h3>
    <hr>
    <div style="display: inline-block; width: 10%; background-color: #111; color: white; font-weight: bold; padding: 0.5% 1.25%; text-align: right;">ชื่อ - นามสกุล : </div>
    <div style="display: inline-block; background-color: #999999; width: 84.4%; color: white; font-weight: bold; padding: 0.5% 1.25%;"><?php echo $data['name']; ?></div>
    <?php if ($data['member_type'] != null) { ?>
        <div style="display: inline-block; width: 10%; background-color: #111; color: white; font-weight: bold; padding: 0.5% 1.25%; text-align: right;">ประเภท : </div>
        <div style="display: inline-block; background-color: #999999; width: 84.4%; color: white; font-weight: bold; padding: 0.5% 1.25%;"><?php echo $data['member_type']; ?></div>
    <?php } ?>
    <div style="display: inline-block; width: 10%; background-color: #111; color: white; font-weight: bold; padding: 0.5% 1.25%; text-align: right;">ที่อยู่ : </div>
    <div style="display: inline-block; background-color: #999999; width: 84.4%; color: white; font-weight: bold; padding: 0.5% 1.25%;"><?php echo $data['address']; ?></div>
</div>
<hr>
<div style="text-align: center;">
    <?php
    if (isset($confirm)) {
        echo CHtml::button('ยืนยันสมาชิก', array('onClick' => "window.location='" . CHtml::normalizeUrl(array(
                '/member/manage/allowMember'
            )) . "'")
        );
    }
    echo CHtml::button('ย้อนกลับ', array('onClick' => "window.location='" . CHtml::normalizeUrl(array(
            '/member/manage/admin'
        )) . "'")
    );
    ?>
</div>