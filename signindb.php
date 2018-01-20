<?
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="userrecord";

$conn = mysqli_connect($servername, $username, $password,$dbname);
if(isset($_POST['submit'])){}
$username=$_REQUEST['username'];
$password=md5($_REQUEST['password']);
if(empty($username)||empty($password))
{
	$err="fill all filds"
}
else
{
	$qur="SELECT * FROM userdetail WHERE email='$username' AND pasword='$password'";
	$sql=mysqlI_query($conn,$qur);
	if(mysqli_num_row($sql)>0){
$data=mysqli_fetch_assoc($sql);
$_SESSION['id']=$data['id'];
$_SESSION['firstname']=$data['firstname'];
echo"<script>window.location='profile.php' </script>";
	}
	else{
		$err="Invalid User name or password";
	}
}

}
//session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>
			<?php
			if(isset($err)){echo $err;}
			?>
		</td>
	</tr>
</table>
</body>
</html>