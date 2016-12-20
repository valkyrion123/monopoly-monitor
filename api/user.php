<?php 
include_once('database.php');

$database = new DB();

function get_user($data){
	global $database;
	
	$query = "SELECT * FROM user";

	$result = $database->fetch_data($query);

	return json_encode($result);
}

?>