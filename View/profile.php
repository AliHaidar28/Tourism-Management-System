<?php include "../Controller/navbar.php"?>
<?php include "../Controller/profile.php"?>
<html>
	<head>
	<title>Profile</title>
	</head>
	<body>
		<div style="border:1px solid black">
			<h1 align="center">Profile</h1>
		</div>
		<br>
		<div style="border:1px solid black">
		<h2 align="left">Doctor details</h2>
		</div>
		<br>
		<div>
			<table width="100%" border="2">
				<tr>
				<td colspan="6" align="center">Profile</td>
				<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Department</td>
				<td>Consult Time</td>
				<td>Fees</td>
				<td>Profile</td>
				</tr>
			</table>
		</div>`
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
						<td align="right">Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td align="right">Department: </td>
						<td><input type="text" name="dept" value="<?php echo $dept;?>" placeholder="Department"></td>
						<td><span><?php echo $err_dept;?></span></td>
					</tr>
					<tr>
						<td align="right">Fees: </td>
						<td><input type="number" name="fee" value="<?php echo $fee;?>" placeholder="Fees"></td>
						<td><span><?php echo $err_fee;?></span></td>
					</tr>
					<tr>
						<td align="right">Profile: </td>
						<td><input type="text" name="pro" value="<?php echo $pro;?>" placeholder="Profile"></td>
						<td><span><?php echo $err_pro;?></span></td>
					</tr>
					<tr>
					<td align="Right">Birth Date:</td>
					<td>
						<select name="day">
							<option selected disabled>Day</option>
									<?php
										for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
									?>
						</select>
						<select name="month">
							<option selected disabled>Month</option>
									<?php
										$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
										for($j=0;$j<count($mon);$j++)
										{
											echo "<option>$mon[$j]</option>";
										}
									?>
						</select>
						<select name="year">
							<option selected disabled>Year</option>
									<?php
										for($k=1948;$k<=2020;$k++)
										{
											echo "<option>$k</option>";
										}
									?>
						</select>
						</td>
						<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
					</tr>
					<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="Change Doctor Settings"></td>
					</tr>
				</form>
			</fieldset>
		</div>
	</body>
</html>