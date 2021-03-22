<?PHP
	session_start();
	$user = $_SESSION['user'];
	if($user!=1){
		header('location:op.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Visitor Management System</title>
	<link rel="stylesheet" type="text/css" href="./css/admin.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" ></head>
<body>
	<header id="header1"><img id="logo" src="aitam2.jpg">
		<h1>AITAM VISITOR</h1>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="http://aitamsac.in/">About us</a></li>
		</ul>
	</header>
	<div class="tab" style="height: 480px;">
		<h1><i class="fas fa-user"></i></h1>
		<center>
		<table>
			<tr>
				<td name="admin"> Name</td>
				<td>:</td>
				<td name="admin">Admin Name</td>
			</tr>
			<tr>
				<td name="ID">ID-Number</td>
				<td>:</td>				
				<td name="ID">xxxxxxxxx </td>
			</tr>
			<tr>
				<td name="gender">Gender</td>
				<td>:</td>				
				<td name="gender">male/female </td>
			</tr>
			<tr>
				<td name="contact">Contact</td>
				<td>:</td>				
				<td name="contact">xxxxxxxxxx </td>
			</tr>

		</table></center>
	</div>

	<center><a href="update.php"  id="admlogin" style="width: 190px;margin-top: 38%"><lable>Edit password</lable></a></center>
	<footer id="foot"><h4><i class="fa fa-copyright" style="font-size: 22px;"></i> 2019-ALL COPYRIGHTS ARE RESERVED.</h4>
	<ul style="margin-left: 45%;">
			<li><a href="http://aitamsac.in/">Support</a></li>
			<li><a href="team.php">Team</a></li>
			<li><a href="logout.php">Logout</a></li>

		</ul></footer>
</body>
</html>