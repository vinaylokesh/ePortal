<?php
session_start();
include('login1.php'); // Includes Login Script
if(isset($_SESSION['login_admin'])){
header("location: home.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Organisation e-Portal</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="gray">
<div id="main">
<h1>Organisation e-Portal<h1>
<div id="login">
<h3>Login </h3>
<form action="" method="post">


<label>Username</label><input id="name" name="username" placeholder="username" type="text">
<label>Password</label>
<input id="password" name="password" placeholder="**********" type="password">

<input name="submit" type="submit" value="Login">

<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
