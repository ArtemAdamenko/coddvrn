<?php

class SiteController extends Controller
{
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
	*Новости
	*/
	public function actionNews($id = 0){
		//архив новостей
		if ($id == 0){
		
			$this->render('archivenews');

		}else{
		//отдельная новость
			$news = Yii::app()->db->createCommand()
				    ->select('title, text, photo')
				    ->from('news')
				    ->where('id=:id', array(':id'=>$id))
				    ->queryRow();

			$this->render('news', array('news' => $news));
		}
	}

	/**
	*Голосование 
	*@param $id - идентификатор объекта голосования
	**/
	public function actionVoting($id = 0){

		if ($id != 0){
			/*определяем ip пользователя*/
			$ip = Yii::app()->request->userHostAddress;

			/*узнаем голосовал ли этот ip*/
			$vote = Yii::app()->db->createCommand()
				    ->select('id')
				    ->from('ipsvoting')
				    ->where('ip=:ip', array(':ip'=>$ip))
				    ->queryRow();

			/*если не числиться в бд*/
			if (!$vote['id']){

				/*заносим в бд ip*/
				Yii::app()->db->createCommand()
				    ->insert('ipsvoting', 
				    	array('ip'=>$ip));

				/*берем последнюю оценку и увеличиваем на 1*/
				$rate = Yii::app()->db->createCommand()
				    ->select('rate')
				    ->from('owners')
				    ->where('id=:id', array(':id'=>$id))
				    ->queryRow();
				$newRate = $rate['rate'];
				$newRate++;
			
				/*заносим оценку в бд*/
				Yii::app()->db->createCommand()
				    ->update('owners', 
				    	array('rate'=>$newRate), 
				    	'id=:id', array(':id'=>$id));
			}
		}
		
		$owners = Yii::app()->db->createCommand()
					->select('id, title, rate')
					->from('owners')
					->queryAll();

		$this->render('voting', array('owners' => $owners));
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/*
	* Документы
	*/
	public function actionDocs()
	{
		$this->render('docs');
	}


	/*
	* Система диспетчиризации
	*/
	public function actionSystem()
	{
		$this->render('system');
	}



	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	/*
	* Схемы маршрутов
	*/
	public function actionRoutes(){
		$routes = Yii::app()->db->createCommand()
			    ->select('id, name, photo')
			    ->from('routes')
			    ->queryAll();

		$this->render('routes', array('routes' => $routes));
	}
	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/html; charset=UTF-8";

				$text = 'Имя - '.$model->name.'<br>';
				$text .= 'Фамилия - '.$model->secondName.'<br>';
				$text .= 'Отчество - '.$model->thirdName.'<br>';
				$text .= 'Адрес - '.$model->address.'<br>';
				$text .= 'Контактный телефон - '.$model->phone.'<br>';
				$text .= 'Электронная почта - '.$model->email.'<br>';
				$text .= 'Сообщение - '.$model->body.'<br>';
				mail(Yii::app()->params['adminEmail'],$subject,$text,$headers);
				Yii::app()->user->setFlash('contact','Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}