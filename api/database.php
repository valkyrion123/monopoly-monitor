<?php 
//Put all related database config and call here

class DB{
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "monopoly";

	function fetch_data($query){
		$array_result = array();
		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

		if (!$conn) {
			return("Connection failed: " . mysqli_connect_error());
		}

		$result = mysqli_query($conn, $query);

		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				array_push($array_result, $row);
			}
		} else {
			return "0 results";
		}

		mysqli_close($conn);

		return $array_result;
	}

	function exec_query($query){
		$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

		if (!$conn) {
			return("Connection failed: " . mysqli_connect_error());
		}

		$result = mysqli_query($conn, $query);

		mysqli_close($conn);
	}
}
?>