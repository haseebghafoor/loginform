<?php
include 'connection.php';
$id=$_GET['id'];

 $data="DELETE FROM course where id='$id'";
 $record=mysqli_query($conn,$data);
echo"<script>window.location='course.php'</script>";
?>