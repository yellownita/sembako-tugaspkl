<?php
	 session_start();
	 if (isset($_SESSION["login"])){
		 header("Location: home.php");
	 }
?>
<!DOCTYPE html>
<?php  
	require 'connect.php';

	if( isset($_POST["login"]) ) {

		$email = $_POST["email"];
		$password = $_POST["password"];
		$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
	
		// cek username
		if( mysqli_num_rows($result) === 1 ) {
			// cek password
			$row = mysqli_fetch_assoc($result);
			if( password_verify($password, $row['password']) ) {
				header("Location: home.php");
				exit;
			}

		}
	
		$error = false ;
	
	}
	
?>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>

<h1>Halaman Login</h1>

<!-- <?php #if( isset($error) ) : ?>
	<p style="color: red; font-style: italic;">email / password salah</p>
<?php #endif; ?> -->

<form action="" method="post">

	<ul>
		<li>
			<label for="email">Email :</label>
			<input type="email" name="email" id="email">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="login">Login</button>
		</li>
		<li>
			<a href="signup.php">Registrasi</a>
		</li>
	</ul>
	
</form>
</body>
</html>