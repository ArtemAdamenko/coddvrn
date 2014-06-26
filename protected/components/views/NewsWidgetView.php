<?php 
	echo Chtml::link('Новости', 'index.php?r=site/news', array('style'=>'margin-left: 80px;color:grey;font-size:34px'));
?>
<table>
<?php
for ($i = 0; $i <= count($params)-1; $i++){
	echo "<tr>";
	echo "<td style='font-weight:bold'>".$params[$i]['date']."</td>";
	echo "<tr>";
	echo "</tr>";
	echo "<td>";
	echo Chtml::link($params[$i]['title'], 'index.php?r=site/news/id/'.$params[$i]['id'], array('style'=>'color:grey;font-size:15px'));
	echo "<hr noshade size='2'>";
	echo "</td>";
	echo "</tr>";

}
?>
</table>