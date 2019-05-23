<!--https://www.youtube.com/watch?v=OWNxUVnY3pg-->
<?php 
	$servername = "localhost";
	$username = "daiyuchi";
	$password = "Dai12345";
	$dbname = "USER";
// CREATE CONNETION
	$conn = new mysqli($servername, $username, $password, $dbname);
// CHECK CONNECTION
	if($conn->connect_error){
		die("failed~".$conn->connect_error);
	}
	$sql = "SELECT * FROM usertable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
    echo "ID: ".$row['ID']. " username: ".$row['user'];
    }
} else {
    echo "0 结果";
}
$conn->close();
?>


<html>
<head>
	<title>Login Form Design</title>
	<link rel="stylesheet" type="text/css" href = "style.css">
</head>
<body>
	<div class = "loginbox">
		<img src="user.png" class="avatar">
		<h1>Login Here</h1>
		<form method="post" action="connect.php">
		<p>Username</p>
		<input type="text" name="username" placeholder="Enter Username">
		<p>Passward</p>
		<input type="password" name="password" placeholder = "Enter Password">
		<input type="submit" name = "" value="Login"><br>
		<a href= "#">Lost your password</a><br>
		<a href= "#">Don't have an account</a><br>
		<a href="http://163.13.22.125/POSS107G07">reference</a>
		</form> 

	</div>


</body>
</html>
