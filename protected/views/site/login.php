<style type="text/css">
    html, body{
        height: 350px !important;
    }
    #header{
        display: none !important;
    }
    #footer{
        display: none !important;
    }
    div.page{
        margin: 0;
        width: 550px;
        height: 200px !important;
        min-height: 200px !important;
        max-height: 200px !important;
    }
</style>
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);

//$member = MemUser::model()->findAll();
//foreach ($member as $m) {
//
//    // print all user and password
//    echo "<br /> USER : " . Tool::Decrypted($m['username']) . " PASS : " . Tool::Decrypted($m['password']);
//}
?>

<h1>Login</h1>
<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-form',
        'enableClientValidation' => true,
        'focus' => array($model, 'username'),
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>
    <div class="row _100">

        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username'); ?>
        <?php echo $form->error($model, 'username'); ?>

    </div>

    <div class="row _100">

        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password'); ?>
        <?php echo $form->error($model, 'password'); ?>

    </div>

    <div class="row rememberMe _100">
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->label($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </div>

    <div class="row buttons _100">
        <?php echo CHtml::submitButton('Login', array('id' => 'submit')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->
