<?php 
class NewsWidget extends CWidget {
 
 
    public function run() {
    	$row = Yii::app()->db->createCommand()
    	->select("id, title, text, date")
    	->from("news")
    	->order("id desc")
    	->limit(3)
    	->queryAll();

    	$this->render("NewsWidgetView", array('params' => $row));
    }
}
?>