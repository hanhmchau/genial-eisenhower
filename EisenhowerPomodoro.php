<?php
	$value=$_POST["description"];
	$title=substr($value,0,30);
	if (strlen($value)>30){
		$title.="...";
	}
	$id=$_POST["id"];

	echo include "EisenhowerPomodoroView.php";
?>