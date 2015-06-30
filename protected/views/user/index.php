<?php
/* @var $user UserAR  */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'editInfo-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

    <fieldset class="insideItem">
        <legend>Мобильный телефон</legend>
        <br/>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td width="40%" class="label-right">Номер мобильного телефона:</td>
                <td align="center" width="25%"><strong>7072273747</strong><a href="/login/verifi_form.htm?type=0"
                                                                             style="padding-left: 10px;"><img
                            title="Изменить номер" src="/skins/default/images/icons/edit.png"/></a></td>
                <td></td>
            </tr>
            <tr style="display:none;" id="delete_warning_0">
                <td colspan="3"><br/>

                    <div align="center"><a style="font-size:13px;color:#666666;text-decoration:underline;"
                                           href="/login/verifi_form.htm?type=0">Перед удалением номера необходимо пройти
                            дополнительную авторизацию</a></div>
                </td>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td class="label-right">Введите код, высланный на телефон:</td>
                <td align="center"><input style="border: 1px solid #89a1b9;" size="10" id="phone_cell_code"
                                          name="phone_cell_code" type="text"/></td>
                <td><a style="text-decoration:underline;" class="field-label" onclick="resendContact(0);" href="#">Я не
                        получил код</a></td>
            </tr>
        </table>
        <br/>
    </fieldset>

<fieldset class="insideItem">
    <legend>Информация о пользователе</legend>
    <div style="display:inline-block;">В последний раз вы были здесь</div>
    <div style="display:inline-block;"><?php echo $model->LastVisitDate;?></div>

    <div class="row">
        <?php echo $form->labelEx($model,'Login'); ?>
        <?php echo $form->textField($model,'Login'); ?>
        <?php echo $form->error($model,'Login'); ?>
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
</fieldset>



<?php $this->endWidget(); ?>