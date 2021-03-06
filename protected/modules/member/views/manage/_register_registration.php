<script type="text/javascript" >
    //Assign to those input elements that have // 'placeholder' attribute
    // $('input[placeholder]').each(function() {
    //     var input = $(this);
    //     $(input).val(input.attr(// 'placeholder'));

    //     $(input).focus(function() {
    //         if (input.val() == input.attr(// 'placeholder')) {
    //             input.val('');
    //         }
    //     });

    //     $(input).blur(function() {
    //         if (input.val() == '' || input.val() == input.attr(// 'placeholder')) {
    //             input.val(input.attr(// 'placeholder'));
    //         }
    //     });
    // });


</script>
<div class="sidebar">
    <div class="menuitem">
        <ul>
            <li class="boxhead"><img src="/img/iconpage/createaccount.png"/></li>
        </ul>
        <ul class="tabs clearfix">
            <?php
            $list = array(
                array('text' => 'บุคคลธรรมดา', 'link' => '/member/manage/registerPerson',),
                array('text' => 'นิติบุคคล', 'link' => '/member/manage/registerRegistration', 'select' => 'selected'),
            );
            echo Tool::GenList($list);
            ?>
        </ul>
    </div>
</div>
<div class="content">
    <div class="tabcontents">
        <div id="view2" class="tabcontent">
            <div class="row-fluid">
                <h3> <img src="/img/iconform.png"> แบบลงทะเบียนนิติบุคคล</h3>
                <?php
                echo "testttttttttttt";
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'insert_registration-form',
//                    'htmlOptions' => array('enctype' => 'multipart/form-data'),
                ));
                ?>
                <div class="_100">
                    <h4 class="reg">- ข้อมูลสมาชิก -</h4>
                </div>
                <!-- username -->
                <div class="_100">    
                    <?php
                    echo $form->labelEx($model_user, 'username');
                    echo $form->textField($model_user, 'username', array(
                        'class' => 'numberinput fieldrequire',
                            // // 'placeholder' => MemPerson::model()->getAttributeLabel('username'),
                    ));
                    echo $form->error($model_user, 'username');
                    ?>
                </div>
                <!-- new line -->
                <!-- password -->
                <div class="_50"> 
                    <?php
                    echo $form->labelEx($model_user, 'password');
                    echo $form->passwordField($model_user, 'password', array(
                        'class' => 'span6 fieldrequire',
                            // // 'placeholder' => MemPerson::model()->getAttributeLabel('password'),
                    ));
                    echo $form->error($model_user, 'password');
                    ?>
                </div>
                <div class="_50">
                    <?php
                    echo $form->labelEx($model_user, 'password_confirm');
                    echo $form->passwordField($model_user, 'password_confirm', array(
                        'class' => 'span6 fieldrequire',
                            // // 'placeholder' => MemPerson::model()->getAttributeLabel('confirm_password'),
                    ));
                    echo $form->error($model_user, 'password_confirm');
                    ?>
                </div>
                <!-- new line -->

                <div class="_100">
                    <h4 class="reg">- ข้อมูลส่วนตัว -</h4>
                </div>
                <!-- คำน้หน้าชื่อ -->
                <div class="_20">
                    <?php
                    echo $form->labelEx($model, 'tname');
                    echo $form->dropdownList($model, 'tname', TitleName::model()->getTitleName('th'), array(
//                            'name' => "Prefix",
                        'class' => "span2",
                    ));
                    echo $form->error($model, 'tname');
                    ?>
                </div>

                <!-- ชื่อไทย -->
                <div class="_40">
                    <?php
                    echo $form->labelEx($model, 'ftname');
                    echo $form->textField($model, 'ftname', array(
                        'class' => 'span5',
                            // // 'placeholder' => MemPerson::model()->getAttributeLabel('ftname'),
                    ));
                    echo $form->error($model, 'ftname');
                    ?>
                </div>

                <!-- นามสกุลไทย -->
                <div class="_40">
                    <?php
                    echo $form->labelEx($model, 'ltname');
                    echo $form->textField($model, 'ltname', array(
                        'class' => 'span5',
                            // // 'placeholder' => MemPerson::model()->getAttributeLabel('ltname'),
                    ));
                    echo $form->error($model, 'ltname');
                    ?>
                </div>
                <!-- new line -->


                <!-- คำนำหน้าภาษาอังกฤษ -->
                <div class="_20">
                    <?php
                    echo $form->labelEx($model, 'etname');
