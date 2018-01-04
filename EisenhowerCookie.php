<?php
$cookie_name=$_POST["color"];
$cookie_value=$_POST["state"];
setCookie($cookie_name,$cookie_value,time()+84600*365,"/");
?>