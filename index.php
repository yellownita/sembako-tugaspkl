
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	
<headerr>

<a href="#" class="logo">Toko Sembako</a>

<div id="menu-bar" class="fas fa-bars"></div>

<nav class="navbar">
	<a href="#home">Home</a>
	<a href="#peoples">About </a>
	<a href="#family"> Family</a>
	<a href="#blog">Whats?</a>
</nav>

</headerr>

	

     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <label>Email</label>
     	<input type="email" name="email" placeholder="Email"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

        

     	 <button type="submit">Login</button>

          <a href="signup.php">Create an account</a>
     </form>
	</headerr>
</body>
</html>
