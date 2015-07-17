<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

echo('<br><a href="#" onclick="history.back(-1)" class="backBtn">Назад</a>');

$this->pageTitle=Yii::app()->name . ' - Просмотр пользователя';
$this->breadcrumbs=array(
	'Project View',
);
?>

<h1>Просмотр пользователя</h1>

<p>Основная информация о пользователе:</p>

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'view-form',
    'enableClientValidation'=>true,
    'clientOptions'=>array(
        'validateOnSubmit'=>true,
    ),
)); ?>

    <fieldset class="insideItem">
        <legend>Информация о пользователе</legend>
        <div class="form">
    <table width="100%">
        <?php
printSpecialTr($form, $model, 'Login', 'textField', 1);
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

<?php $this->endWidget(); ?>

<p>Список зарегистрированных пользователем проектов:</p>

<div style="width: 100%;">
    <?php
    $this->pageTitle=Yii::app()->name;

    $sort = new CSort();
    $sort->attributes = array(
        'ProjName'=>array(
            'asc'=>'ProjName',
            'desc'=>'ProjName desc',
        ),
        'ProjType'=>array(
            'asc'=>'ProjType',
            'desc'=>'ProjType desc',
        ),
        'RegistrationDate'=>array(
            'asc'=>'RegistrationDate',
            'desc'=>'RegistrationDate desc',
        ),
    );

    $dataProvider=new CActiveDataProvider('ProjectAR', array(
        'criteria'=>array(
            'condition'=>'OwnerUserID='.$model->ID,
        ),
        'pagination'=>array(
            'pageSize'=>20,
        ),
        'sort'=>$sort,
    ));

    $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider'=>$dataProvider,
        //'itemsCssClass'=>'table-striped',

        'columns' => array(
            array(
                'name' => 'ID',
                'type' => 'raw', // вывод без экранирования символов
                'value' => '$data->ID',
            ),
            array(
                'name' => 'ProjName',
                'type' => 'raw', // вывод без экранирования символов
                'value' => '$data->ProjName',
            ),
            array(
                'name' => 'ProjType',
                'type' => 'raw',
                'value' => '$data->ProjType',
            ),
            array(
                'name' => 'RegistrationDate',
                'type' => 'raw',
                'value' => '$data->RegistrationDate',
            ),
        ),

    ));
    ?>
</div>
