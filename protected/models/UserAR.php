<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class UserAR extends CActiveRecord
{
    const SCENARIO_REGISTRATION = 'registration';

    public $Password2;
    public $message;

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'users';
    }

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
            array('Login, Password, Password2, DirectorFIO, OrganizationName, Area, PostIndex, Address, Email,
                BIN, Phone1, KadastrNumber, BankContactPerson, BankBIK, BankIIK, BankRNN, BankName',
                'required'
            ),

            array('Email, Login',
                'filter', 'filter'=>'mb_strtolower'
            ),

            array('Email', 'correctEmail',
                'on'      => self::SCENARIO_REGISTRATION,
                'message' => 'Введите корректный {attribute}'),

            array('Login',
                'length',
                'min'=>4, 'max'=>100,
                'message' => '{attribute} должен содержать минимум 4 символа'
            ),

            array('Password',
                'length',
                'min'=>6, 'max'=>100,
                'message' => '{attribute} должен содержать минимум 6 символов'
            ),

            array('Login, Password',
                'match', 'pattern'=>'/[0-9a-zA-Z---_-_]/',
                'on'      =>  self::SCENARIO_REGISTRATION,
                'message' => '{attribute} должен содержать только латинские символы и цифры'
            ),

            array('Password2',
                'compare', 'compareAttribute'=>'Password',
                'message'=>'Пароли не совпадают',
                'on'      =>  self::SCENARIO_REGISTRATION
            ),

            array('Email, Login', 'unique',
                'on'      => self::SCENARIO_REGISTRATION,
                'message' => 'Данный {attribute} уже занят'
            ),
		);
	}

    public function correctEmail($attribute,$params)
    {
        if (!filter_var($this->Email, FILTER_VALIDATE_EMAIL))
            $this->addError('Email','Введите корректный электронный адрес');
    }

	/**
	 * Declares attribute labels.
	 */
    public function attributeLabels()
    {
        return array(
            'Login' => 'Логин',
            'Password' => 'Пароль',
            'Password2' => 'Повторите пароль',
            'DirectorFIO' => 'Ф.И.О. руководителя',
            'OrganizationName' => 'Полное наименование организации',
            'Area' => 'Область (Регион)',
            'PostIndex' => 'Почтовый индекс',
            'Address' => 'Юридический адрес',
            'WebSite' => 'Веб-сайт',
            'Email' => 'Адрес электронной почты',
            'BIN' => 'БИН',
            'Phone1' => 'Основной телефон',
            'Phone2' => 'Дополнительный телефон',
            'Fax' => 'Факс',
            'KadastrNumber' => 'Регистрационный номер в системе Кадастр',
            'BankContactPerson' => 'Контактное лицо',
            'BankBIK' => 'БИК',
            'BankIIK' => 'ИИК',
            'BankRNN' => 'РНН',
            'BankName' => 'Название банка',
            'RegistrationDate' => 'Дата регистрации в системе',
            'LastVisitDate' => 'Дата последнего посещения',
        );
    }
	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
    protected function beforeSave()
    {
        if(parent::beforeSave())
        {
            if($this->isNewRecord)
            {
                // Хешировать пароль

                $this->Password = $this->hashPassword($this->Login, $this->Password);
            }

            return true;
        }

        return false;
    }

    public function hashPassword($login, $password)
    {
        return CPasswordHelper::hashPassword($login.'@'.$password);
    }

    public function verifyPassword($login, $password, $hash)
    {
        return CPasswordHelper::verifyPassword($login.'@'.$password, $hash);
    }

}
