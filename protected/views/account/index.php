<?php
/* @var $user UserAR  */
?>

<div style="display:inline-block;">Список зарегистрированных вами проектов</div>

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
            'condition'=>'OwnerUserID='.Yii::app()->user->ID,
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
                'name' => 'ProjName',
                'header' => 'Имя проекта',
                'type' => 'raw', // вывод без экранирования символов
                'value' => '$data->ProjName',
            ),
            array(
                'name' => 'ProjType',
                'header' => 'Тип проекта',
                'type' => 'raw',
                'value' => '$data->ProjType',
            ),
            array(
                'name' => 'RegistrationDate',
                'header' => 'Дата регистрации',
                'type' => 'raw',
                'value' => '$data->RegistrationDate',
            ),
            array(
                'name' => 'Open',
                'header' => 'Открыть',
                'type' => 'raw',
                'value' => '$data->GetLink()',
            ),
            array(
                'name' => 'Open',
                'header' => 'Login',
                'type' => 'raw',
                'value' => '$data->owner->Login',
            ),
            array(
                'class'=>'CButtonColumn',
                'viewButtonUrl'=>'Yii::app()->createUrl("/account/view", array("ID" => $data["ID"]))',
                'deleteButtonUrl'=>'Yii::app()->createUrl("/account/delete", array("ID" =>  $data["ID"]))',
                'updateButtonUrl'=>'Yii::app()->createUrl("/account/update", array("ID" =>  $data["ID"]))',
            ),
        ),

    ));
    ?>
</div>
