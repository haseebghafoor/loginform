<?php
include'connection.php';
if(isset($_POST['submit'])){
	$coursename=$_POST['coursename'];
$credithours=$_POST['credithours'];
if(empty($coursename)||empty($credithours))
{echo "all fild require";}
else{
$sql="INSERT INTO course(coursename,credit_hours) VALUE ('$coursename','$credithours')";
$db=mysqli_query($conn,$sql);
 echo"<script>window.location='course.php'</script>";
}
}
?>