<?php

class ProjReductionAR extends CActiveRecord
{
    const SCENARIO_REGISTRATION = 'registration';
    var $message;

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'proj_reductions';
    }

    public function relations()
    {
        return array(
            'owner'=>array(self::BELONGS_TO, 'ProjectAR', 'ProjectID'),
        );
    }

	public function rules()
	{
		return array(
            array('Name, ProtocolNumber, Year, ReportPeriodBegin, ReportPeriodEnd, CO2Eq, ReductionAmount',
                'required'
            ),
		);
	}

	/**
	 * Declares attribute labels.
	 */
    public function attributeLabels()
    {
        return array(
            'Name' => 'Наименование',
            'ProtocolNumber' => 'Номер протокола',
            'Year' => 'Год',
            'ReportPeriodBegin' => 'Начало отчётного периода',
            'ReportPeriodEnd' => 'Конец отчётного периода',
            'CO2Eq' => 'Объём сокращений (в CO2 эквиваленте)',
            'ReductionAmount' => 'Количество сокращений',
        );
    }

    protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                $this->OwnerUserID = Yii::app()->user->id;
            }

            return true;
        }

        return false;
    }

    public function getLink()
    {
        return '<a href="http://google.com">'.$this->ProjName.'</a>';
    }

}
