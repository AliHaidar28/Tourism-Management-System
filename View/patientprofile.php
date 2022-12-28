<?php include '../Controller/usercontroller.php'; ?>
<?php $patient= $_SESSION["loggedpatient"];
	  $patprof = getpatientprofile($patient);?>

<html>
	<head>
	<title>Doctor_Dash</title>
	<link rel="stylesheet" href="button and background.css">
	</head>
	<body class="bdy">
		<div align="center">
			<div align="center">
				<h1 class="font"><?php echo $_SESSION["loggedpatient"];?>'s Info</a></h1>
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
			
			<form action="" method="post">
			<table border="0">
					<tr>
						<td>UserName: </td>
						<td><input type="text" value="<?php echo $_SESSION["loggedpatient"];?>"placeholder="<?php echo $_SESSION["loggedpatient"];?>"></td>
					</tr>
					<tr>
						<td>Firts Name: </td>
						<td><input type="text" name="fname" value="<?php echo $fname;?>" placeholder="First Name"></td>
						<td><span id="err_fname"><?php echo $err_fname;?></span></td>

					</tr>
					<tr>
						<td>Last Name: </td>
						<td><input type="text" name="lname" value="<?php echo $lname;?>" placeholder="Last Name"></td>
						<td><span id="err_lname"><?php echo $err_lname;?></span></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male 
							<input type="radio" value="Female" <?php if($gender == "Female") echo "checked";?> id="Female"  name="gender"> Female</td>
						<td><span id="err_gender"><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td>Address:  </td>
						<td>
							<textarea name="address"><?php echo $address;?></textarea>
						</td>
						<td><?php echo $err_address;?></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" name="patientprofile" value="Register"></td>
					</tr>
				</table>
			</form>
		</div>
		<div align="center">
		<table align="center" border="0">
		<tbody align="center" class="font">
			<?php
				$i=1;
				foreach($patprof as $df){
					echo "<tr>";
						echo "<td>"."First Name"."</td>";
						echo "<td>" .$df["fname"]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>"."Last Name"."</td>";
						echo "<td>" .$df["lname"]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>"."Gender"."</td>";
						echo "<td>" .$df["gender"]."</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>"."Address"."</td>";
						echo "<td>" .$df["address"]."</td>";
						echo "</tr>";
						echo "<tr>";
					echo "</tr>";
					$i++;
				}
			?>
			
			
		</tbody>
		</table>
		</div>
	</body>
</html>