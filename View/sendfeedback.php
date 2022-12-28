<?php include ("../Controller/usercontroller.php") ?>

<html>
	<head>
	<title>Patient_Dash</title>
	<link rel="stylesheet" href="button and background.css">
	</head>
	<body class="bdy">
		<div align="center">
			<div align="center">
				<h1 class="font">Welcome <?php echo $_SESSION["loggedpatient"];?></a></h1>
			</div>
			<table border="0">
				<tr>
				<td><h4><a href="patientprofile.php" class="button">Profile</a></h4></td>
				<td></td>
				<td><h4><a href="requestappointment.php" class="button">Request For Appoinment</a></h4></td>
				<td></td>
				<td><h4><a href="prescription.php" class="button">Prescription</a></h4></td>
				<td></td>
				<td><h4><a href="sendfeedback.php" class="button">Send feedback</a></h4></td>
				<td></td>
				<td><h4><a href="logout.php" class="button">Logout</a></h4></td>
				<td></td>
				</tr>
			</table>
		</div>
		<form action="" method="post">
		<div align="center">
			Feedback:  
			<textarea name="feedback"><?php echo $feedback;?></textarea>
			<?php echo $err_feedback;?>
		<input type="submit" name="fback" value="Send Feedback">
		</div>
		</form>
	</body>
</html>