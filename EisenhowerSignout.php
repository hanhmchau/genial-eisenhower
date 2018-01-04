<?php

$user = 'pma';
$pass = '';
$db = new PDO( 'mysql:host=localhost;dbname=eisenhower', $user, $pass );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

if (!isset($_COOKIE["remember"])){
	echo 0;
	return;
}

$cookie=$_COOKIE["remember"];
$username=explode(" ",$cookie)[0];
$random=explode(" ",$cookie)[1];
	
$stmt = $db->prepare( "DELETE FROM persistentcookie WHERE Username=? AND Random=?" );
$stmt->bindParam( 1, $username);
$stmt->bindParam( 2, $random);
$stmt->execute();

setCookie("remember","",time()-84600*365,"/");
echo 1;
?>