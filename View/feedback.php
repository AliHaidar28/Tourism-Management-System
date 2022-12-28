<?php include("../Controller/feedback.php")?>
<?php include '../Controller/usercontroller.php'; ?>
<?php $feedback = getallfeedback(); ?>

<html>
	<head>
	<title>Feedback</title>
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
			<h1 align="center">Feedback</h1>
		</div>
		<br>
		<div align ="center">
			<fieldset>
				<form action="" method="post">
					
						<td align="right">ID: </td>
						<td><input type="text" name="id" value="<?php echo $id;?>" placeholder="Id"></td>
						
						<td align="right">Name: </td>
						<td><input type="text" name="uname" value="<?php echo $uname;?>" placeholder="Name"></td>
							
						<td align="center" colspan="2"><input type="submit" name="submit"value="Search"></td>
						<td><input type="submit" name="delfback"value="Delete"></td>
					<br>
					<table width="25%">
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
			<td>Name</td>
			<td>Feedback</td>
			</tr>
			<?php
				foreach($feedback as $f){
					
					echo "<tr>";
						echo "<td>".$f["id"]."</td>";
						echo "<td>".$f["uname"]."</td>";
						echo "<td>".$f["fback"]."</td>";
					echo "</tr>";
				}
			?>
		</tbody>
		</table>
		</div>
	</body>
</html>