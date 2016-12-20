<?php 
include_once('database.php');

$database = new DB();

function get_user($data){
	global $database;
	
	$query = "SELECT * FROM user";

	$result = $database->fetch_data($query);

	echo json_encode($result[0]);
}

function register_user($data){
	global $database;
	$name = $data['name'];
	$pass = $data['pass'];
	$pass = password_hash($pass, PASSWORD_DEFAULT);

	$query = "INSERT INTO user (name, pass) VALUES ('$name', '$pass')";

	$result = $database->exec_query($query);

	echo json_encode($query);
}

function login_user($data){
	global $database;
	$name = $data['name'];
	$pass = $data['pass'];

	$query = "SELECT pass FROM user WHERE name = '$name'";

	$result = $database->fetch_data($query);

	if(!empty($result)){
		if(password_verify($pass, $result[0]['pass'])){
			echo json_encode('logged_in');
		}
		else{
			echo json_encode('password_mismatch');
		}
	}
	else{
		echo json_encode('user_not_found');
	}
}

?>