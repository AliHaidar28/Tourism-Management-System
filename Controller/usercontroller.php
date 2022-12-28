<?php
    include ("../Models/dbconfig.php");
	session_start();
    $name="";
    $err_name="";
	$dname="";
    $err_dname="";
	$aptdate="";
    $err_aptdate="";
    $uname="";
    $err_uname="";
	$email="";
    $err_email="";
    $pass="";
    $err_pass="";
	$type="";
    $err_type="";
	$id="";
    $err_id="";
	$fname="";
	$err_fname="";
	$lname="";
	$err_lname="";
	$gender="";
	$err_gender="";
	$address="";
	$err_address="";
	$err_db="";
	$hasError = false;
	$Mchecked = "";
	$Fchecked = "";
	$feedback = "";
	$err_feedback="";
	$prescription="";
	$err_prescription="";
	
    if(isset($_POST["signup"])){
		if(empty($_POST["name"])){
		    $err_name = "Name Required";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "Username Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["email"])){
		    $err_email = "Email Required";
			$hasError = true;
	    }
		else{
		    $email = $_POST["email"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Required";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(empty($_POST["type"])){
		    $err_type = "Input Either doctor,patient or receptionist";
			$hasError = true;
	    }
		else{
		    $type = $_POST["type"];
	    }
		if(!$hasError){
			$rs = insertUser($name,$uname,$email,$pass,$type);
			if($rs === true){
				header("Location: login.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	else if(isset($_POST["submit"])){
		
		if(empty($_POST["uname"])){
		    $err_uname = "Username Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
		if(empty($_POST["pass"])){
		    $err_pass = "Password Required";
			$hasError = true;
	    }
		else{
		    $pass = $_POST["pass"];
	    }
		if(!$hasError){
			if(authenticateAdmin($uname,$pass)){
				$_SESSION["loggedadmin"]= $uname;
				header("Location: admin.php");
			}
			$err_db = "User Invalid";
		}
		if(!$hasError){
			if(authenticateDoctor($uname,$pass)){
				$_SESSION["loggeddoctor"]= $uname;
				header("Location: doctordashboard.php");
			}
			$err_db = "User Invalid";
		}
		if(!$hasError){
			if(authenticateReceptionist($uname,$pass)){
				$_SESSION["loggednurse"]= $uname;
				header("Location: nursedashboard.php");
			}
			$err_db = "User Invalid";
		}
		if(!$hasError){
			if(authenticatePatient($uname,$pass)){
				$_SESSION["loggedpatient"]= $uname;
				header("Location: patientdashboard.php");
			}
			$err_db = "User Invalid";
		}
	}
	
	else if(isset($_POST["docprofile"])){
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
		if(!$hasError){
			$d= $_SESSION["loggeddoctor"];
			
			$rs = doctorProfile($d,$fname,$lname,$gender,$address);
			if($rs === true){
				header("Location: doctordashboard.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	else if(isset($_POST["nurseprofile"])){
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
		if(!$hasError){
			$d= $_SESSION["loggednurse"];
			
			$rs = nurseProfile($d,$fname,$lname,$gender,$address);
			if($rs === true){
				header("Location: nursedashboard.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	else if(isset($_POST["patientprofile"])){
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
		if(!$hasError){
			$d= $_SESSION["loggedpatient"];
			
			$rs = patientProfile($d,$fname,$lname,$gender,$address);
			if($rs === true){
				header("Location: patientdashboard.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	else if(isset($_POST["AddDoctor"])){
		if(empty($_POST["id"])){
		    $err_id = "ID Required";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "User Name Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
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
		if(!$hasError){	
			$rs = adddoctor($id,$uname,$fname,$lname,$gender,$address);
			if($rs === true){
				header("Location: doctor.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	else if(isset($_POST["EditDoctor"])){
		if(empty($_POST["id"])){
		    $err_id = "ID Required";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "User Name Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
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
		if(!$hasError){	
			$rs = editdoctor($id,$uname,$fname,$lname,$gender,$address);
			if($rs === true){
				header("Location: doctor.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	else if(isset($_POST["AddNurse"])){
		if(empty($_POST["id"])){
		    $err_id = "ID Required";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "User Name Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
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
		if(!$hasError){	
			$rs = addnurse($id,$uname,$fname,$lname,$gender,$address);
			if($rs === true){
				header("Location: nurse.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	else if(isset($_POST["EditNurse"])){
		if(empty($_POST["id"])){
		    $err_id = "ID Required";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "User Name Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
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
		if(!$hasError){	
			$rs = editnurse($id,$uname,$fname,$lname,$gender,$address);
			if($rs === true){
				header("Location: nurse.php");
			}
			$err_db = "Input Unique Values";
		}
	}

	else if(isset($_POST["AddPatient"])){
		if(empty($_POST["id"])){
		    $err_id = "ID Required";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "User Name Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
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
		if(!$hasError){	
			$rs = addpatient($id,$uname,$fname,$lname,$gender,$address);
			if($rs === true){
				header("Location: patientlist.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	else if(isset($_POST["EditPatient"])){
		if(empty($_POST["id"])){
		    $err_id = "ID Required";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		if(empty($_POST["uname"])){
		    $err_uname = "User Name Required";
			$hasError = true;
	    }
		else{
		    $uname = $_POST["uname"];
	    }
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
		if(!$hasError){	
			$rs = editpatient($id,$uname,$fname,$lname,$gender,$address);
			if($rs === true){
				header("Location: patientlist.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	else if(isset($_POST["fback"])){
		if(empty($_POST["feedback"])){
		    $err_feedback = "Feedback Required";
			$hasError = true;
	    }
		else{
		    $feedback = $_POST["feedback"];
	    }
		if(!$hasError){
			$p= $_SESSION["loggedpatient"];
			
			$rs = sendfback($p,$feedback);
			if($rs === true){
				header("Location: patientdashboard.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	else if(isset($_POST["approvedoc"])){
			$p= $_SESSION["loggeddoctor"];
			
			$rs = approvedoc($p);
			if($rs === true){
			header("Location: doctordashboard.php");
			}
	}
	
	else if(isset($_POST["approvenurse"])){
			$p= $_SESSION["loggednurse"];
			
			$rs = approvenurse($p);
			if($rs === true){
			header("Location: nursedashboard.php");
			}
	}
	
	else if(isset($_POST["adminapprovedoc"])){
			$id = $_POST["id"];
			$rs = adminapprovedoc($id);
			if($rs === true){
			header("Location: doctorreq.php");
			}
	}
	
	else if(isset($_POST["adminapprovenurse"])){
			$id = $_POST["id"];
			$rs = adminapprovenurse($id);
			if($rs === true){
			header("Location: nursereq.php");
			}
	}
	
	if(isset($_POST["DeleteDoctor"])){
		$id = $_POST["id"];
		$rs = deletedoc($id);
		if($rs === true){
				header("Location: doctor.php");
			}
		
	}
	
	if(isset($_POST["DeleteNurse"])){
		$id = $_POST["id"];
		$rs = deletenurse($id);
		if($rs === true){
				header("Location: nurse.php");
			}
		
	}
	
	if(isset($_POST["DeletePatient"])){
		$id = $_POST["id"];
		$rs = deletepatient($id);
		if($rs === true){
				header("Location: patientlist.php");
			}
		
	}
	
	if(isset($_POST["delfback"])){
		$id = $_POST["id"];
		$rs = deletefback($id);
		if($rs === true){
				header("Location: feedback.php");
			}
	}
	
	else if(isset($_POST["bookappointment"])){
		if(empty($_POST["name"])){
		    $err_name = "Patient Name Required";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["dname"])){
		    $err_dname = "Doctor Name Required";
			$hasError = true;
	    }
		else{
		    $dname = $_POST["dname"];
	    }
		if(empty($_POST["aptdate"])){
		    $err_aptdate = "Date Required";
			$hasError = true;
	    }
		else{
		    $aptdate = $_POST["aptdate"];
	    }
		
		if(!$hasError){	
			$rs = bookappointment($dname,$aptdate,$name);
			if($rs === true){
				header("Location: patientdashboard.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	else if(isset($_POST["EditList"])){
		if(empty($_POST["id"])){
		    $err_id = "ID Required";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		if(empty($_POST["date"])){
		    $err_aptdate = "Date Required";
			$hasError = true;
	    }
		else{
		    $aptdate = $_POST["date"];
	    }
		if(!$hasError){	
			$rs = editlist($id,$aptdate);
			if($rs === true){
				header("Location: appointmentlist.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	if(isset($_POST["DeleteList"])){
		$id = $_POST["id"];
		$rs = deletelist($id);
		if($rs === true){
				header("Location: appointmentlist.php");
			}
		
	}
	
	else if(isset($_POST["crpres"])){
		if(empty($_POST["dname"])){
		    $err_dname = "Doctor Name Required";
			$hasError = true;
	    }
		else{
		    $dname = $_POST["dname"];
	    }
		if(empty($_POST["name"])){
		    $err_name = "Patient Name Required";
			$hasError = true;
	    }
		else{
		    $name = $_POST["name"];
	    }
		if(empty($_POST["prescription"])){
		    $err_prescription = "Date Required";
			$hasError = true;
	    }
		else{
		    $prescription = $_POST["prescription"];
	    }
		
		if(!$hasError){	
			$rs = crpres($dname,$name,$prescription);
			if($rs === true){
				header("Location: prescription2.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	else if(isset($_POST["editpres"])){
		if(empty($_POST["id"])){
		    $err_id = "ID Required";
			$hasError = true;
	    }
		else{
		    $id = $_POST["id"];
	    }
		if(empty($_POST["prescription"])){
		    $err_prescription = "Date Required";
			$hasError = true;
	    }
		else{
		    $prescription = $_POST["prescription"];
	    }
		
		if(!$hasError){	
			$rs = editpres($id,$prescription);
			if($rs === true){
				header("Location: prescription2.php");
			}
			$err_db = "Input Unique Values";
		}
	}
	
	if(isset($_POST["SearchDoctor"])){
		$uname = $_POST["uname"];
		$rs = searchdoctor($uname);
		if($rs === true){
				header("Location: doctor.php");
			}
		
	}
	
	
	function insertUser($name,$uname,$email,$pass,$type){
		$query = "insert into userlogin values (NULL,'$name','$uname','$email','$pass','$type')";
		return execute($query);
	}
	function doctorProfile($d,$fname,$lname,$gender,$address){
		$query = "insert into doctorprofile values (NULL,'$d','$fname','$lname','$gender','$address')";
		return execute($query);
	}
	function nurseProfile($d,$fname,$lname,$gender,$address){
		$query = "insert into nurseprofile values (NULL,'$d','$fname','$lname','$gender','$address')";
		return execute($query);
	}
	function patientProfile($d,$fname,$lname,$gender,$address){
		$query = "insert into patientprofile values (NULL,'$d','$fname','$lname','$gender','$address')";
		return execute($query);
	}
	function adddoctor($id,$uname,$fname,$lname,$gender,$address){
		$query = "insert into doctorprofile values ('$id','$uname','$fname','$lname','$gender','$address')";
		return execute($query);
	}
	function editdoctor($id,$uname,$fname,$lname,$gender,$address){
		$query = "update doctorprofile set uname='$uname',fname='$fname',lname='$lname',gender='$gender',address='$address' where id='$id'";
		return execute($query);
	}
	function deletedoc($id){
		$query = "delete from doctorprofile where id='$id'";
		return execute($query);
	}
	function searchdoctor($uname){
		$query = "select * from doctorprofile where uname like '%{$uname}%' ";
		return execute($query);
	}
	function addnurse($id,$uname,$fname,$lname,$gender,$address){
		$query = "insert into nurseprofile values ('$id','$uname','$fname','$lname','$gender','$address')";
		return execute($query);
	}
	function editnurse($id,$uname,$fname,$lname,$gender,$address){
		$query = "update nurseprofile set uname='$uname',fname='$fname',lname='$lname',gender='$gender',address='$address' where id='$id'";
		return execute($query);
	}
	function deletenurse($id){
		$query = "delete from nurseprofile where id='$id'";
		return execute($query);
	}
	function addpatient($id,$uname,$fname,$lname,$gender,$address){
		$query = "insert into patientprofile values ('$id','$uname','$fname','$lname','$gender','$address')";
		return execute($query);
	}
	function editpatient($id,$uname,$fname,$lname,$gender,$address){
		$query = "update patientprofile set uname='$uname',fname='$fname',lname='$lname',gender='$gender',address='$address' where id='$id'";
		return execute($query);
	}
	function deletepatient($id){
		$query = "delete from patientprofile where id='$id'";
		return execute($query);
	}
	function bookappointment($dname,$aptdate,$name){
		$query = "insert into appointmentlist values (NULL,'$dname','$aptdate','$name')";
		return execute($query);
	}
	function editlist($id,$aptdate){
		$query = "update appointmentlist set appointmentdate='$aptdate' where id='$id'";
		return execute($query);	
	}
	function deletelist($id){
		$query = "delete from appointmentlist where id='$id'";
		return execute($query);
	}
	function crpres($dname,$name,$prescription){
		$query = "insert into prescription values (NULL,'$dname','$name','$prescription')";
		return execute($query);
	}
	function editpres($id,$prescription){
		$query = "update prescription set prescription='$prescription' where id='$id'";
		return execute($query);
	}
	function sendfback($p,$feedback){
		$query = "insert into feedback values (NULL,'$p','$feedback')";
		return execute($query);
	}
	function approvedoc($p){
		$query = "insert into approvedoc values (NULL,'$p','Not Approved')";
		return execute($query);
	}
	function adminapprovedoc($id){
		$query = "update approvedoc set status='Approved' where id='$id'";
		return execute($query);
	}
	function approvenurse($p){
		$query = "insert into approvenurse values (NULL,'$p','Not Approved')";
		return execute($query);
	}
	function adminapprovenurse($id){
		$query = "update approvenurse set status='Approved' where id='$id'";
		return execute($query);
	}
	function authenticateAdmin($uname,$pass){
		$query = "select * from adminlogin where adminname='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticateDoctor($uname,$pass){
		$query = "select * from userlogin where username='$uname' and password='$pass' and type='doctor'"  ;
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticateReceptionist($uname,$pass){
		$query = "select * from userlogin where username='$uname' and password='$pass' and type='nurse'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function authenticatePatient($uname,$pass){
		$query = "select * from userlogin where username='$uname' and password='$pass' and type='patient'";
		$rs = get($query);
		if(count($rs)>0){
			return true;
		}
		return false;
	}
	function getalldoctor(){
		$query = "select * from userlogin where type='doctor'";
		$rs = get($query);
		return $rs;
	}
	function getallnurse(){
		$query = "select * from userlogin where type='nurse'";
		$rs = get($query);
		return $rs;
	}
	function getallpatient(){
		$query = "select * from userlogin where type='patient'";
		$rs = get($query);
		return $rs;
	}
	function getalldoctorreq(){
		$query = "select * from approvedoc";
		$rs = get($query);
		return $rs;
	}
	function getallnursereq(){
		$query = "select * from approvenurse";
		$rs = get($query);
		return $rs;
	}
	function getallappointment($doctor){
		$query = "select * from appointmentlist where doctorname='$doctor'";
		$rs = get($query);
		return $rs;
	}
	function getallappointments(){
		$query = "select * from appointmentlist";
		$rs = get($query);
		return $rs;
	}
	function getallfeedback(){
		$query = "select * from feedback";
		$rs = get($query);
		return $rs;
	}
	function getalldoctorprofile(){
		$query = "select * from doctorprofile";
		$rs = get($query);
		return $rs;
	}
	function getallnurseprofile(){
		$query = "select * from nurseprofile";
		$rs = get($query);
		return $rs;
	}
	function getallpatientprofile(){
		$query = "select * from patientprofile";
		$rs = get($query);
		return $rs;
	}
	function getallprescriptionn(){
		$query = "select * from prescription";
		$rs = get($query);
		return $rs;
	}
	function getallprescriptionp($patient){
		$query = "select * from prescription where patientname='$patient'";
		$rs = get($query);
		return $rs;
	}
	function getallprescription($doctor){
		$query = "select * from prescription where doctorname='$doctor'";
		$rs = get($query);
		return $rs;
	}
	function getdoctorprofile($doctor){
		$query = "select * from doctorprofile where uname='$doctor'";
		$rs = get($query);
		return $rs;
	}
	function getdoctorstatus($doctor){
		$query = "select * from approvedoc where uname='$doctor'";
		$rs = get($query);
		return $rs;
	}
	function getnurseprofile($nurse){
		$query = "select * from nurseprofile where uname='$nurse'";
		$rs = get($query);
		return $rs;
	}
	function getnursestatus($nurse){
		$query = "select * from approvenurse where uname='$nurse'";
		$rs = get($query);
		return $rs;
	}
	function getpatientprofile($patient){
		$query = "select * from patientprofile where uname='$patient'";
		$rs = get($query);
		return $rs;
	}
	
	function deletefback($id){
		$query = "delete from feedback where id='$id'";
		return execute($query);
	}
	//update doctorprofile set fname=,lname`='[value-4]',`gender`='[value-5]',`address`='[value-6]' WHERE uname='$doctorname'
?>