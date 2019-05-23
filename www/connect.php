<?php

$username = filter_input(INPUT_POST,'username');
$password = filter_input(INPUT_POST,'password');
if(!empty($username)){
	if(!empty($password)){
		$host = "localhost";
		$dbusername = "daiyuchi";
		$dbuserpass = "Dai12345";
		$dbname = "USER";

		//connect
		$conn = new mysqli($host,$dbusername,$dbuserpass,$dbname);
		if(mysqli_connect_error()){
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_erro());

		}else{
		echo "successful connect!";
		
		}
	
	}else{
		echo "Password should not be empty";
		die();
	}

}else{
	echo "Username should not be empty~";
	die();
}


?>
