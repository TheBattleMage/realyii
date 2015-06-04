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

    <div class="row">
        <?php echo $form->labelEx($model,'Login'); ?>
        <?php echo $form->textField($model,'Login'); ?>
        <?php echo $form->error($model,'Login'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Password'); ?>
        <?php echo $form->passwordField($model,'Password'); ?>
        <?php echo $form->error($model,'Password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Password2'); ?>
        <?php echo $form->passwordField($model,'Password2'); ?>
        <?php echo $form->error($model,'Password2'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Email'); ?>
        <?php echo $form->textField($model,'Email'); ?>
        <?php echo $form->error($model,'Email'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'OrganizationName'); ?>
		<?php echo $form->textField($model,'OrganizationName'); ?>
		<?php echo $form->error($model,'OrganizationName'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'DirectorFIO'); ?>
        <?php echo $form->textField($model,'DirectorFIO'); ?>
        <?php echo $form->error($model,'DirectorFIO'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Area'); ?>
        <?php echo $form->textField($model,'Area'); ?>
        <?php echo $form->error($model,'Area'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'PostIndex'); ?>
        <?php echo $form->textField($model,'PostIndex'); ?>
        <?php echo $form->error($model,'PostIndex'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Address'); ?>
        <?php echo $form->textField($model,'Address'); ?>
        <?php echo $form->error($model,'Address'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'WebSite'); ?>
        <?php echo $form->textField($model,'WebSite'); ?>
        <?php echo $form->error($model,'WebSite'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'BIN'); ?>
        <?php echo $form->textField($model,'BIN'); ?>
        <?php echo $form->error($model,'BIN'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Phone1'); ?>
        <?php echo $form->textField($model,'Phone1'); ?>
        <?php echo $form->error($model,'Phone1'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Phone2'); ?>
        <?php echo $form->textField($model,'Phone2'); ?>
        <?php echo $form->error($model,'Phone2'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Fax'); ?>
        <?php echo $form->textField($model,'Fax'); ?>
        <?php echo $form->error($model,'Fax'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'KadastrNumber'); ?>
        <?php echo $form->textField($model,'KadastrNumber'); ?>
        <?php echo $form->error($model,'KadastrNumber'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'BankContactPerson'); ?>
        <?php echo $form->textField($model,'BankContactPerson'); ?>
        <?php echo $form->error($model,'BankContactPerson'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'BankBIK'); ?>
        <?php echo $form->textField($model,'BankBIK'); ?>
        <?php echo $form->error($model,'BankBIK'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'BankIIK'); ?>
        <?php echo $form->textField($model,'BankIIK'); ?>
        <?php echo $form->error($model,'BankIIK'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'BankRNN'); ?>
        <?php echo $form->textField($model,'BankRNN'); ?>
        <?php echo $form->error($model,'BankRNN'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'BankName'); ?>
        <?php echo $form->textField($model,'BankName'); ?>
        <?php echo $form->error($model,'BankName'); ?>
    </div>

	<div class="row buttons">
        <input type="text" name="UserAR[IsAdmin]" id="UserAR_IsAdmin" value="1"/>
		<?php echo CHtml::submitButton('Зарегистрироваться'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
