
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.uppda {
			border-radius: 5px #fff;

		}

	</style>

	<link rel="stylesheet" type="text/css" href="./css/admin.css">
	<title>Visitor Management System</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" >
<script type="text/javascript">
	function verify() {
		var x = document.forms['myform']['oldpass'].value;
		var y = document.forms['myform']['newpass'].value;
		var z = document.forms['myform']['confpass'].value;

		if (y!=z) {
			alert("Passwords are not matched");
			header('location:update.php');
		}
		if (x=="") {
			alert("Enter the old password");
			return false;

		}
		if (y=="") {
			alert("Enter the new password");
			return false;
		}
		if (z=="") {
			alert("Conform the new password");
			return false;
		}
	}

</script>

</head>

<body>
	<header id="header1"><img id="logo" src="aitam2.jpg">
		<h1>AITAM VISITOR</h1>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="http://aitamsac.in/">About us</a></li>
		</ul>
	</header>
<center><span style="position: absolute; margin-top: 10%;margin-left: 4%;text-shadow: 0 0 2px #0F27FF;font-size: 30px;">UPDATE PASSWORD</span>
	<form action="updating.php" method="POST" class="uppda" name="myform" onsubmit="verify()" style="border-color:#666666;border: 1px solid #ccc;border-radius:5px;
	border-width:3px;
	box-sizing:border-box;
	padding:12px 40px;
	box-shadow:0 0 10px 0 #000; 
	margin:10px 5px;
	display:inline-block;
	margin-top: 15%;">
<table style="margin-top: -20px;padding-top: 30px;">
	<tr>
		<td style="margin-top: -20px;padding-top: 30px;"><label>Current password</label></td><td style="margin-top: -20px;padding-top: 30px;">:</td>
		<td style="margin-top: -20px;padding-top: 30px;"><input type="text" name="oldpass" placeholder="" style="width:180px;height: 22px;border-radius: 3px;border:none;"></td>
</tr>
	<tr><td style="margin-top: -20px;padding-top: 30px;"><label>New password</label></td><td style="margin-top: -20px;padding-top: 30px;">:</td><td style="margin-top: -20px;padding-top: 30px;"><input type="text" name="newpass" placeholder="" style="width:180px;height: 22px;border-radius: 3px;border:none;"></td>
</tr>
	<tr><td style="margin-top: -20px;padding-top: 30px;"><label>Conform password</label></td><td style="margin-top: -20px;padding-top: 30px;">:</td><td style="margin-top: -20px;padding-top: 30px;"><input type="text" name="confpass" placeholder="" style="width:180px;height: 22px;border-radius: 3px;border:none;"></td></tr>
</table>
	<button type="submit" value="SUBMIT" style="font-size: 16px; border-radius: 5%;height: 30px;width: 80px; border:0;margin-top: 8%;color: white;font-weight: bold;background-color: #7FA785;">Submit</button>
</form></center>




	<footer id="foot"><h4><i class="fa fa-copyright" style="font-size: 22px;"></i> 2019-ALL COPYRIGHTS ARE RESERVED.</h4>
	<ul style="margin-left: 44%;">
			<li><a href="http://aitamsac.in/">Support</a></li>
			<li><a href="team.php">Team</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul></footer>
</body>
</html>