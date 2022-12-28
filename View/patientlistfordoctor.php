<?php include '../Controller/usercontroller.php'; ?>
<?php $patprof = getallpatientprofile();?>
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
		</div>
		<br>
		<div class="center">
		<table align="center">
		<table width="100%" border="2">
		<tbody align="center">
			<tr>
			<td>Id</td>
			<td>Username</td>
			<td>First Name</td>
			<td>Last Name</td>
			<td>Gender</td>
			<td>Address</td>
			</tr>
			<?php
				foreach($patprof as $f){
					
					echo "<tr>";
						echo "<td>".$f["id"]."</td>";
						echo "<td>".$f["uname"]."</td>";
						echo "<td>".$f["fname"]."</td>";
						echo "<td>".$f["lname"]."</td>";
						echo "<td>".$f["gender"]."</td>";
						echo "<td>".$f["address"]."</td>";
					echo "</tr>";
				}
			?>
			
		</tbody>
		</table>
		</table>
		</div>
	</body>
</html>