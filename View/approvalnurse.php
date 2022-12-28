<?php include '../Controller/usercontroller.php'; ?>
<?php $nurse= $_SESSION["loggednurse"];
	  $docprof = getnursestatus($nurse);?>
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
			    <td><h4><a href="patientreports.php" class="button">See Patient Reports</a></h4></td>
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
		<input type="submit" name="approvenurse" value="Request Approval">
		</div>
		</form>
		</div>	
	</body>
</html>