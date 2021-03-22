<?PHP
	include 'conn.php';
	session_start();
	
	if(isset($_POST['user'])&&isset($_POST['password'])){
	
	
	$a=$_POST['user'];
	$b=$_POST['password'];
	
	$sql="SELECT * FROM `log` WHERE `lognam` = '$a'";
	
	
	$query = mysqli_query($conn, $sql);
	
	
	$row = mysqli_fetch_array($query);
	
	if($row['pass']==$b && $row['lognam']){
			$_SESSION['user']=$row['sno'];
			header('location:home.php');
	}
	else{
		echo "<script>alert('details are wrong')</script>";
		echo "<script>window.location='op.php';</script>";

	}
	}
	else{
		echo "<script>alert('details wrong')</script>";
		echo "<script>window.location='op.php';</script>";		
	}
?>