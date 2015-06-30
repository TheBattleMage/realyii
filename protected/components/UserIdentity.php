<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $user=UserAR::model()->find('Login=:login', array(':login'=>$this->username));
        if (empty($user))
        {
            //Yii::app()->user->getId();
            //echo(Yii::app()->db->last_query());
            //die("wrong name");
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        }
        else if (!$user->verifyPassword($this->username,$this->password,$user->Password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->errorCode=self::ERROR_NONE;
            $this->_id = $user->ID;
            $user->LastVisitDate = $user->CurrentVisitDate;
            $this->setState('isAdmin', $user->IsAdmin);
            $user->CurrentVisitDate = new CDbExpression('NOW()');
            $user->save();
            //$this->setState("Admin","true");
        }
        return !$this->errorCode;
	}

    public function getId()
    {
        return $this->_id;
    }


}