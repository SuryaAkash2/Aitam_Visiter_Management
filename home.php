<?PHP
	include 'conn.php';
	session_start();
	if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	if($user!=1){
			header('location:op.php');
	}
	}else{
		header('location:op.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Visiter Management Pass</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>




</head>
<body style="background-color: #EEEEEE;">
		<header id="header1" ><img id="logo" src="aitam2.jpg">
		<h1>AITAM VISITOR</h1>
		<ul style="margin-left: 77%;">
			<li><a href="index2.php">Home</a></li>
			<li><a href="http://aitamsac.in/">About us</a></li>
			 <li><a href="logout.php">Logout</a></li>
		</ul>
	</header>
	<form method="get" action="search.php" style="position:absolute;margin-top: -80px; margin-left: 10px;border-width: 0;background-color: transparent;border-radius: 10%;display: inline-flex;">
		<input type="search" placeholder="Enter ID Here" name="q" id="search" style="outline: none;" >
		<button type="submit" style="width: 70%;position:absolute;padding-right: 20px;background: transparent;outline: none;border-radius: 30px;margin-left: 315px;padding-top:6px;border:0;"><i class='fa fa-search' id="icon" style="font-size: 32px;background-color: transparent;border: 0;padding-left: 40px;"></i></button>
		
	</form>
	<div class="abb">
		<b><a href="#" style="margin-top: 15px"><u>Counter:</u>	</a></b>
	</div><br>
	<div class="middle">
		<table> 
			<tr>
				<th><a href="count.php" >Daily</a></th>
				<th><a href="coount.php">Monthly</a> </th>
				<th><a href="count2.php">Yearly</a> </th>
			</tr>
			<?PHP 
				$sql= "SELECT `tim` FROM `visitor`";
				$query= mysqli_query($conn, $sql);
				
				$curyear = date('Y');
				$curmonth = date('m');
				$curday = date('d');
				
				$yearcount = 0;
				$monthcount = 0;
				$daycount = 0;
				
				while($row=mysqli_fetch_array($query)){
					$year = substr($row['tim'], 0,4);
					$month = substr($row['tim'], 5,2);
					$day = substr($row['tim'], 8,2);
					
					if($year==$curyear)
					{
						$yearcount = $yearcount+1;
					}
					if($month==$curmonth)
					{
						$monthcount = $monthcount+1;
					}
					if($day==$curday)
					{
						$daycount = $daycount+1;
					}
					if($day==$curday-1)
					{
						$daycount=0;
					}
				}
			?>
			<tr>
				<td><a href="count.php"><?PHP echo $daycount?></a> </td>
				<td><a href="coount.php"><?PHP echo $monthcount?></a> </td>
				<td><a href="count2.php"><?PHP echo $yearcount?></a> </td>
			</tr>

		</table>	

		 <a style="position: absolute; text-decoration: none;font-weight: bold; font-size: 25px;margin-left: 72%;margin-top: -20%;text-decoration: none;color: black;" href="register1.php">Generate Pass</a>
		
		<a style="position: absolute; text-decoration: none;font-weight: bold; font-size: 25px;margin-left: 86%;margin-top: -20%;text-decoration: none;color: black;" href="admin.php">Admin Profile</a></b>
		<footer id="foot"><h4><i class="fa fa-copyright" style="font-size: 22px;"></i> 2019-ALL COPYRIGHTS ARE RESERVED.</h4>
	<ul style="margin-left: 51%;">
			<li><a href="http://aitamsac.in/">Support</a></li>
			<li><a href="team.php">Team</a></li>
	       

		</ul></footer>
	</div>
</body>
</html>