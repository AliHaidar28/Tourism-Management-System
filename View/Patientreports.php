<?php include ("../Controller/usercontroller.php") ?>
<?php $docpres = getallprescriptionn();?>
<html>
	<head>
	<title>Nurse_Dash</title>
	<link rel="stylesheet" href="button and background.css">
	</head>
	<body class="bdy">
		<div align="center">
			<div align="center">
				<h1 class="font">Welcome <?php echo $_SESSION["loggednurse"];?></a></h1>
			</div>
			<table border="0">
				<tr>
				<td><h4><a href="approvalnurse.php" class="button" >Request Approval</a></h4></td>
				<td></td>
				<td><h4><a href="nurseprofile.php" class="button">Profile</a></h4></td>
				<td></td>
				<td><h4><a href="appointmentlist2.php" class="button">Check Appointment</a></h4></td>
				<td></td>
				<td><h4><a href="patientlistfornurse.php" class="button">Patient List</a></h4></td>
				<td></td>
			    <td><h4><a href="Patientreports.php" class="button">See Patient Reports</a></h4></td>
				<td></td>
				<td><h4><a href="logout.php" class="button">Logout</a></h4></td>
				<td></td>
				</tr>
			</table>	
		</div>
		<table width="100%" border="2">
			<tbody align="center">
			<tr>
			<td colspan="4">Prescription</td>
			</tr>
			<tr>
			<td>ID</td>
			<td>Patient Name</td>
			<td>Doctor Name</td>
			<td>Prescription</td>
			</tr>
			<?php
				foreach($docpres as $f){
					
					echo "<tr>";
						echo "<td>".$f["id"]."</td>";
						echo "<td>".$f["patientname"]."</td>";
						echo "<td>".$f["doctorname"]."</td>";
						echo "<td>".$f["prescription"]."</td>";
					echo "</tr>";
				}
			?>
			
		</tbody>
		</table>
	</body>
</html>