<?php include '../Controller/usercontroller.php'; ?>
<html>
	<head>
	<title>Sign Up</title>
		<script>
			function validate() {
				var name =
					document.forms["RegForm"]["name"];
				var email =
					document.forms["RegForm"]["email"];;
				var what =
					document.forms["RegForm"]["type"];
				var password =
					document.forms["RegForm"]["pass"];
				var username =
					document.forms["RegForm"]["uname"];

				if (name.value == "") {
					window.alert("Please enter your name.");
					name.focus();
					return false;
				}

				if (username.value == "") {
					window.alert("Please enter your username.");
					username.focus();
					return false;
				}

				if (email.value == "") {
					window.alert(
					"Please enter a valid e-mail address.");
					email.focus();
					return false;
				}

				if (password.value == "") {
					window.alert("Please enter your password");
					password.focus();
					return false;
				}

				if (what.selectedIndex < 1) {
					window.alert("Please enter your use type.");
					what.focus();
					return false;
				}

				return true;
			}
		</script>

		<style>
		body {
  background-color: hsla(89, 43%, 51%, 0.3);
}
			div {
				box-sizing: border-box;
				width: 100%;
				border: 100px solid black;
				float: left;
				align-content: center;
				align-items: center;
			}

			form {
				margin: 0 auto;
				width: 400px;
			}
		</style>
	</head>

	<body>
		<h1 style="text-align: center;">Sign Up</h1>
		<form name="RegForm" action="./login.php"
			onsubmit="return validate()" method="post">
			<p>Name: <input type="text" 
							size="65" name="name" /></p>
			<br />
			<p>Username: <input type="text"
							size="65" name="uname" />
		   </p>
			<br />
			<p>Email: <input type="text"
							size="65" name="email" /></p>
			<br />
			<p>Password: <input type="text"
						size="65" name="pass" /></p>
			<br />

			<p>
				Select User
				<select type="text" value="" name="type">
					<option>None</option>
					<option>Doctor</option>
					<option>Nurse</option>
					<option>Patient</option>
				</select>
			</p>
			<br />
			<p>
                <input type="submit" 
                       value="Signup" name="signup" />
                <input type="reset" 
                       value="Reset" name="Reset" />
            </p>
		</form>
	</body>
</html>


