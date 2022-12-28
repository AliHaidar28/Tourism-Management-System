<?php include '../Controller/usercontroller.php'; ?>
<?php  $docprof = getallappointments();?>
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
			<table align="center" border="0">
				<tr>
				<td><h4><a href="approvalnurse.php" class="button" >Request Approval</a></h4></td>
				<td></td>
				<td><h4><a href="nurseprofile.php" class="button">Profile</a></h4></td>
				<td></td>
				<td><h4><a href="appointmentlist2.php" class="button">Check Appointment</a></h4></td>
				<td></td>
				<td><h4><a href="patientlistfornurse.php" class="button">Patient List</a></h4></td>
				<td></td>
			    <td><h4><a href="patientreports.php" class="button">See Patient Reports</a></h4></td>
				<td></td>
				<td><h4><a href="logout.php" class="button">Logout</a></h4></td>
				<td></td>
				</tr>
			</table>	
		</div>
		<div class="center">
		<table align="center">
		<h3 class="font" align="center">All Appoinment</h3>
		<table width="100%" border="2">
		<tbody align="center">
			<tr>
			<td>Id</td>
			<td>Patient Name</td>
			<td>Appoinment Date</td>
			</tr>
			<?php
				foreach($docprof as $f){
					
					echo "<tr>";
						echo "<td>".$f["id"]."</td>";
						echo "<td>".$f["patientname"]."</td>";
						echo "<td>".$f["appointmentdate"]."</td>";
					echo "</tr>";
				}
			?>
			
		</tbody>
		</table>
		</table>
		</div>
	</body>
</html>
