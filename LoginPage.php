<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style_Login.css">
<title>Login Page</title>

<script type="text/javascript">
function change()
{
var x=document.getElementById("Username").value;

	if(x!=""){
	document.getElementById("Username").disabled=true;
	}
	else{
	alert("Please enter your Username into the text box");
	}

var y=document.getElementById("Password").value;

	if(y!=""){
	document.getElementById("Password").disabled=true;
	}
	else{
	alert("Please enter your Password into the text box");
	}

}

</script>


</head>
<body>
<div class="content">
<h1>Login Page</h1>

<form id="FORM" action="">
<id="User_text">Username:
<input class="user" type="text" name="username" id="username" placeholder="Username"/><br><br>
<id="Pass_text">Password:
<input class="pass" type="text" name="password" id="password" placeholder="Password"/><br><br>
<input class="button-design" type="submit" id="button" onclick="change()" value="Submit"><br><br>
<a href="HomePage.php">Click here to return to the Home Page</a>
</form>
</div>


</body>
</html>