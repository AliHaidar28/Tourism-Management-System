<?php 
session_start();
session_destroy();

?>
<?php include('../Controller/navbar.php');
echo"<hr>";
//echo "<h1> Logged out </h1";
header('location:home.php');
?>