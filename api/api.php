<?php 

//DO NOT DELETE THIS FILE

//For convention file naming use {description}_api.php
//Include all required PHP API file here

include_once('balance.php');

$data = $_POST['request'];
$callback = $_POST['callback'];

return call_user_func_array($callback, $data);	
?>