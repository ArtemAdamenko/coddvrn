<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mystyles.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap-theme.min.css">
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/js/bootstrap.min.js"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header" style="background-image:url(<?php echo Yii::app()->baseUrl.'/images/rsz_1bg.jpg'?>)">
		<div style="margin-left:50px">
			<?php 
			echo CHtml::image(Yii::app()->baseUrl.'/images/voronezh-city.png'
	                                                );
	                                                ?>
        </div>
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
		<div id="underheader" style="width:auto;height:60px;background-color:#D7D7D7;border-radius: 15px;">
			<div id="underheader_text" style="font-size:26px;margin-left:20px;"><b style="margin-top:10px;position:absolute;">Муниципальное бюджетное учреждение "Центр организации дорожного движения"</b></div>
		</div>
		<div id="underheader" style="width:auto;height:50px;background-color:#D7D7D7;margin-top:20px;border-radius: 15px 15px 0px 0px;margin-bottom:10px;">
			<div id="underheader_text" style="font-size:22px;margin-left:20px;"><b style="margin-top:10px;position:absolute;">Номер горячей линии: (473)260-51-23</b></div>
		</div>

	</div><!-- header -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	<?php
    		echo Chtml::link('Главная', 'index.php?r=site/index', array('class'=>'navbar-brand'));
    		echo Chtml::link('Документы', 'index.php?r=site/docs', array('class'=>'navbar-brand'));
    		echo Chtml::link('Система диспетчиризации и контроля', 'index.php?r=site/system', array('class'=>'navbar-brand'));
    		echo Chtml::link('Обратная связь', 'index.php?r=site/contact', array('class'=>'navbar-brand'));
    		echo Chtml::link('Схемы маршрутов', 'index.php?r=site/routes', array('class'=>'navbar-brand'));
    	?>

</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
  </div><!-- /.container-fluid -->
</nav>
	<div id = "newswidget" style="float:right;height:auto;width:300px; margin-left:15px;">
		<?php
			if ((Yii::app()->request->requestUri != "/index.php?r=site/voting") && 
				(Yii::app()->request->requestUri != "/index.php?r=site/news")){
				$this->widget('NewsWidget',array());
			}
		?>
	</div>
	<?php echo $content; ?>

	<div class="clear"></div>
	

	<div id="footer">
		<div id="gover" style="float:bottom;margin-left:35px">
			<div id="1" style="margin-right:10px;float:left">
				<?php 
					echo CHtml::image(Yii::app()->baseUrl.'/images/gerb.jpg',
						      "Правительство воронежской области",
						      array("width"=>"80px" ,"height"=>"80px", 'margin-right'=>'20px'));
			    ?>
			    <br>
			    <?php
			    	echo CHtml::link("Правительство воронежской области", "http://www.govvrn.ru/");
			    ?>
		    </div>
		    <div id="2" style="margin-right:10px;float:left">
			    <?php 
					echo CHtml::image(Yii::app()->baseUrl.'/images/n_gerb.jpg',
						      "Администрация городского округа г.Воронеж",
						      array("width"=>"80px" ,"height"=>"80px"));
			    ?>
			    <br>
			    <?php
			    	echo CHtml::link("Администрация городского округа г.Воронеж", "http://www.gorduma-voronezh.ru/");
			    ?>
		    </div>
		    <div id="3" style="margin-right:10px;float:left">
			    <?php 
					echo CHtml::image(Yii::app()->baseUrl.'/images/voronezh.jpg',
						      "Воронежская областная Дума",
						      array("width"=>"80px" ,"height"=>"80px"));
			    ?>
			    <br>
			    <?php
			    	echo CHtml::link("Воронежская областная Дума", "http://www.vrnoblduma.ru/");
			    ?>
		    </div>
		    <div id="4" style="margin-right:10px;float:left">
			    <?php 
					echo CHtml::image(Yii::app()->baseUrl.'/images/rus.png',
						      "Президент России",
						      array("width"=>"80px" ,"height"=>"80px"));
			    ?>
			    <br>
			    <?php
			    	echo CHtml::link("Президент России", "http://www.kremlin.ru/");
			    ?>
		    </div>
		    <div id="5" style="margin-right:10px;float:left">
			    <?php 
					echo CHtml::image(Yii::app()->baseUrl.'/images/ips_3.jpg',
						      "Официальный интернет-портал правовой информации",
						      array("width"=>"80px" ,"height"=>"80px"));
			    ?>
			    <br>
			    <?php
			    	echo CHtml::link("Официальный интернет-портал правовой информации", "http://pravo.gov.ru/");
			    ?>
		    </div>
	    </div>
	    <br>
	    <div id="fot" style="margin-top:100px">
			Copyright &copy; <?php echo date('Y'); ?> by Adamenko Artem "CODD".<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
			<table cellpadding="0" cellspacing="0" border="0" width="88" height="31" style="line-height:0;width:88px;float:right"><tr style="height:10px;">
<td style="padding:0;width:38px;height:10px;"><a href="http://www.24log.de" target="_blank"><img src="http://counter.24log.ru/buttons/24/bg24-1_1.gif" width="38" height="10" border="0" alt="Besucherzahler" title="Besucherzahler " style="margin:0;padding:0;" /></a></td>
<td style="padding:0;width:50px;height:10px;"><a href="http://www.russianwoman.ca/index.php?Language=French" target="_blank"><img src="http://counter.24log.ru/buttons/24/bg24-1_3.gif" width="50" height="10" border="0" alt="femmes russes a marier" style="margin:0;padding:0;"></a></td></tr>
<tr style="height:21px;"><td style="padding:0;width:38px;height:21px"><a href="http://www.24log.ru" target="_blank"><img src="http://counter.24log.ru/buttons/24/bg24-1_2.gif" width="38" height="21" alt="счетчик посещений" title="счетчик посещений" border="0" style="margin:0;padding:0;" /></a></td>
<script type='text/javascript' language='javascript'>
document.write('<td style="padding:0px;width:50px;height:21px;"><a href="http://www.24log.ru/rating/rating.php?c=11" target="_blank"><img border="0" width="50" height="21" src="http://counter.24log.ru/counter?id=233233&t=24&st=1&r='+escape(document.referrer)+'&u='+escape(document.URL)+'&s='+((typeof(screen)=='undefined')?'':screen.width+'x'+screen.height+'x'+(screen.colorDepth?screen.colorDepth:screen.pixelDepth))+'&rnd='+Math.random()+'" alt="Рейтинг: Работа" title="Показано число просмотров всего и за сегодня" style="margin:0;padding:0;" /></a></td>');
</script></tr></table><NOSCRIPT><a href="http://www.1russianbrides.com">russian mail order brides</a></NOSCRIPT>
			<script type="text/javascript"><!--
					document.write("<a href='http://www.liveinternet.ru/click' "+
					"target=_blank><img src='//counter.yadro.ru/hit?t14.6;r"+
					escape(document.referrer)+((typeof(screen)=="undefined")?"":
					";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
					screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
					";"+Math.random()+
					"' alt='' title='LiveInternet: показано число просмотров за 24"+
					" часа, посетителей за 24 часа и за сегодня' "+
					"border='0' width='88' height='31'><\/a>")
			</script>
			<!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=24980696&amp;from=informer"
target="_blank" rel="nofollow"><img src="//bs.yandex.ru/informer/24980696/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try{Ya.Metrika.informer({i:this,id:24980696,lang:'ru'});return false}catch(e){}"/></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter24980696 = new Ya.Metrika({id:24980696,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/24980696" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

		</div>
</div>

</body>
</html>
