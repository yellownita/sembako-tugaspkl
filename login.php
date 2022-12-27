<?php 
session_start(); 
include "connect.php";
// 


// /* PROSES LOGIN */
// if(isset($_POST['submit'])) {
// 	$email = $_POST['email'];
// 	$pass = md5($_POST['password']);
// 	$sql_login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$pass'");

// 	if(mysqli_num_rows($sql_login)>0) {
// 		$row_akun = mysqli_fetch_array($sql_login);
// 		$_SESSION['id_user'] = $row_akun['id'];
// 		$_SESSION['username'] = $row_akun['username'];
// 		header("location: indexlogin.php");
// 	}else {
// 		header("location: indexlogin.php?login-gagal");
// 	}
// }


// 
if (isset($_POST['email']) && isset($_POST['password'])) {

	// $pass = md5($_POST['password']);
	// $data = mysqli_query($conn,"SELECT * FROM  user WHERE email='$email' and password='$pass'");

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: indexlogin.php?error= Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: indexlogin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['password'] = $row['password'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: indexlogin.php?error=Incorect email or password");
		        exit();
			}
		}else{
			header("Location: indexlogin.php?error=Incorect email or password");
	        exit();
		}
	}
	
}else{
	header("Location: indexlogin.php");
	exit();
}