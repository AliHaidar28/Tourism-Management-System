<?php
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$dept="";
	$err_dept="";
	$fee="";
	$err_fee="";
	$pro="";
	$err_pro="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	
	$err=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["id"])){
			$err_id="ID Required";
			$err=true;
		}
		else if(!is_numeric($_POST["id"])){
			$err_id="Not a number";
			$err=true;
		}
		else if(is_numeric($_POST["id"])){
			$id=$_POST["id"];
		}
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$err = true;
		}
		else if(strlen($_POST["name"])<=6){
			$err_name="Must be greater than 6";
			$err = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["dept"])){
			$err_dept="Department Required";
			$err=true;
		}
		else{
			$dept=$_POST["dept"];
		}
		if(empty($_POST["fee"])){
			$err_fee="Fees Required";
			$err=true;
		}
		else if(!is_numeric($_POST["fee"])){
			$err_fee="Not a number";
			$err=true;
		}
		else if(is_numeric($_POST["fee"])){
			$fee=$_POST["fee"];
		}
		if(empty($_POST["pro"])){
			$err_pro="Profile Required";
			$err=true;
		}
		else{
			$pro=$_POST["pro"];
		}
		if (!isset($_POST["day"])){
				$err_day="Day must be selected";
		}
		else{
			$day=$_POST["day"];
		}
		if (!isset($_POST["month"])){
			$err_month="Month must be selected";
		}
		else{
			$month=$_POST["month"];
		}
		if (!isset($_POST["year"])){
			$err_year="Year must be selected";
		}
		else{
			$year=$_POST["year"];
		}
	}
?>