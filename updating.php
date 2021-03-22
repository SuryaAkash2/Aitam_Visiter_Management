<?PHP
	include 'conn.php';
	session_start();

	
	if (!isset($_SESSION['user'])) 
	{
		header('location:op.php');
	}
	else {
		$c=$_SESSION['user'];
	}

	$a=$_POST['oldpass'];
	$b=$_POST['newpass'];
	$query="SELECT * FROM `log` WHERE `sno`='$c' ";
	$sql=mysqli_query($conn,$query);
	$row =mysqli_fetch_array($sql);

	if ($row['pass']==$a) {

	$query="UPDATE `log` SET `pass`='$b' WHERE `sno`='$c' "; 
	$sql=mysqli_query($conn,$query);
	
	if ($sql) {
		echo "<script>alert('password is changed')</script>";
			echo "<script>window.location='home.php';</script>";
		}
	else
	{
		echo "<script>alert('password not changed');</script>";
		echo "<script>window.location='update.php';</script>";

	}

	}
	else{
		echo "<script>alert('Password is Incorrect');</script>";
		echo "<script>window.location='update.php';</script>";
	}

?>