//                        echo "คำนำหน้าภาษาอังกฤษ";
                    echo $form->dropdownList($model, 'etname', TitleName::model()->getTitleName('en'), array(
//                            'name' => "Prefix",
                        'class' => "span2",
                    ));
                    echo $form->error($model, 'etname');
                    ?>
                </div>

                <!-- name en -->
                <div class="_40">
                    <?php
                    echo $form->labelEx($model, 'fename');
                    echo $form->textField($model, 'fename', array(
                        'class' => 'span5',
                            // 'placeholder' => MemPerson::model()->getAttributeLabel('fename'),
                    ));
                    echo $form->error($model, 'fename');
                    ?>
                </div>

                <!-- lastname en -->
                <div class="_40">
                    <?php
                    echo $form->labelEx($model, 'lename');
                    echo $form->textField($model, 'lename', array(
                        'class' => 'span5',
                            // 'placeholder' => MemPerson::model()->getAttributeLabel('lename'),
                    ));
                    echo $form->error($model, 'lename');
                    ?>
                </div>
                <!-- new line -->

                <!-- เพศ -->
                <div class="_20">
                    <p><?php echo $form->labelEx($model, 'sex'); ?></p>
                    <?php
                    echo $form->dropdownList($model, 'sex', MemSex::model()->getSex(), array(
                        'class' => "span2",
//                            'empty' => 'เลือก'
                    ));
                    echo $form->error($model, 'sex');
                    ?>
                </div>

                <!-- วันเกิด -->
                <div class="_40">
                    <?php
                    echo $form->labelEx($model, 'birth');
                    echo $form->textField($model, 'birth', array(
                        'class' => 'date',
                            // 'placeholder' => MemPerson::model()->getAttributeLabel('birth'),
                    ));
                    echo $form->error($model, 'birth');
                    ?>
                </div>

                <!-- email -->
                <div class="_40">
                    <?php
                    echo $form->labelEx($model, 'email');
                    echo $form->textField($model, 'email', array(
//                            'class' => 'span5',
                            // 'placeholder' => MemPerson::model()->getAttributeLabel('email'),
                    ));
                    echo $form->error($model, 'email');
                    ?>
                </div>





                <div class="_100">
                    <?php
                    echo $form->labelEx($model, 'address');
                    echo $form->textField($model, 'address');
                    echo $form->error($model, 'address');
                    ?>
                </div>
                <!-- new line -->

                <div class="_25">
                    <?php
                    echo $form->labelEx($model, 'province');
                    echo $form->dropdownList($model, 'province', Province::model()->getListProvince(), array(
                        'class' => "span2",
                        'empty' => 'เลือก',
                        'ajax' => array(
                            'type' => 'POST',
                            'url' => CController::createUrl('/site/provinceToPrefecture'),
                            'update' => '#MemRegistration_prefecture',
                            'data' => array('province' => 'js:this.value')
                        )
                    ));
                    echo $form->error($model, 'province');
                    ?>
                </div>
                <div class="_25">
                    <?php
                    echo $form->labelEx($model, 'prefecture');
                    echo $form->dropdownList($model, 'prefecture', array(), array(
                        'class' => "span2",
                        'empty' => 'เลือก',
                        'ajax' => array(
                            'type' => 'POST',
                            'url' => CController::createUrl('/site/PrefectureToDistrict'),
                            'update' => '#MemRegistration_district',
                            'data' => array('prefecture' => 'js:this.value')
                        )
                    ));
                    echo $form->error($model, 'prefecture');
                    ?>
                </div>


                <div class="_25">
                    <?php
                    echo $form->labelEx($model, 'district');
                    echo $form->dropdownList($model, 'district', array(), array(
                        'class' => "span2",
                        'empty' => 'เลือก',
                    ));
                    echo $form->error($model, 'district');
                    ?>
                </div>
                <div class="_25">
                    <?php
                    echo $form->labelEx($model, 'postcode');
                    echo $form->textField($model, 'postcode', array(
                        'class' => 'span5',
                            // 'placeholder' => MemPerson::model()->getAttributeLabel('postcode'),
                    ));
                    echo $form->error($model, 'postcode');
                    ?>
                </div>
                <div class="_33">
                    <?php
                    echo $form->labelEx($model, 'mobile');
                    echo $form->textField($model, 'mobile', array(
                        'class' => 'span5',
                            // 'placeholder' => MemPerson::model()->getAttributeLabel('mobile'),
                    ));
                    echo $form->error($model, 'mobile');
                    ?>
                </div>
                <div class="_33">
                    <?php
                    echo $form->labelEx($model, 'tel');
                    echo $form->textField($model, 'tel', array(
                        'class' => 'span5',
                            // 'placeholder' => MemPerson::model()->getAttributeLabel('tel'),
                    ));
                    echo $form->error($model, 'tel');
                    ?>
                </div>
                <div class="_33">
                    <?php
                    echo $form->labelEx($model, 'fax');
                    echo $form->textField($model, 'fax', array(
                        'class' => 'span5',
                            // 'placeholder' => MemPerson::model()->getAttributeLabel('fax'),
                    ));
                    echo $form->error($model, 'fax');
                    ?>
                </div>


                <div class="_33">
                    <?php
                    echo $form->labelEx($model, 'high_education');
                    echo $form->dropDownList($model, 'high_education', HighEducation::model()->getListData(), array(
                        'empty' => 'เลือก'
                    ));
                    echo $form->error($model, 'high_education');

                    // echo $form->labelEx($model, 'career');
                    // echo $form->dropDownList($model, 'career', Career::model()->getListData(), array(
                    //     'empty' => 'เลือก'
                    // ));
                    // echo $form->error($model, 'career');
                    ?>
                </div>

                <div class="_100">
                    <h4 class="reg">- ข้อมูลธุรกิจ -</h4>
                </div>
                <div class="_100"> <!-- clear ไม่ให้ขึ้นไปบรรทัดบน --> </div> 
                <div class="_50">
                    <?php
                    echo $form->labelEx($model, 'type_business');
                    echo $form->dropDownList($model, 'type_business', CompanyTypeBusiness::model()->getListData(), array(
                        'empty' => 'เลือก'
                    ));
                    echo $form->error($model, 'type_business');
                    ?>
                </div>
                <div class="_50">
                    <?php
                    echo $form->labelEx($model, 'business_name');
                    echo $form->textField($model, 'business_name');
                    echo $form->error($model, 'business_name');
                    ?>
                </div>
                <div class="_100"> <!-- clear ไม่ให้ขึ้นไปบรรทัดบน --> </div> 
                <div class="_50">
                    <?php
                    echo $form->labelEx($model, 'corporation_registration');
                    echo $form->textField($model, 'corporation_registration');
                    echo $form->error($model, 'corporation_registration');
                    ?>
                </div>
                <div class="_50">
                    <?php
                    echo $form->labelEx($model, 'commerce_registration');
                    echo $form->textField($model, 'commerce_registration');
                    echo $form->error($model, 'commerce_registration');
                    ?>
                </div>
                <div class="_100"> <!-- clear ไม่ให้ขึ้นไปบรรทัดบน --> </div> 
                <div class="_50">
                    <?php
                    echo $form->labelEx($model, 'trade_name');
                    echo $form->textField($model, 'trade_name');
                    echo $form->error($model, 'trade_name');
                    ?>
                </div>
                <div class="_50">
                    <?php
                    echo $form->labelEx($model, 'product_name');
                    echo $form->textField($model, 'product_name');
                    echo $form->error($model, 'product_name');
                    ?>
                </div>
                <?php if (CCaptcha::checkRequirements()) { ?>
                    <div class="_50">
                        <?php
                        echo $form->labelEx($model_user, 'verifyCode');
                        $this->widget('CCaptcha');
                        echo $form->textField($model_user, 'verifyCode');
                        echo $form->error($model_user, 'verifyCode');
                        echo "test";
                        ?>
                    </div>
                <?php } ?>
                <div class="_100 textcen">
                    <?php
                    echo CHtml::submitButton('สมัครสมาชิก');
                    ?>
                </div>

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>


