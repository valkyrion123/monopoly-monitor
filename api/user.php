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
	$output = array();

	$query = "SELECT id, pass FROM user WHERE name = '$name'";

	$result = $database->fetch_data($query);

	if(!empty($result)){
		if(password_verify($pass, $result[0]['pass'])){
			$output['message'] = 'logged_in';
			$output['id'] = $result[0]['id'];
		}
		else{
			$output['message'] ='password_mismatch';
		}
	}
	else{
		$output['message'] = 'user_not_found';
	}

	echo json_encode($output);
}

?>