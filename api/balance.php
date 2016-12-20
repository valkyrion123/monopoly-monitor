<?php 
include_once('database.php');

$database = new DB();

function get_current_balance($data){
	global $database;
	$user = $data['user'];
	$session = $data['session'];

	$query = "SELECT balance FROM game_data WHERE user_id = $user AND session_id = $session";
	$result = $database->fetch_data($query);

	echo json_encode($result[0]);
}

function transfer_balance_player($data){
	global $database;

	$from = $data['from'];
	$to = $data['to'];
	$amount = $data['amount'];
	$session = $data['session'];

	$query1 = "UPDATE game_data SET balance = balance + $amount WHERE session_id = $session AND user_id = $to";
	// $query2 = "UPDATE game_data SET balance = balance - amount WHERE game_data.id = session AND user_id = $from";

	$database->exec_query($query1);
	// $database->exec_query($query2);

	echo json_encode('transfered');
}

?>