<?php
session_start();
//enter database information before establishing connection.
$Database_Host = '127.0.0.1';
$Database_User = 'root';
$Database_Pass = '';
$Database_Name = 'phplogin';

//check to make sure connection can be established and send an error message if not able to connect.
$con= mysqli_connect($Database_Host, $Database_User, $Database_Pass, $Database_Name);
if (mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
//check to make sure that the textboxes are not empty
}

if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	// bind parameters (s = string, i = int, b = blob, etc), because the username is a string so we use "s".
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// store the result to check if the account exists in the database.
	$stmt->store_result();
}

//if the account exists in the database, retrieve the password and the id. 	
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
}

//if the password matches up to the one stored in the database, allow the user to log in 
//but if it does not match the one in the database send an error message.
if ($_POST['password'] === $password) {
	session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
	$_SESSION['name'] = $_POST['username'];
	$_SESSION['id'] = $id;
    header('Location: home.php');
} else {
	echo 'Incorrect username and/or password!';
	$stmt->close();
} 
?>