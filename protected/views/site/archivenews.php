<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name . ' - Архив новостей';
?>
<h2>Архив Новостей</h2>
<?php 

$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => News::model()->search(),
    //'filter' => News::model(),
    'columns' => array(
		array(
			'name' => 'Дата',
			'type' => 'raw',
			'value' => 'CHtml::encode($data->date)'
		),
		array(
			'name' => 'Заголовок',
			'type' => 'raw',
			'value' => 'CHtml::link($data->title, "index.php?r=site/news/id/".$data->id, array("style"=>"color:grey;font-size:18px"))'
		),
    ),
));

?>
