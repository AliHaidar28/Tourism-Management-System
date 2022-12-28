<?php include("../Controller/logincn.php")?>
<html>
	<head>
	<title>Doctor_Dash</title>
	<link rel="stylesheet" href="button and background.css">
	</head>
	<body class="bdy">
		<div align="center">
			<div align="center">
				<h1 class="font">Welcome <?php echo $_SESSION["loggeddoctor"];?></a></h1>
			</div>
			<table border="0">
				<tr>
				<td><h4><a href="approval.php" class="button" >Request Approval</a></h4></td>
				<td></td>
				<td><h4><a href="doctorprofile.php" class="button">Profile</a></h4></td>
				<td></td>
				<td><h4><a href="appointmentlist1.php" class="button">Appointment List</a></h4></td>
				<td></td>
				<td><h4><a href="patientlistfordoctor.php" class="button">Patient List</a></h4></td>
				<td></td>
				<td><h4><a href="prescription2.php" class="button">Prescription</a></h4></td>
				<td></td>
				<td><h4><a href="logout.php" class="button">Logout</a></h4></td>
				<td></td>
				</tr>
			</table>
		</div>
	</body>
</html>