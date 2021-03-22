<!DOCTYPE html>
<html>
<head>
	<title>Visitor pass</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/generate.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style type="text/css">
		.card{
			box-shadow: 0 0 10px 0 black;
			position:absolute;
 			transition: 0.3s;
  			width: 450px;
  			background-color: white;
  			border: 3px solid white;
  			height:290px;
  			margin-left: 35%;
  			color: white;
  			font-family: sans-serif;
  			text-align: left;
  			padding-top: 55px;
  			font-size: 18px;
  			margin-top: 3%;
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
			<li><a href="index.php">Home</a></li>
			<li><a href="http://aitamsac.in/">aitamsac.in</a></li>
		</ul>
	</header>
	
	</header>
	
<div style="margin-top: 100px;margin-left:0;display: inline-flex;">
	<div class="card" style="color: black;">
		<table> 
<?PHP
include 'conn.php';

if(isset($_GET['q']))
{
	$var1=$_GET['q'];
	
	if($var1){
		
		$sqlcommand="SELECT * FROM `VISITOR` WHERE `SNO` = '$var1'";
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
			<td><p>	Faculty Name<p></td>
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
			<td><p>Reason <p></td>
			<td><p>:</p></td>
			<td><p>".$row['reason']."</p></td>

		</tr>
		</table>
		</div>
		</div>";
		
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
			            <li><a href="logout.php">Logout</a></li>

		</ul></footer>
		

</body>
</html>