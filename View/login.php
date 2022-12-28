<?php //include("../Controller/logincn.php")?>
<?php include ("../Controller/usercontroller.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP Session</title>

</head>
<style>
body {
  background-image: url('Medical.jpg');
}
<body>
	<?php include('../Controller/navbar.php');?>
	<h1> Login Page</h1>
	<hr>
	<fieldset>
		<legend>Login Form</legend>
		<form action="" method="post">
		<span><?php echo $err_db?></span>
		<p><input type="text" name="uname" placeholder="User Name"><span><?php echo $err_uname?></span></p>
		<p><input type="password" name="pass" placeholder="Password"><span><?php echo $err_pass?></span></p>
		
			
		<input type="submit" name="submit" value="Login">
		
	</form>
	</fieldset>
	Haven't signed up yet?<a href="signup.php">Sign Up </a>
</body>
</html>