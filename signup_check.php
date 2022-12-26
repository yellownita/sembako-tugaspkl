<?php 
session_start(); 
include "connect.php";

if (isset($_POST['name']) && isset($_POST['uname']) && isset($_POST['email'])&& isset($_POST['whatsapp'])
    && isset($_POST['password']) && isset($_POST['re_password'])) {

	function validate($data){                                                                                                                                                                                                     
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$uname = validate($_POST['uname']);
	$email = validate($_POST['email']);
	$whatsapp = validate($_POST['whatsapp']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);

	$user = '&email='. $email. '&password='. $password;
// hps

	if (empty($name)) {
		header("Location: signup.php?error=Name is required& $user");
	    exit();
	}
		else if (empty($uname)) {
			header("Location: signup.php?error=Username is required& $user");
			exit();

	}else if(empty($email)){
        header("Location: signup.php?error=Email is required& $user");
	    exit();}
		
		else if(empty($whatsapp)){
			header("Location: signup.php?error=Whatsapp is required& $user");
			exit();
	}
	else if(empty($pass)){
        header("Location: signup.php?error=Password is required& $user");
	    exit();
	}

	else if(empty($re_pass)){
        header("Location: signup.php?error=Re_password is required& $user");
	    exit();
	}


	// hps
	

		// hashing the password
        // enkripsi password
	    # $password = password_hash($pass, PASSWORD_DEFAULT);

	    $sql = "SELECT * FROM user WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=The username is taken try another& $user");
	        exit();
		}else {
           $sql2 = "INSERT INTO `user` (`id_user`, `name`, `username`, `email`, `whatsaap`, `password`) VALUES (NULL, '$name', '$uname', '$email', '$whatsapp', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred& $user");
		        exit();
           }
		}
	}
	
else{
	header("Location: index.php");
	exit();
}