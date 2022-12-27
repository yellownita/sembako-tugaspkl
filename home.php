<?php 
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
     <h1>Your email, <?php echo $_SESSION['email']; ?> has been login </h1>
     <a href="barang.php">Melihat Barang</a>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: indexlogin.php");
  exit();
}
?>