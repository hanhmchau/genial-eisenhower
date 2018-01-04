<?php
$user = 'pma';
$pass = '';
$db = new PDO( 'mysql:host=localhost;dbname=eisenhower', $user, $pass );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$find = $db->prepare( "SELECT * FROM account WHERE email=?" );
$find->bindParam( 1, $_POST["email"]);
$find->execute();
$found=$find->fetchAll();

if (sizeof($found)>0){
	echo 0;
}
else {
	$stmt = $db->prepare( "INSERT INTO account VALUES(?,?)" );
	$hash=password_hash($_POST["password"],PASSWORD_DEFAULT);
	$stmt->bindParam( 1, $_POST["email"]);
	$stmt->bindParam( 2, $hash);
	$stmt->execute();
	echo 1;
}
?>