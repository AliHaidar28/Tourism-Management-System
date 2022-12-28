<?php
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$hasError="";
	$err_db="";
	session_start();
	 if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(empty($_POST["uname"])){
		    $err_uname = "Username Required";
			$hasError = true;
	    }
	    if(empty($_POST["pass"])){
		    $err_pass = "Password Required";
			$hasError = true;
	    }
		if(!$hasError)
		{
		if($_POST["uname"]=="admin" && $_POST["pass"]=="admin")
		{	
			$_SESSION["uname"]= $_POST["uname"];
			header("Location: admin.php");
	    }
		$err_db = "User Invalid";
		}
		
		if(!$hasError)
		{
		if($_POST["uname"]=="doctor" && $_POST["pass"]=="doctor")
		{	
			$_SESSION["uname"]= $_POST["uname"];
			header("Location: doctordashboard.php");
	    }
		$err_db = "User Invalid";
		}
		
		if(!$hasError)
		{	
		if($_POST["uname"]=="nurse" && $_POST["pass"]=="nurse")
		{	
			$_SESSION["uname"]= $_POST["uname"];
			header("Location: nursedashboard.php");
	    }
		$err_db = "User Invalid";
		}
		
		if(!$hasError)
		{
		if($_POST["uname"]=="patient" && $_POST["pass"]=="patient")
		{	
			$_SESSION["uname"]= $_POST["uname"];
			header("Location: patientdashboard.php");
	    }
		$err_db = "User Invalid";
		}
	 }
?>