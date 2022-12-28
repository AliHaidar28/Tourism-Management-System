<?php include '../Controller/usercontroller.php'; ?>
<?php $doctor= $_SESSION["loggeddoctor"];
	  $docprof = getdoctorstatus($doctor);?>
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
		<form action="" method="post">			
		<div align="center">
		<h4>Status:<table align="center" border="0">
					<tbody align="center" class="font">
					<?php
							foreach($docprof as $df){
							echo "<tr>";
							echo "<td>" .$df["status"]."</td>";
							echo "</tr>";
							}
					?>
					</tbody>
					</table>
		</h4>
		<input type="submit" name="approvedoc" value="Request Approval">
		</div>
		</form>
		</div>	
	</body>
</html>