<?php

Yii::import('application.vendors.*');
require_once('mylib/library.php');

class AccountController extends Controller
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

    public function actionIndex()
    {
        $user = UserAR::model()->find('ID=:id', array(':id'=>Yii::app()->user->getId()));
        $this->render('index',array('user'=>$user));
    }

    public function actionRegister()
    {
        // Создать модель и указать ей, что используется сценарий регистрации
        $project = new ProjectAR(ProjectAR::SCENARIO_REGISTRATION);

        if(isset($_POST['ajax']) && $_POST['ajax']==='register-form')
        {
            echo CActiveForm::validate($project);
            Yii::app()->end();
        }

        //print_r($_POST);
        // Если пришли данные для сохранения
        if(isset($_POST['ProjectAR']))
        {
            // Безопасное присваивание значений атрибутам
            $project->attributes = $_POST['ProjectAR'];

            // Проверка данных
            if($project->validate())
            {
                // Сохранить полученные данные
                // false нужен для того, чтобы не производить повторную проверку
                $project->save(false);

                $project->unsetAttributes();
                $project->message='Регистрация проекта завершилась успешно.';

                // Перенаправить на список зарегестрированных пользователей
                //$this->redirect($this->createUrl('user/'));
            }
        }

        // Вывести форму
        $this->render('register', array('model'=>$project));
    }


}