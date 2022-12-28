<?php include '../Controller/applist.php'; ?>
<?php include '../Controller/usercontroller.php'; ?>
<?php $docprof = getallappointments(); ?>
<html>
	<head>
	<title>Appointmentlist</title>
	</head>
	
	<body>
		<div style="border:1px solid black">
			<a href ="admin.php">Back</a></h5>
			<h1 align="center">Appointmentlist</h1>
		</div>
		<br>
		<div style="border:1px solid black">
		<h2 align="left">Appointment details</h2>
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
						<td align="right">Patient name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Patient Name"></td>
						<td><span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="right">Appointment Date: </td>
						<td><input type="date" name="date" value="<?php echo $date;?>" placeholder="Appointment Date"></td>
						<td><span><?php echo $err_date;?></span></td>
					</tr>
					<tr>
						<td align="right">Appointed Doctor: </td>
						<td><input type="text" name="appd" value="<?php echo $appd;?>" placeholder="Appointed Doctor"></td>
						<td><span><?php echo $err_appd;?></span></td>
					</tr>
					<tr>
					<td align="center" colspan="2"><input type="submit" name="EditList"value="Edit List"></td>
					</tr>
					<tr>
					<td align="center" colspan="2"><input type="submit" name="DeleteList"value="Delete List"></td>
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
			<td>Patient Name</td>
			<td>Appoinment Date</td>
			<td>Doctor Name</td>
			</tr>
			<?php
				foreach($docprof as $f){
					
					echo "<tr>";
						echo "<td>".$f["id"]."</td>";
						echo "<td>".$f["patientname"]."</td>";
						echo "<td>".$f["appointmentdate"]."</td>";
						echo "<td>".$f["doctorname"]."</td>";
					echo "</tr>";
				}
			?>
			
		</tbody>
		</table>
		</div>
	</body>
</html>