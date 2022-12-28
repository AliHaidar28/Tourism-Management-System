<?php
	
	$name="";
	$err_name="";
	$email="";
	$err_email="";
	$number="";
	$err_number="";
	$gender="";
	$err_gender="";
	$terms=[];
	$err_terms="";
	
	$err=false;
	

	function Terms($terms){
		global $terms;
		foreach($terms as $t){
			if($t == $terms){
				return true;
			}
		}
		return false;
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$err = true;
		}
		else if(strlen($_POST["name"])<=1){
			$err_name="Must be greater than 1";
			$err = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(!strpos($_POST["email"],"@")){
			if(!strpos($_POST["email"],"."))
			$err_email="Email should contain '@' and '.' sequentially";
			}
		else {
			$email=$_POST["email"];
		}
		if(empty($_POST["number"])){
			$err_number="Number Required";
			$err = true;
		}
		else if(strlen($_POST["number"])>11){
			$err_number="Must be 11 numbers";
			$err = true;
		}
		else {
			$number = $_POST["number"]; 
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$err = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(!isset($_POST["terms"])){
			$err_terms="Terms Need to be Agreed";
			$err = true;
		}
		else{
			$terms = $_POST["terms"];
		}
		
	}
?>