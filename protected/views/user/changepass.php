<?php
/* @var $this SiteController */
/* @var $model ChangepassForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Смена пароля';
$this->breadcrumbs=array(
    'Changepass',
);
?>

<h1>Смена пароля</h1>

<p>Для смены пароля вам необходимо заполнить следующую форму:</p>

<div class="form">
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

    <div class="row">
        <?php echo $form->label($model,'oldpassword'); ?>
        <?php echo $form->passwordField($model,'oldpassword'); ?>
        <?php echo $form->error($model,'oldpassword'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'password'); ?>
        <?php echo $form->passwordField($model,'password'); ?>
        <?php echo $form->error($model,'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'password2'); ?>
        <?php echo $form->passwordField($model,'password2'); ?>
        <?php echo $form->error($model,'password2'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Сменить пароль'); ?>
    </div>



    <?php $this->endWidget(); ?>
</div><!-- form -->
