<div>
    <?php
    if (Yii::app()->user->isAdmin()) {
        $list = array(
            array('text' => 'ยืนยันสมาชิกนิติบุคคล', 'link' => '/member/manage/admin'),
            array('text' => 'จัดการข้อมูลทัวไป', 'link' => '/dataCenter/default/'),
        );
        ?>
        <ul class="btnMangae">
            <? echo Tool::GenList($list); ?>
        </ul>
        <?php
    } else {
        
    }
    ?>
</div>
