<?php
session_start();
$user = 'pma';
$pass = '';
$db = new PDO( 'mysql:host=localhost;dbname=eisenhower', $user, $pass );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

$colors = array( "blue", "green", "orange", "red" );
$names = array( "blue" => "Do first", "green" => "Schedule", "orange" => "Delegate", "red" => "Don't do" );
$cookies = array( "blue" => "Hidden", "green" => "Hidden", "orange" => "Hidden", "red" => "Hidden" );
$acc = $_SESSION["user"];

$freshResults = array();
$finishedResults = array();

$finishedState=array();
$finishedToggleAction=array();
$visi=array();
$tasksOrTask=array();

$stmt = $db->prepare( "SELECT * FROM Task WHERE account=:account AND color=:color AND state=:state" );
$stmt->bindParam( ":account", $acc );
$stmt->bindParam( ":color", $color );
$stmt->bindParam( ":state", $state );

$state = 'fresh';

foreach ( $colors as $color ) {
	$stmt->execute();
	$freshResults[ "$color" ] = $stmt->fetchAll();
	if (isset($_COOKIE["$color"])){
		$cookies["$color"]=$_COOKIE["$color"];
	}
		
	if ($cookies["$color"]=="Hidden"){
		 $finishedState["$color"]="initially-hidden";
		 $finishedToggleAction["$color"]="Show";
	}
	else {
		$finishedState["$color"]="";
		$finishedToggleAction["$color"]="Hide";		
	}
}

$state = 'finished';

foreach ( $colors as $color ) {
	$stmt->execute();
	$finishedResults[ "$color" ] = $stmt->fetchAll();
	$numberOfFinished["$color"]=sizeof($finishedResults["$color"]);
	
	$numberOfFinished["$color"]==0 ? $visi["$color"]="invisible" : $visi["$color"]="";
	$numberOfFinished["$color"]>1 ? $tasksOrTask["$color"]="tasks" : $tasksOrTask["$color"]="task";	
}

foreach ( $colors as $color ) {
	include "EisenhowerQuadrant.php";
}
?>