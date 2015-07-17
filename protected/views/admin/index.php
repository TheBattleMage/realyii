<?php
/* @var $user UserAR  */
?>

<div style="display:inline-block;">Список зарегистрированных в системе пользователей</div>

<div style="width: 100%;">
    <?php
    $this->pageTitle=Yii::app()->name;

    $sort = new CSort();
    $sort->attributes = array(
        'ID'=>array(
            'asc'=>'ID',
            'desc'=>'ID desc',
        ),
        'Login'=>array(
            'asc'=>'Login',
            'desc'=>'Login desc',
        ),
        'OrganizationName'=>array(
            'asc'=>'OrganizationName',
            'desc'=>'OrganizationName desc',
        ),
        'RegistrationDate'=>array(
            'asc'=>'RegistrationDate',
            'desc'=>'RegistrationDate desc',
        ),
    );

    $dataProvider=new CActiveDataProvider('UserAR', array(
        'criteria'=>array(
            //'condition'=>'OwnerUserID='.Yii::app()->user->ID,
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
                'name' => 'Login',
                'type' => 'raw',
                'value' => '$data->Login',
            ),
            array(
                'name' => 'OrganizationName',
                'type' => 'raw',
                'value' => '$data->OrganizationName',
            ),
            array(
                'name' => 'RegistrationDate',
                'type' => 'raw',
                'value' => '$data->RegistrationDate',
            ),
            array(
                'class'=>'CButtonColumn',
                'header'=>'Действия',
                'viewButtonUrl'=>'Yii::app()->createUrl("/admin/view", array("ID" => $data["ID"]))',
                'deleteButtonUrl'=>'Yii::app()->createUrl("/admin/delete", array("ID" =>  $data["ID"]))',
                'updateButtonUrl'=>'Yii::app()->createUrl("/admin/update", array("ID" =>  $data["ID"]))',
            ),
        ),

    ));
    ?>
</div>
