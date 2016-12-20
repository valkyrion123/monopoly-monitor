<?php 
include_once('database.php');

$database = new DB();

function get_user($data){
	global $database;
	
	$query = "SELECT * FROM user";

	$result = $database->fetch_data($query);

	echo json_encode($result[0]);
}

?>