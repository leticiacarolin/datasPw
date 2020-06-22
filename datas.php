<?php
	$date1="2019-02-23";
	$date2="2020-06-21";
	function dateDiff($date1, $date2) 
	{
	  $date1_ts = strtotime($date1);
	  $date2_ts = strtotime($date2);
	  $diff = $date2_ts - $date1_ts;
	  return round($diff / 86400);
	}
	$dateDiff= dateDiff($date1, $date2);
	printf("A diferença entre as duas datas é de: " .$dateDiff. " Dias ");
	print "</br>";
?>