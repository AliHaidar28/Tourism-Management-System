<?php include ("../Controller/usercontroller.php") ?>
<?php $doctor= $_SESSION["loggeddoctor"];
	  $docpres = getallprescription($doctor);?>
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
		<br>
		<div align="center">
		<form action="" method="post">		
				ID: <input type="text" name="id" placeholder="ID">
				<br>
				<br>			
				DoctorName: <input type="text" name="dname" value="<?php echo $_SESSION["loggeddoctor"];?>"placeholder="<?php echo $_SESSION["loggeddoctor"];?>">
				<br>
				<br>		
				PatientName:<input type="text" name="name" placeholder="PatientName">
				<br>	
				<br>		
				Prescription:<textarea name="prescription"><?php echo $prescription;?></textarea>
				<?php echo $err_prescription;?>
				<br>
				<br><input type="submit" name="crpres"value="Create Prescription ">
				<br><input type="submit" name="editpres"value="Edit Prescription ">
			    </form>
		</div>
		<div>
		<table width="100%" border="2">
			<tbody align="center">
			<tr>
			<td>Id</td>
			<td>Patient Name</td>
			<td>Prescription</td>
			</tr>
			<?php
				foreach($docpres as $f){
					
					echo "<tr>";
						echo "<td>".$f["id"]."</td>";
						echo "<td>".$f["patientname"]."</td>";
						echo "<td>".$f["prescription"]."</td>";
					echo "</tr>";
				}
			?>
			
		</tbody>
		</table>
		</div>
	</body>
</html>