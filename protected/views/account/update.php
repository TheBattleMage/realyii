<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

echo('<br><a href="#" onclick="history.back(-1)" class="backBtn">Назад</a>');

$this->pageTitle=Yii::app()->name . ' - Просмотр проекта';
$this->breadcrumbs=array(
	'Project View',
);
?>

<h1>Просмотр проекта</h1>


<?php
if (isset($error))
{
    echo($error);
    return;
}

if (isset($model->message))
{
    echo($model->message);
    return;
}
?>

<p>Список прикрепленных документов:</p>
<div style="width: 100%;">
    <?php
    $this->pageTitle=Yii::app()->name;

    $sort = new CSort();
    $sort->attributes = array(
        'ID'=>array(
            'asc'=>'ID',
            'desc'=>'ID desc',
        ),
        'DocType'=>array(
            'asc'=>'DocType',
            'desc'=>'DocType desc',
        ),
        'DocCategory'=>array(
            'asc'=>'DocCategory',
            'desc'=>'DocCategory desc',
        ),
        'OriginalFileName'=>array(
            'asc'=>'OriginalFileName',
            'desc'=>'OriginalFileName desc',
        ),
        'Date'=>array(
            'asc'=>'Date',
            'desc'=>'Date desc',
        ),
    );

    $dataProvider=new CActiveDataProvider('ProjDocAR', array(
        'criteria'=>array(
            'condition'=>'ProjectID='.$model->ID,
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
                'name' => 'DocType',
                'type' => 'raw',
                'value' => '$data->DocType',
            ),
            array(
                'name' => 'DocCategory',
                'type' => 'raw',
                'value' => '$data->DocCategory',
            ),
            array(
                'name' => 'OriginalFileName',
                'type' => 'raw',
                'value' => '$data->OriginalFileName',
            ),
            array(
                'name' => 'Date',
                'type' => 'raw',
                'value' => '$data->Date',
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

<p>Список сокращений:</p>
<div style="width: 100%;">
    <?php
    $this->pageTitle=Yii::app()->name;

    $sort = new CSort();
    $sort->attributes = array(
        /*'ID'=>array(
            'asc'=>'ID',
            'desc'=>'ID desc',
        ),*/
    );

    $dataProvider=new CActiveDataProvider('ProjReductionAR', array(
        'criteria'=>array(
            'condition'=>'ProjectID='.$model->ID,
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
                'name' => 'Name',
                'type' => 'raw',
                'value' => '$data->Name',
            ),
            array(
                'name' => 'ProtocolNumber',
                'type' => 'raw',
                'value' => '$data->ProtocolNumber',
            ),
            array(
                'name' => 'Year',
                'type' => 'raw',
                'value' => '$data->Year',
            ),
            array(
                'name' => 'CO2Eq',
                'type' => 'raw',
                'value' => '$data->CO2Eq',
            ),
            array(
                'name' => 'ReductionAmount',
                'type' => 'raw',
                'value' => '$data->ReductionAmount',
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
