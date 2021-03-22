<?PHP
	include 'conn.php';
	session_start();
	$user = $_SESSION['user'];
	if($user!=1){
		header('location:op.php');
	}
?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>form</title>
	
</head>
<body>
        <header id="header1"><img id="logo" src="aitam2.jpg">
        <h1>AITAM VISITOR</h1>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </header>
<center>
<form method="POST" name="visit" action="generate.php">
	<h1 style="text-align: center;font-weight: bold;"><u>VISITOR PASS</u></h1>
<table>
<tr>
	<td><label name="visitor_name">Name of the Visitor </label></td>
	<td>&nbsp: </td>
	<td class="enter"><input type="text" name="visitor_name" placeholder="" autocomplete="off"></td>
</tr>
<tr>
	<td><label name="authority"> To visit</label></td>
	<td>&nbsp:</td>
	<td><select name="authority" id = "person" onchange = "ShowHideDiv()" >
		<option value=""> </option>
		<option value="The Director">The Director</option>
		<option value="The Principal">The Principal</option>
		<option value="Head of the department">Head of the department</option>
		<option value="Other faculty">Other faculty</option>
	</select>
</td>
</tr>
<tr style="display: none;" id="branch">
  	<td><label name="department">Branch </label></td>
	<td style="position: relative;left:240px">&nbsp:</td>
  	<td class="enter" style="position:relative;left: 240px;">
	<select name="department">
        <option></option>
        <option>CSE</option>
        <option>ECE</option>
        <option>EEE</option>
        <option>CIVL</option>
        <option>MECH</option>
        <option>IT</option>
  	</select></td>
 
</tr> 
<tr style="display: none" name="faculty" id="facultys">
    <td>Faculty</td>
    <td style="position: relative;left:242px">:</td>
	<td class="enter" style="position:relative;left: 242px"><input type="text" placeholder="" autocomplete="off" name="faculty"></td>
</tr>

<tr>
	<td><label name="place">Visiter's Hometown</label>
	<td>&nbsp:</td>
	<td class="enter"><input type="textarea" name="place" placeholder="" autocomplete="off"></td>
</tr>
<tr>
	<td><label name="reason">Reason to visit</label></td>
	<td>&nbsp:</td>
	<td class="enter"> <input type="textarea" name="reason" placeholder="" id="box" autocomplete="off"></td>
</tr>

<tr>
	<td><label name="reason">Contact Number</label></td>
	<td>&nbsp:</td>
	<td class="enter"> <input type="text" name="contact" placeholder="" id="box" autocomplete="off"></td>

</tr>

</table>
	<center><input id="submit" type="submit" placeholder="Print" style="margin-top: 8px;"></center>
</form>
</div>
 	</center>
<script type="text/javascript">
    function ShowHideDiv() {
        var person = document.getElementById("person");
        var branch = document.getElementById("branch");
        var facultys = document.getElementById("facultys");
        if(person.value == "Head of the department")
        {
        	branch.style.display = "block";
        	facultys.style.display	= "none";
        }
       	else if(person.value == "Other faculty")
        {
        		
        	facultys.style.display	= "block";
        	branch.style.display = "block";
        }else {
            facultys.style.display  = "none";
        	branch.style.display = "none";
        }


    }
</script>
<footer id="foot"><h4><i class="fa fa-copyright" style="font-size: 22px;"></i> 2019-ALL COPYRIGHTS ARE RESERVED.</h4>
    <ul>
            <li><a href="http://aitamsac.in/">Support</a></li>
            <li><a href="team.php">Team</a></li>
        </ul></footer>
</body>
</html>