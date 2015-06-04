<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<!-- HTML 5 for older browsers -->
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Google Webfonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,600,700,300,800" rel="stylesheet" type="text/css" />
	
	<!-- Stylesheets -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" rel="stylesheet" />
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" rel="stylesheet" />
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/asyncslider_body.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	
	<!-- JavaScripts -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.1.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.asyncslider.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/hover.zoom.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flip.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/fancybox/jquery.fancybox.pack.js?v=2.0.4"></script>
</head>

<body>
	<div class="background_overlay">
		<div class="background">
		
			<!--Wrapper -->
			<div class="wrapper">
			
				<!--Header -->
				<header>
					<a href="#" class="logo">
					Реестр
					</a>
					<div class="description">Национальный реестр углеродных единиц</div>
					
					<div class="contact">
					
						<!-- Order -->
						<!--
						<a class="order" href="#">Order Now</a>
						-->
						<!-- END OF: Order -->
						
						<!-- Telephone -->
						<div class="telephone">+7 727 22 556 22</div>
						<!-- END OF: Telephone -->

                        <?php
                        if (Yii::app()->user->isGuest)
						    echo('<a class="social" href="?r=site/login">Авторизация</a>');
                        else
                            echo('<a class="social" href="?r=site/logout">Выйти</a>');
                        ?>
						
						
					</div>
					<div class="clear"></div>
				</header>
				<!-- END OF: Header -->
				
				<div class="line"></div>
				<div class="clear"></div>
			</div>
			
			<!-- END OF: Wrapper -->
            <?php
            if (Yii::app()->user->isGuest)
            {
            ?>
			<div class="slider_container">
			
				<ul class="async_slider">
					
					<!-- Slide Item 1 -->
					<li id="slide-01">
						<div class="slider_text">
							<h1>Торговля квотами</h1>
							<p>В целях покрытия своих обязательств по первому НПР, многие компании вышли на торги с целью приобретения недостающего объема квот.</p>
<p>В соответствии с представленной информацией по торгам на Товарной бирже «Каспий» первые биржевые торги по квотам на выбросы парниковых газов СО2 состоялись 28 марта 2014 года. Последние торги первого периода по квотам прошли 8 Августа 2014. В торгах приняли участие 23 участника. Было совершено 34 сделки, общий объем биржевых сделок составил 1 252 950 тонн квот СО2.
Необходимо понимать, что в соответствии с биржевыми правилам в расчет берется общий объем сделок, а не объем единиц квот проданный. Ценовой диапазон составил от 10 тенге до 833 тенге за тонну. Средняя цена за тонну СО2 составляет 460 тенге.
</p>

						</div>
						<div class="slider_image">
							<img src="images/mac2.png" width="420" height="250" />
						</div>
						<div class="clear"></div>
					</li>
					<!-- End of: Slide Item 1 -->
					
					<!-- Slide Item 1 -->
					<li id="slide-02">
						<div class="slider_text">
							<h1>Цели организации</h1>
							<p>Pipilia theme is built to work on the most known internet browsers.</p>
							<p>Try out the theme in any browser, but the best performance is on Google Chrome.</p>
							<p>Check this out!</p>
						</div>
						<div class="slider_image browsers">
							<div> <img src="images/op.png" width="48" height="54" /></div>
							<div> <img src="images/firefox.png" width="87" height="86" /></div>
							<div> <img src="images/chrome.png" width="128" height="126" /></div>
							<div> <img src="images/safari.png" width="78" height="82" /></div>
							<div> <img src="images/ie.png" width="53" height="54" /></div>
						</div>
						<div class="clear"></div>
					</li>
					<!-- End of: Slide Item 1 -->
					
					
					<!-- Slide Item 1 -->
					<li id="slide-03">
						<div class="slider_text">
							<h1>Win a MacBook Pro</h1>
							<p>Be a part of the design contest and get into the competition to win an Apple MacBook Pro.
								<br />
								The winner will be announced on Thursday the 16th of October.
							</p>
							<a class="button" href="#">Join the competition</a> 
							<div class="or">or</div>
							<a class="button" href="#">Watch the participants</a>
						</div>
						<div class="slider_image">
							<img src="images/mac.png" width="420" height="250" />
						</div>
						<div class="clear"></div>
					</li>
					<!-- End of: Slide Item 1 -->
					
					<!-- Slide Item 1 -->
					<li id="slide-04">
						<div class="slider_text">
							<h1>Win a MacBook Pro</h1>
							<p>Be a part of the design contest and get into the competition to win an Apple MacBook Pro.
								<br />
								The winner will be announced on Thursday the 16th of October.
							</p>
							<a class="button" href="#">Join the competition</a> 
							<div class="or">or</div>
							<a class="button" href="#">Watch the participants</a>
						</div>
						<div class="slider_image">
							<img src="images/mac.png" width="420" height="250" />
						</div>
						<div class="clear"></div>
					</li>
					<!-- End of: Slide Item 1 -->
					
				</ul>
				
				<div class="sliderNav"></div>
				<div class="slides_nav_container"></div>
				
			</div>
			<!-- END OF: Slider Container -->
            <?php
            }
            ?>

            <?php
            if (!Yii::app()->user->isGuest)
            {
                /*
                //$connection=Yii::app()->db;

                $command = Yii::app()->db->createCommand()
                    ->select('Login, Name')
                    ->from('Table')
                    ->where('ID=:id', array(':id'=>1));
                //$command=$connection->createCommand("SELECT `Login`,`Name` FROM `Table` WHERE `ID`='1'");
                $dataReader=$command->query();
                //$rowCount=$command->execute();

                $dataReader->bindColumn(1,$login);
                $dataReader->bindColumn(2,$name);

                echo("DB SELECT:<br>");
                while($dataReader->read()!==false)
                {
                    echo("login: $login, name: $name<br>");
                }

                $id = Yii::app()->user->getId();
                //$login = "x";
                $login = Yii::app()->user->getName();
                echo('my ID:'.$id.'<br><br>');
                echo('my Login:'.$login.'<br><br>');
                //echo('my Row Count:'.$rowCount.'<br><br>');
                $test = CPasswordHelper::hashPassword("123321");
                echo("hash: $test<br><br>");
                $password = '123321';
                $hash = '$2a$13$6jzfTggm5/RlMXD56eylx./zrIwFrij7PCiNYqPvavaPccGSaRd66';
                if (CPasswordHelper::verifyPassword($password, $hash))
                    echo('good password');
                else
                    echo('bad password');

                //$user=UserAR::model()->find('Login=:login', array(':login'=>'test'));

                //$dataProvider=new CActiveDataProvider('UserAR');






                //$user=UserAR::model()->find('Login=:login', array(':login'=>"t1est"));
                //$user = UserAR::model()->findByPk(1);
                //$user = UserAR::model()->find('ID=:ID', array(':ID'=>2));
                //echo($user->Name.'<br>');
                /*
                $user = new UserAR;
                $user->Login = "newlogin";
                $user->password = CPasswordHelper::hashPassword("123321");
                $user->Name = "newName";
                $user->save();
                */

/* @var $this SiteController */

                /*

                $this->pageTitle=Yii::app()->name;

                $sort = new CSort();
                $sort->attributes = array(
                    'Login'=>array(
                        'asc'=>'Login',
                        'desc'=>'Login desc',
                    ),
                    'Name'=>array(
                        'asc'=>'Name',
                        'desc'=>'Name desc',
                    ),
                );

                $dataProvider=new CActiveDataProvider('UserAR', array(
                    'criteria'=>array(
                        'condition'=>'Login!=\'anewlogin\'',
                        //'order'=>'create_time DESC',
                        //'with'=>array('author'),
                    ),
                    'pagination'=>array(
                        'pageSize'=>20,
                    ),
                    'sort'=>$sort,
                ));

                $this->widget('zii.widgets.grid.CGridView', array(
                    'dataProvider'=>$dataProvider,
                    //'itemsCssClass'=>'table-striped',

                    'columns' => array(
                        array(
                            'name' => 'Name',
                            'header' => 'фыва',
                            'type' => 'raw',
                            'value' => '$data->Name',
                        ),
                        array(
                            'name' => 'Login',
                            'header' => 'Логин',
                            'type' => 'raw',
                            'value' => '$data->Login',
                        ),
                    ),

                ));
                */

                //echo(Yii::app()->user->getState('Admin'));

            ?>
			<div class="wrapperTopMenu">
				<ul class="features">
					<li class="feature">
						<a href="index.php?r=site/index">
						<div class="HomeLink ca-icon"></div>
						<div>
							<h1 class="ca-main">Главная</h1>
							<p class="ca-sub">
								Главная страница сайта
							</p>
						</div>	
						<div class="clear"></div>
						</a>
					</li><!-- end of: FEATURE  -->
					
					<li class="feature">
                        <a href="index.php?r=account/index">
						<div class="AccountLink ca-icon"></div>
						<div>
							<h1 class="ca-main">Аккаунт</h1>
							<p class="ca-sub">
								Ваш аккаунт в реестре, управление счетами
							</p>
						</div>	
						<div class="clear"></div>
						</a>
					</li><!-- end of: FEATURE  -->
					
					<li class="feature">
						<a href="index.php?r=user/index">
						<div class="SettingsLink ca-icon"></div>
						<div>
							<h1 class="ca-main">Настройки</h1>
							<p class="ca-sub">
								Смена пароля, изменение данных
							</p>
						</div>	
						<div class="clear"></div>
						</a>
					</li><!-- end of: FEATURE  -->
					
					<li class="feature">
						<a href="http://porntube.com">
						<div class="networking ca-icon"></div>
						<div>
							<h1 class="ca-main">Подсматривать</h1>
							<p class="ca-sub">
								Горячие сучки онлайн без СМС и регистрации
							</p>
						</div>	
						<div class="clear"></div>
						</a>
					</li><!-- end of: FEATURE  -->
				</ul>
			</div>
            <?php
            }
            ?>
			
			<!--WRAPPER -->
			<div class="wrapper">

				<section>
					<div class="content">

                        <?php echo $content; ?>
                    </div>

				</section>
				
				<div class="blocks">
				
					<div class="blocks_inner">
					
						<div class="block_1">
							<h1>Новый реестр!</h1>
							<p>
								Представляем вашему вниманию новый Национальный реестр углеродных единиц! В данной версии переработан дизайн и функционал.
							</p>
						</div>
						
						<div class="block_2">
							<h1>Реклама</h1>
							<p>
								Здесь могла быть ваша реклама.
							</p>
						</div>
						
						<div class="block_3">
							<h1>Наши контакты</h1>
							<p>
								Связаться с нами по следующему телефону: +7 727 2255622
							</p>
						</div>
						
						<div class="clear"></div>
					</div>
					
				</div>
				
				
				<div class="clear"></div>

				
				<footer>
				
					Copyright © Primatech 2014. Реестр углеродных единиц.

					
					<div class="clear"></div>
					
				</footer>
				
			</div>
			<!-- END OF: Wrapper -->
		</div>
	</div>
</body>

<?php
/*

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
*/
?>