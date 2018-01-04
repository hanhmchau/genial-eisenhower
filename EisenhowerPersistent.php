<?php
session_start();
if (!isset($_COOKIE["remember"])){
	echo 0;
	return;
}
$cookie=$_COOKIE["remember"];
$username=explode(" ",$cookie)[0];
$random=explode(" ",$cookie)[1];

$user = 'pma';
$pass = '';
$db = new PDO( 'mysql:host=localhost;dbname=eisenhower', $user, $pass );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$stmt = $db->prepare( "SELECT * FROM persistentcookie WHERE Username=? AND Random=?" );
$stmt->bindParam( 1, $username);
$stmt->bindParam( 2, $random);
$stmt->execute();
$found=$stmt->fetch();

if (sizeof($found)>0){
	echo 1;
	$persistentUpdate=$db->prepare( "UPDATE persistentCookie SET Random=? WHERE Id=?" );
	$newRandom=openssl_random_pseudo_bytes(128);
//	$newRandom=rand(1,10);
	$persistentUpdate->bindParam(1,$newRandom);
	$persistentUpdate->bindParam(2,$found["Id"]);
	$persistentUpdate->execute();
	$cookie_value=$username." ".$newRandom;
	setCookie("remember",$cookie_value,time()+84600*60,"/");
	$_SESSION["user"]=$username;

//	echo $found["Id"];
//	echo $found["Random"];
}
else {
	echo 0;
}
?>