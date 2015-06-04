<?php

/**
 * ChangepassForm class.
 * ChangepassForm is the data structure for keeping
 * user login form data. It is used by the 'changepass' action of 'UserController'.
 */
class ChangepassForm extends CFormModel
{
	public $oldpassword;
	public $password;
	public $password2;
    public $message = NULL;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('oldpassword, password, password2', 'required'),
			// rememberMe needs to be a boolean
			// password needs to be authenticated
            array('password2', 'compare', 'compareAttribute'=>'password', 'message'=>'Пароли не совпадают'),
		);
	}

	/**
	 * Declares attribute labels.
	 */

	public function attributeLabels()
	{
		return array(
            'oldpassword'=>'Старый пароль',
            'password'=>'Новый пароль',
            'password2'=>'Повторите новый пароль',
		);
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function change()
	{
        $user = UserAR::model()->find('ID=:id', array(':id'=>Yii::app()->user->getId()));
        if ($user->verifyPassword($user->Login, $this->oldpassword, $user->Password))
        {
            $user->Password = $user->hashPassword($user->Login,$this->password);
            //$user->Password = CPasswordHelper::hashPassword($user->Login.'@'.$this->password);
            $user->save();
            return true;
        }
        else
        {
            $this->addError('oldpassword',"Старый пароль указан неверно");
            //$this->message = "Старый пароль указан неверно";
            return false;
        }
	}
}
