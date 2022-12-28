<?php include("../Controller/reg.php")?>
<html>
	<head><style>
body {
  background-image: url('Medical.jpg');
}
</style> 
}</head>
	<body>
	<h1>Register</h1>
			<form action="" method="post">
			 <table>
				<tr>*Required Fields</tr>
				<tr>
					<td>Name: </td>
					<td align="left"><input type="text" name="name" value="<?php echo $name;?>"></td>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td>Email: </td>
					<td><input type="text" name="email" value="<?php echo $email;?>"></td>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td>Phone: </td>
					<td><input type="text" name="number" value="<?php echo $number;?>"></td>
					<td><span><?php echo $err_number;?></span></td>
				</tr>
				<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input type="radio" value="Female" <?php if($gender == "Female") echo "checked";?> name="gender"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td>Agree to Terms and Services </td>
					<td>
						<input type="checkbox" name="terms[]">
					</td>
					<td><span><?php echo $err_terms;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="Register"></td>
				</tr>
				</table>
			</form>	
	</body>
</html>

<?php 
				if(!$err){
				echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
				echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
				echo "Number: ".htmlspecialchars($_POST["number"])."<br>";			
				echo "Gender: ".htmlspecialchars($_POST["gender"])."<br>";
				$arr = $_POST["terms"];
			
				foreach($arr as $e){
					echo "$e <br>";
				}
				}
?>