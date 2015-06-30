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
        printTr($form->labelEx($model,'ProjName'),
            $form->textField($model,'ProjName').$form->error($model,'ProjName'));
        printTr($form->labelEx($model,'ProjDesc'),
            $form->textField($model,'ProjDesc').$form->error($model,'ProjDesc'));
        printTr($form->labelEx($model,'ProjType'),
            $form->textField($model,'ProjType').$form->error($model,'ProjType'));
        printTr($form->labelEx($model,'ProjMinistryNumber'),
            $form->textField($model,'ProjMinistryNumber').$form->error($model,'ProjMinistryNumber'));
        printTr($form->labelEx($model,'ProjTechDesc'),
            $form->textField($model,'ProjTechDesc').$form->error($model,'ProjTechDesc'));
        printTr($form->labelEx($model,'ProjTechnologies'),
            $form->textField($model,'ProjTechnologies').$form->error($model,'ProjTechnologies'));
        printTr($form->labelEx($model,'ProjHow'),
            $form->textField($model,'ProjHow').$form->error($model,'ProjHow'));
        printTr($form->labelEx($model,'ProjReductionAmount'),
            $form->textField($model,'ProjReductionAmount').$form->error($model,'ProjReductionAmount'));
        printTr($form->labelEx($model,'ProjApproved'),
            $form->textField($model,'ProjApproved').$form->error($model,'ProjApproved'));
        ?>

    </table>
    </div>
</fieldset>

<fieldset class="insideItem">
    <legend>Место расположения проекта</legend>
    <div class="form">

        <table width="100%" border="0">
            <?php
            printTrShort($form, $model, 'AddGPS');
            printTrShort($form, $model, 'AddRegion');
            printTrShort($form, $model, 'AddCity');
            printTrShort($form, $model, 'AddComments');
            ?>

        </table>
    </div>
</fieldset>

<fieldset class="insideItem">
    <legend>Базовый сценарий</legend>
    <div class="form">

        <table width="100%" border="0">
            <?php
            printTrShort($form, $model, 'ScenBegin');
            printTrShort($form, $model, 'ScenReportStart');
            printTrShort($form, $model, 'ScenDesc');
            printTrShort($form, $model, 'ScenReducdeHow');
            printTrShort($form, $model, 'ScenBorders');
            printTrShort($form, $model, 'ScenComments');
            ?>

        </table>
    </div>
</fieldset>

<fieldset class="insideItem">
    <legend>Продолжительность проекта и периода выпуска углеродных единиц</legend>
    <div class="form">

        <table width="100%" border="0">
            <?php
            printTrShort($form, $model, 'TimeBegin');
            printTrShort($form, $model, 'TimeDuration');
            printTrShort($form, $model, 'TimeQuotaDuration');
            ?>

        </table>
    </div>
</fieldset>

<fieldset class="insideItem">
    <legend>Оценка сокращения выбросов парниковых газов</legend>
    <div class="form">

        <table width="100%" border="0">
            <?php
            printTrShort($form, $model, 'EstEmissions');
            printTrShort($form, $model, 'EstLeaks');
            printTrShort($form, $model, 'EstReduction');
            printTrShort($form, $model, 'EstBaseEmissions');
            printTrShort($form, $model, 'EstReductionWithLeaks');
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
