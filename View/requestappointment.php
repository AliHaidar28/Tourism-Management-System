<?php include '../Controller/usercontroller.php'; ?>
<?php $docprof = getalldoctorprofile();?>

<html>
	<head>
	<title>Doctor_Dash</title>
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
		<div align="center">
				<form action="" method="post">
				ID: <input type="text" name="id" placeholder="Id">
				<br>	
				<br>				
				PatientName: <input type="text" name="name" value="<?php echo $_SESSION["loggedpatient"];?>"placeholder="PatientName">
				<br>
				<br>		
				DoctorName:<input type="text" name="dname" placeholder="DoctorName">
				<br>	
				<br>		
				Appoinment Date:<input type="date" name="aptdate" placeholder="Appoinment Date">
				<br>
				<br><input type="submit" name="submit"value="Reset">
				<br><input type="submit" name="bookappointment"value="Book Appoinment">
			    </form>
		<div>
		</div>
		<table width="50%" border="2">
		<tbody align="center">
			<tr>
			<td>ID</td>
			<td>Doctor Name</td>
			</tr>
			<?php
				foreach($docprof as $f){
					
					echo "<tr>";
						echo "<td>".$f["id"]."</td>";
						echo "<td>".$f["uname"]."</td>";
					echo "</tr>";
				}
			?>
			
		</tbody>
		</table>
	</body>
</html>