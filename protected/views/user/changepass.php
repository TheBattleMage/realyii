<?php
/* @var $this SiteController */
/* @var $model ChangepassForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Смена пароля';
$this->breadcrumbs=array(
    'Changepass',
);
?>

<p>Для смены пароля вам необходимо заполнить следующую форму:</p>

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'changepass-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>

    <?php
    if ($model->message != NULL)
    {
        echo('<div class="formMessage">');
        echo($model->message);
        echo('</div>');
    }
    ?>


    <fieldset class="insideItem">
        <legend>Общее описание</legend>
        <div class="form">

            <p class="note">Поля, помеченные символом <span class="required">*</span> являются обязательноными.</p>


            <table width="100%">
            <?php
                printSpecialTr($form, $model, 'oldpassword','passwordField',true);
                printSpecialTr($form, $model, 'password','passwordField',true);
                printSpecialTr($form, $model, 'password2','passwordField',true);
            ?>
            </table>
        </div>

    </fieldset>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Сменить пароль'); ?>
    </div>



    <?php $this->endWidget(); ?>
