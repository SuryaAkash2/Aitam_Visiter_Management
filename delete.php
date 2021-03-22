<?PHP 
	include 'conn.php';
	if (isset($_GET['q'])) {
		$a=$_GET['q'];
	$query = "DELETE FROM `visitor` WHERE `SNO`='$a' ";
	$sql=mysqli_query($conn,$query);
	if ($sql) {
		# code...
		header('location:home.php');
	}

	}
	else {
		
	}
	
?>