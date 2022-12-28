<?php	
	
	$fname="";
	$err_fname="";
	$lname="";
	$err_lname="";
	$gender="";
	$err_gender="";
	$address="";
	$err_address="";
	$err="";
	
	 if(isset($_POST["docprofile"])){
		if(empty($_POST["fname"])){
		    $err_fname = "First Name Required";
			$hasError = true;
	    }
		else{
		    $fname = $_POST["fname"];
	    }
		if(empty($_POST["lname"])){
		    $err_lname = "Last Name Required";
			$hasError = true;
	    }
		else{
		    $lname = $_POST["lname"];
	    }
		
		if(!isset($_POST["gender"])){
			$err_gender = "Gender Required";
		}
		else{
			$gender = $_POST["gender"];
			if ($gender == "Male"){
				$Mchecked = "checked";
			}
			else if ($gender == "Female"){
				$Fchecked = "checked";
			}
		}

		if(empty($_POST["address"])){
		    $err_address = "Address Required";
			$hasError = true;
	    }
		else{
		    $address = $_POST["address"];
	    }
		
	}
?>