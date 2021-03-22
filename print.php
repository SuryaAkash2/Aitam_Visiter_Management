<!DOCTYPE html>
<html>
<head>
	<title>Visitor pass</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./css/prin1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<style type="text/css">
		.card{
			box-shadow: 0 0 10px 0 black;
 			transition: 0.3s;
  			width: 305px;
  			background-color: white;
  			border: 3px solid white;
  			height:229px;
  			margin-left: 60px;
  			color: white;
  			font-family: sans-serif;
  			text-align: left;
  			padding-top: 25px;
  			font-size: 18px;
  			margin-top: -2%;
  		}
  		.card p {
  			position: relative;
  			margin-top: -5px;
  			padding-left: 10px;
  		}

  		.cardb{
			box-shadow: 0 0 10px 0 black;
 			transition: 0.3s;
  			width: 305px;
  			background-color: white;
  			border: 3px solid white;
  			height:229px;
  			margin-left: 80px;
  			color: white;
  			font-family: sans-serif;
  			text-align: left;
  			padding-top: 25px;
  			font-size: 18px;
  			margin-top: -2%;
  		}
  		.cardb p {
  			position: relative;
  			margin-top: -5px;
  			padding-left: 10px;
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
			<li><p style="font-size:8px;margin-left:200px;"> K. Kotturu, Tekkali, <br>Srikakulam Dist., A.P.<br> (AITAM College, Tekkali) </p></li>
		</ul>
	</header>
	<header id="header1" style="margin-left: 50%"><img id="logo" src="aitam2.jpg">
		<h1>AITAM VISITOR</h1>
		<ul>
			<li><p style="font-size:8px;margin-left:200px;"> K. Kotturu, Tekkali, <br>Srikakulam Dist., A.P.<br> (AITAM College, Tekkali) </p></li>
		</ul>
	</header>
	</header>
	
	
<div style="margin-top: 100px;margin-left:0;display: inline-flex;">
	<div class="card" style="color: black;">
		<table> 
		<?PHP
			$a = $_GET['q'];
			include 'conn.php';
			$sql= "SELECT * FROM `visitor` WHERE `SNO` = $a";
			$query= mysqli_query($conn, $sql);
			$row=mysqli_fetch_array($query);
		?>
		<tr>
			<td><p> ID-Number<p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['SNO'];?></p></td>

		</tr>
		<tr>
			<td><p>	Visitor Name<p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['visitor_name'];?></p></td>

		</tr>
		<tr>
			<td><p>	Faculty Name<p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['authority'];?></p></td>

		</tr>
		
		<tr>
			<td><p>Place <p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['place'];?></p></td>

		</tr>	
		<tr>
			<td><p>Contact <p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['contact'];?></p></td>

		</tr>
		<tr>
			<td><p>REASON <p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['reason'];?></p></td>

		</tr>
		
		
		</table>
	</div>
	<div class="cardb" style="position:relative;padding-left:0px;left:45px;" >
		<div  style="color: black;">
		<table> 
		<tr>
			<td><p> ID-Number<p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['SNO'];?></p></td>

		</tr>
		<tr>
			<td><p>	Visitor Name<p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['visitor_name'];?></p></td>

		</tr>
		<tr>
			<td><p>	Faculty Name<p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['authority'];?></p></td>

		</tr>
		<tr>
			<td><p>Place <p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['place'];?></p></td>

		</tr>
		<tr>
			<td><p>Contact <p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['contact'];?></p></td>

		</tr>
		<tr>
			<td><p>REASON <p></td>
			<td><p>:</p></td>
			<td><p><?PHP echo $row['reason'];?></p></td>

		</tr>
		
		</table>
	</div>
	</div>
	</div>
	<footer>
	
	<footer id="foot" style="width: 49%;margin-top: 1%"><h4><i class="fa fa-copyright" style="font-size: 12px;"></i> 2019-ALL COPYRIGHTS ARE RESERVED.</h4>
	<ul>
			<li><a href="http://aitamsac.in/">aitamsac.in</a></li>
			
		</ul></footer>
		<footer id="foot" style="margin-left: 50%;width: 49%;margin-top: 1%"><h4><i class="fa fa-copyright" style="font-size: 15px;"></i> 2019-ALL COPYRIGHTS ARE RESERVED.</h4>
	<ul>
			<li><a href="http://aitamsac.in/">aitamsac.in</a></li>
		</ul></footer>
		</footer>
		<script type="text/javascript">
			window.print();
		</script>
</body>
</html>