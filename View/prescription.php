<?php include ("../Controller/usercontroller.php") ?>
<?php $patient= $_SESSION["loggedpatient"];
	  $docpres = getallprescriptionp($patient);?>
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
			</table>
		</div>
		<div>
		<table width="100%" border="0">
			<tbody align="center">
			<tr>
			<td>Prescription</td>
			</tr>
			<?php
				foreach($docpres as $f){
					
					echo "<tr>";
						echo "<td>".$f["prescription"]."</td>";
					echo "</tr>";
				}
			?>
			
		</tbody>
		</table>
		</div>
	</body>
</html>