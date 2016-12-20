<?php 
include_once('database.php');

$database = new DB();

function get_user($db){
	$query = "SELECT * FROM user";

	$result = $db->execute_query($query);

	return json_encode($result);
}
?>