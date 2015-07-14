<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class ProjectAR extends CActiveRecord
{
    const SCENARIO_REGISTRATION = 'registration';
    var $message;

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'projects';
    }

    public function relations()
    {
        return array(
            'owner'=>array(self::BELONGS_TO, 'UserAR', 'OwnerUserID'),
        );
    }

	public function rules()
	{
		return array(
            array('ProjName, ProjDesc, ProjType, ProjMinistryNumber, ProjTechDesc, ProjTechnologies, ProjHow,
ProjReductionAmount, ProjApproved, AddGPS, AddRegion, AddCity, AddComments, ScenBegin,
ScenReportStart, ScenDesc, ScenReducdeHow, ScenBorders, ScenComments, TimeBegin, TimeDuration,
TimeQuotaDuration, EstEmissions, EstLeaks, EstReduction, EstBaseEmissions, EstReductionWithLeaks',
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
            'ProjName' => 'Название проекта',
            'ProjDesc' => 'Краткое описание проекта',
            'ProjType' => 'Тип проекта (по протоколам (леса/ метан и т.д.)*1)',
            'ProjMinistryNumber' => 'Зарегистрирован ли проект в Министерстве Энергетики РК. Если да то ставится номер регистрации, иначе - прочерк.',
            'ProjTechDesc' => 'Краткое техническое описание проекта ',
            'ProjTechnologies' => 'Технология (-ии), которые будут внедрены, или меры, операции или действия, которые будут предприняты в рамках проекта.',
            'ProjHow' => 'Краткое объяснение того, как антропогенные выбросы парниковых газов из источников будут сокращаться через предлагаемый проект, включая пояснение, почему сокращение выбросов не произойдет, если проект не будет внедрен, принимая во внимание базовые условия.',
            'ProjReductionAmount' => 'Оцениваемые объемы сокращения выбросов за период выпуска углеродных единиц по проекту.',
            'ProjApproved' => 'Проект одобрен заинтересованными сторонами.',

            'AddGPS' => 'GPS-координаты проекта',
            'AddRegion' => 'Область ',
            'AddCity' => 'Город (Либо ближайший населенный пункт)',
            'AddComments' => 'Примечания по месторасположению объекта',

            'ScenBegin' => 'Дата начала работы проекта (Дата начала работы проекта; формат: ГГГГ-ММ-ДД)',
            'ScenReportStart' => 'Дата начала отчетности (Первые сведения о сокращениях; формат: ГГГГ-ММ-ДД))',
            'ScenDesc' => 'Описание и обоснование базового сценария',
            'ScenReducdeHow' => 'Описание того, как антропогенные выбросы парниковых газов из источников сокращаются ниже того уровня, который бы имел место при отсутствии проекта',
            'ScenBorders' => 'Описание того, как определены границы деятельности применительно к проекту',
            'ScenComments' => 'Дополнительная информация по базовому сценарию, включая дату определения и лиц, вовлеченных в его определение',

            'TimeBegin' => 'Дата начала проекта',
            'TimeDuration' => 'Ожидаемая продолжительность проекта',
            'TimeQuotaDuration' => 'Продолжительность периода выпуска углеродных единиц',

            'EstEmissions' => 'Оцениваемые объемы выбросов по проекту',
            'EstLeaks' => 'Оцениваемые утечки',
            'EstReduction' => 'Сумма ожидаемого сокращения и утечек выбросов',
            'EstBaseEmissions' => 'Оцениваемые выбросы по базовому сценарию',
            'EstReductionWithLeaks' => 'Объем сокращений выбросов от проекта с учетом ожидаемых утечек',
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
