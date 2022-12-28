<?php include '../Controller/usercontroller.php'; ?>
<?php $patprof = getallpatientprofile();?>
<html>
	<head>
	<title>Patient</title>
	<style>
body {
  background-color: hsla(89, 43%, 51%, 0.3);
}

h1 {
  color: black;
  margin-left: 40px;
} 
</style>
	</head>
	
	<body>
		<div style="border:1px solid black">
			<a href ="admin.php">Back</a></h5>
			<h1 align="center">Patient</h1>
		</div>
		<br>
		<div style="border:1px solid black">
		<h2 align="left">Patient details</h2>
		</div>
		<br>
		<div align ="center">
			<fieldset>
				<form action="" method="post">
				<table>
					<tr>
						<td align="right">ID: </td>
						<td><input type="text" name="id" value="<?php echo $id;?>" placeholder="Id"></td>
						<td><span><?php echo $err_id;?></span></td>
					</tr>
					<tr>
						<td>User Name: </td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="User Name"></td>
						<td><span id="err_uname"><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>First Name: </td>
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
					<tr>
					</tr>
					<td align="center" colspan="2"><input type="submit" name="AddPatient"value="Add Patient"></td>
					</tr>
					<tr>
					<td align="center" colspan="2"><input type="submit" name="EditPatient"value="Edit Patient"></td>
					</tr>
					<tr>
					<td align="center" colspan="2"><input type="submit" name="DeletePatient"value="Delete Patient"></td>
					</tr>
				</form>
			</fieldset>
		</div>
		<br>
		<div>
		<table width="100%" border="2">
		<tbody align="center" class="font">
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
		</div>
	</body>
</html>