<?php

$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'company_business_type-grid',
    'dataProvider' => $model->getData(),
    'filter' => $model,
    'ajaxUpdate' => true,
    'summaryText' => '',
    'columns' => array(
        array(// display 'create_time' using an expression
            'header' => 'ลำดับ',
            'headerHtmlOptions' => array('style' => 'width: 7%;'),
            'htmlOptions' => array('style' => 'text-align: center;'),
            'value' => '$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)."."',
        ),
        array(
            'name' => 'name',
            'value' => '$data->name',
        ),

        array(
            'class' => 'CButtonColumn',
            'deleteConfirmation' => 'คุณต้องการลบบทความหรือไม่?',
            'template' => '{update}{delete}{view}',
            'buttons' => array(
                'update' => array(
                    'label' => 'edit', //Text label of the button.
                    'url' => 'Yii::app()->createUrl("/dataCenter/default/insertCompanyTypeBusiness/",array("id"=>$data->id))',
                ),
                'delete' => array(
                    'label' => 'del', //Text label of the button.
                    'url' => 'Yii::app()->createUrl("/dataCenter/default/delCompanyTypeBusiness",array("id"=>$data->id))',
                ),
            ),
            'afterDelete' => 'function(link,success,data){
                                    if(data != ""){
                                        alert(data);
                                    }
                    }'
        ),
    ),
    'pager' => array(
        'class' => 'CLinkPager',
        'header' => 'หน้าที่: ',
        'firstPageLabel' => 'หน้าแรก',
        'prevPageLabel' => 'ก่อนหน้า',
        'nextPageLabel' => 'หน้าถัดไป',
        'lastPageLabel' => 'หน้าสุดท้าย',
    )
));
?>
