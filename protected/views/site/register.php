<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Регистрация';
$this->breadcrumbs=array(
	'Register',
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

<fieldset class="insideItem">
    <legend>Информация о пользователе</legend>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'register-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

    <?php echo CHtml::errorSummary($model);?>

	<p class="note">Поля, помеченные символом <span class="required">*</span> являются обязательноными.</p>
    <table width="100%">
        <?php
        printSpecialTr($form, $model, 'Login', 'textField', 1);
        printSpecialTr($form, $model, 'Password', 'passwordField', 1);
        printSpecialTr($form, $model, 'Password2', 'passwordField', 1);
        printSpecialTr($form, $model, 'Email', 'emailField', 1);
        printSpecialTr($form, $model, 'OrganizationName', 'textField', 1);
        printSpecialTr($form, $model, 'DirectorFIO', 'textField', 1);
        printSpecialTr($form, $model, 'Area', 'textField', 1);
        printSpecialTr($form, $model, 'PostIndex', 'textField', 1);
        printSpecialTr($form, $model, 'Address', 'textField', 1);
        printSpecialTr($form, $model, 'WebSite', 'textField', 1);
        printSpecialTr($form, $model, 'BIN', 'textField', 1);
        printSpecialTr($form, $model, 'Phone1', 'textField', 1);
        printSpecialTr($form, $model, 'Phone2', 'textField', 1);
        printSpecialTr($form, $model, 'Fax', 'textField', 1);
        printSpecialTr($form, $model, 'KadastrNumber', 'textField', 1);
        printSpecialTr($form, $model, 'BankContactPerson', 'textField', 1);
        printSpecialTr($form, $model, 'BankBIK', 'textField', 1);
        printSpecialTr($form, $model, 'BankIIK', 'textField', 1);
        printSpecialTr($form, $model, 'BankRNN', 'textField', 1);
        printSpecialTr($form, $model, 'BankName', 'textField', 1);

        ?>
    </table>
</div><!-- form -->
</fieldset>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Зарегистрироваться'); ?>
    </div>

<?php $this->endWidget(); ?>

