<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name . ' - Новости';
?>
<h3><?php
	echo $news['title']; 
?></h3>
<?php echo CHtml::image(Yii::app()->baseUrl.'/images/news/'.$news['photo'] ); ?>
<div id="text" style="font-size:16px">
	<?php 
		echo $news['text'];
	?>
</div>
