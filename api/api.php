<?php 

//DO NOT DELETE THIS FILE

//For convention file naming use {description}_api.php
//Include all required PHP API file here
include('balance.php');
include('user.php');

$data = $_POST['request'];
$data = json_decode($data, true);

$callback = $_POST['callback'];

return call_user_func($callback, $data);	
?>