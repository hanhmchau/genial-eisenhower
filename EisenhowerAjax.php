<?php
session_start();
  $user = 'pma';
  $pass = '';
  $db = new PDO( 'mysql:host=localhost;dbname=eisenhower', $user, $pass );
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$updateStatement = $db->prepare( "UPDATE task SET Description=? WHERE Id=?" );
$insertStatement = $db->prepare( "INSERT INTO task VALUES(0,?,?,?,'fresh')" );
$setStateStatement = $db->prepare( "UPDATE task SET State=? WHERE Id=?" );
$deleteStatement=$db->prepare("DELETE FROM task WHERE id=?");
$recolorStatement = $db->prepare( "UPDATE task SET Color=? WHERE Id=?" );

$refreshId = $db->prepare( "ALTER TABLE task AUTO_INCREMENT=1" );
//	echo $_SESSION["user"];
$mail="minharietta@yahoo.com.vn";

if (!empty($_POST["edit"])) {
    $updateStatement->bindParam( 1, $_POST["description"]);
	$updateStatement->bindParam( 2, $_POST["id"]);
	$updateStatement->execute();
}

if (!empty($_POST["insert"])) {
    $insertStatement->bindParam( 1, $mail);	
    $insertStatement->bindParam( 2, $_POST["color"]);
	$insertStatement->bindParam( 3, $_POST["description"]);
	$insertStatement->execute();
}

if (!empty($_POST["delete"])) {
	$deleteStatement->bindParam(1,$_POST['id']);	
	$deleteStatement->execute();
}

if (!empty($_POST["finish"])) {
	$state="finished";	
	$setStateStatement->bindParam(1,$state);
	$setStateStatement->bindParam( 2, $_POST["id"]);
	$setStateStatement->execute();
}

if (!empty($_POST["restore"])) {
	$state="fresh";	
	$setStateStatement->bindParam(1,$state);
	$setStateStatement->bindParam( 2, $_POST["id"]);
	$setStateStatement->execute();
}

if (!empty($_POST["recolor"])) {
	$recolorStatement->bindParam(1,$_POST["newColor"]);
	$recolorStatement->bindParam( 2, $_POST["id"]);
	$recolorStatement->execute();
}

$refreshId->execute();
?>