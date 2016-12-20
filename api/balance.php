<?php 
include_once('database.php');

$database = new DB();

function get_current_balance($data){
	global $database;
	$user = $data['user'];
	$session = $data['session'];

	$query = "SELECT balance FROM game_data WHERE user_id=$user AND session_id=$session";
	$result = $database->execute_query($query);

	echo json_encode($result[0]);
}

function transfer_balance($data){
	echo json_encode("1000");
}

?>