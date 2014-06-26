<?php
/* @var $this SiteController */


$this->pageTitle=Yii::app()->name . ' - Документы';
?>
<div id="routes" style="font-size:18px;">
<table cellpadding="7" border="2">
<?php
	$i = 0;
  foreach ($routes as $route){
  	if ($i == 0)
  		echo "<tr>";
 
    echo "<td><a class='tooltip2' href='#'>".$route['name']."<span><img width=700 height=800 src='".Yii::app()->baseUrl."/images/routes/".$route['photo'].".jpg'/></span></a></td>";
    if (($i / 8) == 1){
    	echo "</tr>";
    	$i = -1;
    }
    $i++;

  }
?>
</table>
</div>
