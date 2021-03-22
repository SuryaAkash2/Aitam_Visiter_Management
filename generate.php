<!DOCTYPE html>
<html>
<head>
	<title>Visitor pass</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/generate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style type="text/css">
		a:hover {
			text-decoration: none;
			background-color: #424242;
			border:2px solid black;
		}
		.card{
			box-shadow: 0 0 10px 0 black;
			position:absolute;
 			transition: 0.3s;
  			width: 440px;
  			background-color: white;
  			border: 3px solid white;
  			height:280px;
  			margin-left: 35%;
  			color: white;
  			font-family: sans-serif;
  			text-align: left;
  			padding-top: 40px;
  			font-size: 18px;
  			margin-top: 4%;
  		}
  		.card p {
  			position: relative;
  			margin-top: 1px;
  			padding-left: 35px;
  		}

  		@page {
  			size: auto;
  			margin:0;
  		}
  		
	</style>



</head>
<body>
	<header>
	<header id="header1"><img id="logo" src="aitam2.jpg">
		<h1>AITAM VISITOR</h1>
		<ul>
			<li><a href="home.php">Dashboard</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</header>
	
	</header>
	
	<h1 style="position:absolute;margin-left:40.5%;font-size:50px;margin-top: 5%; "><u>Visitor Pass</u></h1>
<div style="margin-top: 100px;margin-left:0;display: inline-flex;">

	<div class="card" style="color: black;">
		<table> 
<?PHP




	include 'conn.php';
	session_start();
	$user = $_SESSION['user'];
	if($user!=1){
		header('location:op.php');
	}

if(isset($_POST['visitor_name']) && isset ($_POST['authority']) && isset($_POST['place']) && isset ($_POST['contact'])&& isset($_POST['reason']))
{
	$var1=$_POST['visitor_name'];
	$var2=$_POST['authority'];
	$var3=$_POST['department'];
	$var4=$_POST['faculty'];
	$var5=$_POST['place'];
	$var6=$_POST['contact'];
	$var7=$_POST['reason'];
	
	$sqlcommand="INSERT INTO `VISITOR` (`visitor_name`, `authority`, `department`, `faculty`, `place`, `contact`, `reason`) VALUES ('$var1', '$var2', '$var3', '$var4', '$var5', '$var6','$var7')";
	$result=mysqli_query($conn,$sqlcommand);
	if($result){
		
		$sqlcommand="SELECT * FROM `VISITOR` WHERE `visitor_name` = '$var1'";
		$result=mysqli_query($conn,$sqlcommand);
		$row = mysqli_fetch_array($result);
	
		echo "<tr>
			<td><p> ID-Number<p></td>
			<td><p>:</p></td>
			<td><p>".$row['SNO']."</p></td>

		</tr>
		<tr>
			<td><p>	Visitor Name<p></td>
			<td><p>:</p></td>
			<td><p>".$row['visitor_name']."</p></td>

		</tr>";
		if($row['authority']=="The Director"||$row['authority']=="The Principal"||$row['authority']=="Head of the department")
		{
			echo "<tr>
			<td><p>	Faculty Name<p></td>
			<td><p>:</p></td>
			<td><p>".$row['authority']."</p></td>
			</tr>";
		}
		if($row['authority']=="Other faculty"){
			echo "<tr>
			<td><p>	Faculty Name<p></td>
			<td><p>:</p></td>
			<td><p>".$row['faculty']."</p></td>
			</tr>";
		}
		if($row['authority']=="Head of the department"||$row['authority']=="Other faculty"){
			echo "<tr>
			<td><p>	Branch<p></td>
			<td><p>:</p></td>
			<td><p>".$row['department']."</p></td>
			</tr>";
		}
		echo "<tr>
			<td><p>Place<p></td>
			<td><p>:</p></td>
			<td><p>".$row['place']."</p></td>
		</tr>
		<tr>
			<td><p>Contact <p></td>
			<td><p>:</p></td>
			<td><p>".$row['contact']."</p></td>

		</tr>
		<tr>
			<td><p>REASON <p></td>
			<td><p>:</p></td>
			<td><p>".$row['reason']."</p></td>

		</tr>
		</table>
		</div>
		</div>
	 	<a style='position:absolute;margin-top:32.8%;border:1.5px solid black; color:blue;margin-left:46%;font-size:25px;background-color:#424242;color:white;height:35px;border-radius:5px;width:75px;padding:10px;' href='print.php?q=".$row['SNO']."' target='blank'>PRINT</a>";
		
	}
else
{

	echo "query not sent ";
}
}
?>	
	
	
	<footer id="foot"><h4><i class="fa fa-copyright" style="font-size: 15px;"></i> 2019-ALL COPYRIGHTS ARE RESERVED.</h4>
	<ul>
			<li><a href="http://aitamsac.in/">aitamsac.in</a></li>
			          

		</ul></footer>
		

</body>
</html>