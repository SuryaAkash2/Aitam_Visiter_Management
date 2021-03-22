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



	<title>Visitor Management Pass</title>
	<link rel="stylesheet" type="text/css" href="./css/count.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  transition: background-color .3s;
  border: 2px solid rgb(65,65,65);
  padding: 8px 8px;
}

.pagination a.active {
  background-color: #4CBF50;
  color: white;
  text-decoration: none;
  border: 1px solid #4CAF50;
  border-radius: 5px;
}

.pagination a:hover {
  background-color:#000;
  color: skyblue;
  text-decoration: none ;
  border-radius: 5px;
}</style>
</head>
<body style="background-color: #EEEEEE;font-family: sans-serif;overflow: auto;">
	<header id="header1"><img id="logo" src="aitam2.jpg">
		<h1>AITAM VISITOR</h1>
		<ul>
			<li><a href="indeex.php">Home</a></li>
			<li><a href="http://aitamsac.in/">About us</a></li>
		</ul>
	</header>
	<center><h1 id="vis" style="margin-top: 6%;">Visitors in the recent Month</h1></center>
	<center>
	<table class="tabu" border="1" cellpadding="5" style="margin-top: 3%">
		<tr>
			<th> ID-NUMBER</th>
			<th>VISITOR-NAME</th>
			<td>CONTACT</td>
			<td>Print Details</td>
		</tr>
		<?PHP 
				include 'conn.php';
				if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    				$page_no = $_GET['page_no'];
    			} else {
        			$page_no = 1;
        		}
        		$total = 7;
        		$offset = ($page_no-1) * $total;
				$previous_page = $page_no - 1;
				$next_page = $page_no + 1;
				$adjacents = "2";
				
				$sql="SELECT COUNT(*) As total_records FROM `visitor`";

				$result_count=mysqli_query($conn, $sql);
				$total_records = mysqli_fetch_array($result_count);
				$total_records = $total_records['total_records'];
				$total_no_of_pages = ceil($total_records / $total);
				$second_last = $total_no_of_pages - 1;

				$sql= "SELECT * FROM `visitor` LIMIT $offset, $total";
				$query= mysqli_query($conn, $sql);
				$row=mysqli_fetch_array($query);
				
				$curyear = date('Y');
				$curmonth = date('m');
				$curday = date('d');
				
				while($row=mysqli_fetch_array($query)){
					$month = substr($row['tim'],5,2);
					if($month==$curmonth)
					{
						echo "<tr>
								<td>".$row['SNO']."</td>
								<td>".$row['visitor_name']."</td>
								<td>".$row['contact']."</td>
								<td><a href='search.php?q=".$row['SNO']."' target='blank'>Print</a></td>
							
							</tr>";
					}
				}
				
				
			?>
	</table>
	</center>
	<ul class="pagination" style="position:absolute;margin-left: 41%;color:skyblue;margin-top: 3%;display: inline-flex;">
<?php if($page_no > 1){
echo "<li  style='padding-left:10px;'><a href='?page_no=1'>&rsaquo;&rsaquo; First Page</a></li>";
} ?>
    
<li style="padding-left:5px;" <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?> >Previous</a>
</li>
    
<li style="padding-left: 5px;"> <?php if($page_no >= $total_no_of_pages){
} ?>
<a <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>
 
<?php if($page_no < $total_no_of_pages){
echo "<li style='padding-left: 5px;'><a  href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul>
	
	</ul>
		<footer id="foot" ><h4><i class="fa fa-copyright" style="font-size: 22px;"></i> 2019-ALL COPYRIGHTS ARE RESERVED.</h4>
	<ul style="margin-left: 46%;">
		
			<li><a href="team.php">Team</a></li>
            <li><a href="logout.php">Logout</a></li>
		</ul></footer>
</body>
</html>