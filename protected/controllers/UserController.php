<?php

Yii::import('application.vendors.*');
require_once('mylib/library.php');

class UserController extends Controller
{
    public $layout='column1';
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated users to access all actions
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    /**
     * Declares class-based actions.
     */

	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
     *


	 * This is the action to handle external exceptions.
	 */

    public function actionIndex()
    {
        $user = UserAR::model()->find('ID=:id', array(':id'=>Yii::app()->user->getId()));
        $this->render('index',array('user'=>$user));
    }

	/**
	 * Изменение пароля
	 */
	public function actionChangepass()
	{
		$model = new ChangepassForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='changepass-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['ChangepassForm']))
		{
			$model->attributes=$_POST['ChangepassForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->change())
            {
                $model->unsetAttributes();
                $model->message='Пароль был успешно изменён';
				//$this->redirect('index.php?r=user/changepass');
            }
		}
		// display the form
		$this->render('changepass',array('model'=>$model));
	}


}