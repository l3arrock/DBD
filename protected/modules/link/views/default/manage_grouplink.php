<h3 class="barH3">
    <span><?php echo Yii::t('language', 'จัดการเว็บไซต์ที่เกี่ยวข้อง'); ?></span>
</h3>
<?php
//echo CHtml::link('เพิ่มชื่อกลุ่มลิ้งค์', '/link/default/groupform');
echo CHtml::ajaxLink(
        'เพิ่มชื่อกลุ่มลิ้งค์', CHtml::normalizeUrl(array('/link/default/groupform')), array('update' => 'div#groupform')
);
?>
<div id="groupform"></div>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'link-grid',
    'dataProvider' => $dataProvider,
    'filter' => $model,
    'emptyText' => Yii::t('language', 'ไม่พบข้อมูล'),
    'pagerCssClass' => 'alignCenter',
    'ajaxUpdate' => true,
    'columns' => array(
        array(
            'header' => Yii::t('language', 'ลำดับที่'),
            'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)."."',
        ),
        'name',
        array(
            'class' => 'CButtonColumn',
            'header' => Yii::t('language', "แก้ไข"),
            'template' => '{update}',
            'buttons' => array(
                'update' => array(
                    'label' => Yii::t('language', 'แก้ไข'),
                    'click' => "function(){
                                    $.fn.yiiGridView.update('link-grid', {
                                        type:'POST',
                                        url:$(this).attr('href'),
                                        success:function(data) {
                                              $('#groupform').hide().html(data).fadeIn();
                                              $.fn.yiiGridView.update('link-grid');
                                        }
                                    })
                                    return false;
                              }
                     ",
                    'url' => 'CHtml::normalizeUrl(array("/link/default/groupForm","id"=> $data->id))',
                ),
            ),
        ),
        array(
            'class' => 'CButtonColumn',
            'header' => Yii::t('language', "ลบ"),
            'deleteConfirmation' => Yii::t('language', 'คุณต้องการลบข้อมูลของกลุ่มนี้ทั้งหมดหรือไม่?'),
            'template' => '{delete}',
            'buttons' => array(
                'delete' => array(
                    'label' => Yii::t('language', 'ลบ'),
                    'url' => 'CHtml::normalizeUrl(array("/link/default/deleteGroupLink","id"=> $data->id))',
                ),
            ), //end 'buttons' => array(
        ),
    ), //end 'columns' => array(
    'template' => "{pager}\n{items}\n{pager}",
    'pager' => array(
        'class' => 'CLinkPager',
        'header' => Yii::t('language', 'หน้าที่: '),
        'firstPageLabel' => Yii::t('language', 'หน้าแรก'),
        'prevPageLabel' => Yii::t('language', 'ก่อนหน้า'),
        'nextPageLabel' => Yii::t('language', 'หน้าถัดไป'),
        'lastPageLabel' => Yii::t('language', 'หน้าสุดท้าย'),
    )
));
?>
<?php
echo CHtml::link(Yii::t('language', 'กลับไปหน้าที่แล้ว'), array('/link/default/managelink'));
?>
