<?php
$servername="localhost";
$username="root";
$password="";
$dbname="userrecord";

$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){


  $firstname=$_REQUEST['firstname'];
 $surname=$_REQUEST['surname'];
$date=$_REQUEST['date'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$phoneno=$_REQUEST['phoneno'];
$password=md5($_REQUEST['password']);

$sql="INSERT INTO userdetail(firstname,surname,date,gender,email,phoneno,pasword) VALUE('$firstname','$surname','$date','$gender','$email','$phoneno','$password')";
$db=mysqli_query($conn,$sql);
    //echo "New record created successfully";
    echo"<script>window.location='signIn.php'</script>";
 
}
//echo $d=query($conn, $sql);
?>