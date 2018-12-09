<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign Up Form</title>
		<link rel="stylesheet" href="style_Signup.css">
<style type="text/css">
input:invalid {
  box-shadow: 0 0 5px 1px red;
}

input:focus:invalid {
  outline: none;
}

input:focus:valid {
  border: 2px solid green;
}

select:focus:invalid {
  border: 2px dashed red;
}

select:focus:valid {
  border: 2px solid green;
}

</style>
<script type="text/javascript">
	
	function fin()
	{
		var user,pwd;
		user = document.getElementById("username").value;
		pwd = document.getElementById("passwrd").value;

		if(user!="" && pwd!= "")
		{
			alert("You're now a user!");
		}
	}

</script>

	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Sign Up Here</h2>
			<form method="POST" action="">
				<p>Username</p>
				<input type="text" name="username" id="username" placeholder="Enter Username" required>
				<p>Password</p>
				<input type="password" name="password" id="password" placeholder="••••••" required>
				<p>Phone Number</p>
				<input type="text" name="phone_num" id="phone_num" required pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[789]\d{9}$"><br>
				<span style="color: white;">Type of user:</span>
				<select name="select" id="select" required>
 				<option value="Student">Student</option>
 				<option value="Professor">Professor</option>
 				<option value="Administator">Administrator</option>
				</select><br><br>
				<p>User Id</p> <input type="text" name="user_id" id="user_id" required><br>
				<p>Date Of Birth</p><input type="date" name="dob" id="dob" required><br>
				<input type="submit" name="submit" value="Submit" onclick="fin()">
				<a href="#" style="font-style: courier; color: black;">Forget Password</a>
			</form>
		</div>

<?php

if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='root';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=dbms_project",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO users (username, password, phone_number, type_of_user, user_ID, dob)
VALUES ('".$_POST["username"]."','".$_POST["password"]."','".$_POST["phone_num"]."','".$_POST["select"]."','".$_POST["user_id"]."','".$_POST["dob"]."')";
if ($dbh->query($sql)) {
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}
$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>


	</body>
</html>
