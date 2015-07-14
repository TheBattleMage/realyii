<?php
if (defined('inIndex'))
{
    die("Прямой доступ запрещен.");
}
?>

<?php

function TestOut()
{
    echo "Welcome to the library v 1.0<br>";
}

function genTr($description, $value)
{
    return "<tr align='left' valign='middle'><td width='40%'>$description</td><td>$value</td></tr>";
}

function printTr($description, $value)
{
    echo(genTr($description,$value));
}

function printTrShort($form, $model, $FieldName)
{
    printTr($form->labelEx($model,$FieldName),
        $form->textField($model,$FieldName).$form->error($model,$FieldName));
}

function printSpecialTr($form, $model, $FieldName, $Type, $NormalizeStyle)
{
    if ($NormalizeStyle)
        printTr($form->labelEx($model,$FieldName),
            $form->$Type(
                $model,
                $FieldName,
                array('style' => 'width:200px;')) . $form->error($model,$FieldName)
        );
    else
        printTr($form->labelEx($model,$FieldName),
            $form->$Type($model,$FieldName).$form->error($model,$FieldName));
}



function randomColor()
{
    $str = '#';
    for ($i = 0; $i < 6; $i++) {
        $randNum = rand(0, 15);
        switch ($randNum) {
            case 10: $randNum = 'A';
                break;
            case 11: $randNum = 'B';
                break;
            case 12: $randNum = 'C';
                break;
            case 13: $randNum = 'D';
                break;
            case 14: $randNum = 'E';
                break;
            case 15: $randNum = 'F';
                break;
        }
        $str .= $randNum;
    }
    return $str;
}

function DatePicker($This, $model, $modelName, $dateFieldName)
{
    //DatePicker($this, $model, 'ProjectAR','ScenBegin');
    return $This->widget('zii.widgets.jui.CJuiDatePicker',array(
        'name'=>$modelName."[".$dateFieldName."]",
        'id'=>$modelName. '_' .$dateFieldName,
        'value'=>Yii::app()->dateFormatter->format("y-M-d",strtotime($model->$dateFieldName)),
        'options'=>array(
            'showAnim'=>'fold',
            'dateFormat'=>'yy-mm-dd',
        ),
        'htmlOptions'=>array(
            'style'=>'height:20px;'
        ),
    ));
}


?>