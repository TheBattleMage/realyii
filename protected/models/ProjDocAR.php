<?php

class ProjDocAR extends CActiveRecord
{
    const SCENARIO_REGISTRATION = 'registration';
    var $message;
    public $upfile;

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'proj_docs';
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
            array('Year, DocType, DocCategory, FileName',
                'required'
            ),
            array('upfile','file', 'types'=>'pdf', 'maxSize' => 4194304),
            // max size = 4 mb
		);
	}

	/**
	 * Declares attribute labels.
	 */
    public function attributeLabels()
    {
        return array(
            'Year' => 'Год',
            'DocType' => 'Тип документа',
            'DocCategory' => 'Категория документа',
            'ProjectID' => 'ID проекта',
            'FileName' => 'Имя файла (на сервере)',
            'OriginalFileName' => 'Оригинальное имя файла',
            'OwnerUserID' => 'ID владельца',
            'State' => 'Состояние',
            'Date' => 'Дата загрузки',
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
