<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name . ' - Голосование';
?>
<div style="font-size:18px">
<?php 
echo '<table align="center">';
$i = 0;
  foreach($owners as $k => $v){
    $i++;
    if (($i/4) == 1){
      echo '<tr align="center">';
    }
    
    echo '<td align="center">';
    echo "<div id='imageOwner' style='float:left;margin-right:15px;margin-top:15px;margin-left:15px'>";
    echo "<div id=title style='font-size:14px'><b>Рейтинг :".$v['rate']."</b></div>";
    echo CHtml::image(Yii::app()->baseUrl.'/images/logos/'.$v['id'].".jpg", $v['title'],array('width'=>280, 'height'=>'200'));
    echo "<br>";
    echo Chtml::link($v['title'], 'index.php?r=site/voting/id/'.$v['id'], array());
    echo "</div>";
    echo "</td>";
    if (($i/3) == 1){
      echo '</tr>';
      $i=0;
    }
    

  }

  echo "</table>";

?>
</div>
