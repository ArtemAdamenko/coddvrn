<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h3 style="margin-left:170px;">Голосование проводится до 01.07.2014</h3>
<?php echo CHtml::button('!ГОЛОСОВАНИЕ ЗА ЛУЧШИЙ ЛОГОТИП ПЕРЕВОЗЧИКА!', array('submit' => array('site/voting'), 'style'=> 'color:grey;margin-bottom:50px;width:800px;font-size:29px;height:70px;font-family:-webkit-pictograph'));?>

<div style="font-size:18px">

&nbsp&nbsp&nbspМБУ ”ЦОДД” осуществляет централизованный диспетчерский контроль и оперативное управление движением подвижного состава на маршрутах города; 
обеспечивает контроль за соблюдением водителями схем движения маршрутов и выполнением расписаний движения; 
осуществляет учет выполненной транспортной работы и анализа исполненного движения на маршрутах городского пассажирского транспорта, 
перевозчиками всех форм собственности.
</div>
<iframe src="http://195.98.79.37:8080/CitizenCoddWebMaps/index.html" style="width:1100px;height:800px"></iframe>

