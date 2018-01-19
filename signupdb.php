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
echo "Connected successfully";

 $firstname=$_REQUEST['firstname'];
 $surname=$_REQUEST['surname'];
$date=$_REQUEST['date'];
$gender=$_REQUEST['gender'];
$email=$_REQUEST['email'];
$phoneno=$_REQUEST['phoneno'];
$password=$_REQUEST['password'];
$sql="INSERT INTO userdetail(firstname,surname,date,gender,email,phoneno,pasword) VALUE('$firstname','$surname','$date','$gender','$email','$phoneno','$password')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//echo $d=query($conn, $sql);
?>