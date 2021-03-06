<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Регистрация проекта';
$this->breadcrumbs=array(
	'Project Register',
);
?>

<h1>Регистрация</h1>

<p>Пожалуйста, заполните следующую форму для прохождения процедуры регистрации в системе:</p>


<?php
if (isset($model->message))
{
    echo($model->message);
    return;
}

?>
<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'register-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

<?php echo CHtml::errorSummary($model);?>

<fieldset class="insideItem">
    <legend>Общее описание</legend>
    <div class="form">

    <p class="note">Поля, помеченные символом <span class="required">*</span> являются обязательноными.</p>


    <table width="100%">
        <?php
        printSpecialTr($form, $model, 'ProjName','textField',true);
        printSpecialTr($form, $model, 'ProjDesc','textField',true);
        printSpecialTr($form, $model, 'ProjType','textField',true);
        printSpecialTr($form, $model, 'ProjMinistryNumber','textField',true);
        printSpecialTr($form, $model, 'ProjTechDesc','textArea',true);
        printSpecialTr($form, $model, 'ProjTechnologies','textArea',true);
        printSpecialTr($form, $model, 'ProjHow','textArea',true);
        printSpecialTr($form, $model, 'ProjReductionAmount','textField',true);
        printSpecialTr($form, $model, 'ProjApproved','checkBox',true);
        ?>

    </table>
    </div>
</fieldset>

<fieldset class="insideItem">
    <legend>Место расположения проекта</legend>
    <div class="form">

        <table width="100%" border="0">
            <?php
            printSpecialTr($form, $model, 'AddGPS','textField',true);
            printSpecialTr($form, $model, 'AddRegion','textField',true);
            printSpecialTr($form, $model, 'AddCity','textField',true);
            printSpecialTr($form, $model, 'AddComments','textField',true);
            ?>

        </table>
    </div>
</fieldset>

<fieldset class="insideItem">
    <legend>Базовый сценарий</legend>
    <div class="form">

        <table width="100%" border="0">
            <?php

            printSpecialTr($form, $model, 'ScenBegin','dateField',true);
            printSpecialTr($form, $model, 'ScenReportStart','dateField',true);
            printSpecialTr($form, $model, 'ScenDesc','textArea',true);
            printSpecialTr($form, $model, 'ScenReducdeHow','textArea',true);
            printSpecialTr($form, $model, 'ScenBorders','textArea',true);
            printSpecialTr($form, $model, 'ScenComments','textArea',true);
            ?>

        </table>
    </div>
</fieldset>

<fieldset class="insideItem">
    <legend>Продолжительность проекта и периода выпуска углеродных единиц</legend>
    <div class="form">

        <table width="100%" border="0">
            <?php
            printSpecialTr($form, $model, 'TimeBegin','dateField',true);
            printSpecialTr($form, $model, 'TimeDuration','textField',true);
            printSpecialTr($form, $model, 'TimeQuotaDuration','textField',true);
            ?>

        </table>
    </div>
</fieldset>

<fieldset class="insideItem">
    <legend>Оценка сокращения выбросов парниковых газов</legend>
    <div class="form">

        <table width="100%" border="0">
            <?php
            printSpecialTr($form, $model, 'EstEmissions','textField',true);
            printSpecialTr($form, $model, 'EstLeaks','textField',true);
            printSpecialTr($form, $model, 'EstReduction','textField',true);
            printSpecialTr($form, $model, 'EstBaseEmissions','textField',true);
            printSpecialTr($form, $model, 'EstReductionWithLeaks','textField',true);
            ?>

        </table>
    </div>
</fieldset>


<fieldset class="insideItem">
    <legend>Завершение регистрации</legend>
    <div class="form">

        <table width="100%" border="0">
            <?php
            printTr("Продолжая, вы соглашаетесь с польовательским соглашением",
                CHtml::submitButton('Зарегистрироваться'));
            ?>

        </table>
    </div>
</fieldset>



<?php $this->endWidget(); ?>
