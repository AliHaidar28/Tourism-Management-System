<?php include("../Controller/nursereq.php")?>
<?php include '../Controller/usercontroller.php'; ?>
<?php $docreq = getallnursereq();?>
<html>
	<head>
	<title>Nurse Request</title>
	</head>
	
	<body>
		<div style="border:1px solid black">
			<a href ="admin.php">Back</a></h5>
			<h1 align="center">Nurse </h1>
		</div>
		<br>
		<div style="border:1px solid black">
		<h2 align="left">Nurse details</h2>
		</div>
		<br>
		<div align ="center">
			<fieldset>
				<form action="" method="post">
						<td align="right">ID: </td>
						<td><input type="text" name="id" value="<?php echo $id;?>" placeholder="Id"></td>
						
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						
						<td align="right">Request Status: </td>
						<td><input type="text" name="stat" value="Approved" placeholder="Request Status"></td>
					
					<td align="center" colspan="2"><input type="submit" name="adminapprovenurse"value="Approve"></td>
					<br>
					<table width="50%">
					<td><?php echo $err_id;?></td>
					<td><?php echo $err_name;?></td>
					</table>
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
			<td>Status</td>
			</tr>
			<?php
				foreach($docreq as $f){
					
					echo "<tr>";
						echo "<td>".$f["id"]."</td>";
						echo "<td>".$f["uname"]."</td>";
						echo "<td>".$f["status"]."</td>";
					echo "</tr>";
				}
			?>
			
		</tbody>
		</table>
		</div>
	</body>
</html>