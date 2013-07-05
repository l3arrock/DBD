<div class="sidebar">
    <div class="menuitem">
        <ul>
            <li class="boxhead"><img src="/img/iconpage/knowledge.png"/></li>
        </ul>
        <ul class="tabs clearfix">
            <?php
            $list = array(
                array('text' => 'Knowledge', 'link' => '#'),
                array('text' => 'Learning', 'link' => '#'),
            );
            foreach ($list as $ls) {
                echo "<li>" . CHtml::link($ls['text'], $ls['link'], array('rel' => 'view' . ++$n)) . "</li>";
            }
            
            ?>
            <li><?php if(Yii::app()->user->isAdmin()){echo CHtml::link('Manage', array('/knowledge/manage/knowledge'));} ?></li>
        </ul>
    </div>
</div>
<div class="content">
    <div class="tabcontents">
        <div id="view1" class="tabcontent">
            <h3 style="padding: 0px 5px;"><i class="icon-bookmark"></i> บทความแนะนำ</h3>
            <div class="clearfix">
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider' => $model->getData('1'),
                    'itemView' => '_list', // refers to the partial view named '_post'
                    'summaryText' => '',
                    'sortableAttributes' => array(
//                    'id', 
                    ),
                ));
                ?>
            </div>
            <hr>
            <h3 style="padding: 0px 5px;">บทความล่าสุด</h3>
            <div class="clearfix">
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider' => $model->getData(),
                    'itemView' => '_list', // refers to the partial view named '_post'
                    'summaryText' => '',
                    'sortableAttributes' => array(
//                    'id', 
                    ),
                ));
                ?>
            </div>
            <?php echo CHtml::link('>>อ่านบทความทั้งหมด<<', array('/knowledge/default/knowledge'), array('style' => 'padding: 0px 5px;')); ?>
        </div>
    </div>
</div>