<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$user = 'pma';
$pass = '';
$db = new PDO( 'mysql:host=localhost;dbname=eisenhower', $user, $pass );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$stmt = $db->prepare( "SELECT passwordHash FROM account WHERE email=?" );
$stmt->bindParam( 1, $_POST["email"]);
$stmt->execute();
$hash=$stmt->fetch();

$persistentUpdate=$db->prepare( "INSERT INTO persistentCookie VALUES(0,?,?)" );
$persistentUpdate->bindParam(1,$_POST["email"]);

if (password_verify($_POST["password"],$hash["passwordHash"])){
	$_SESSION["user"]=$_POST["email"];
	$cookie_name="remember";
	$cookie_random=openssl_random_pseudo_bytes(128);
//	$cookie_random=rand(1,10);	
	$persistentUpdate->bindParam(2,$cookie_random);
	$persistentUpdate->execute();
	$cookie_value=$_POST["email"]." ".$cookie_random;
	setCookie($cookie_name,$cookie_value,time()+84600*60,"/");
	echo $cookie_value;
	echo true;
}
else {
	echo false;
}

?>