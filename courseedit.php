<?php
include 'connection.php';
$id=$_GET['id'];

 $data="SELECT * FROM course where id='$id'";
 $record=mysqli_query($conn,$data);
 $records=mysqli_fetch_assoc($record);
 $id=$records['id'];
 $coursename=$records['coursename'];
 $credit_hours=$records['credit_hours'];
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
   <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>-->
	<link rel="stylesheet" type="text/css" href="addform.css"></link>
</head>
<body>
    <div class="container">
        
    	<form action="" method="POST">
    		<div class="forminput">
    		ID:&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="id" value="<?php echo $id;?>">
    		</div>
    		<div class="forminput">
    		Course Name:	<input type="text" name="coursename" value="<?php echo $coursename;?>">
    		</div>
    		   <div class="forminput">
    			 Credit Hours: <input type="text" name="credithours" value="<?php echo $credit_hours;?>">
    		</div>
            <div>
                <input type="submit" name="submit" value="Update" class="btnsignin">
            </div>
            
    	</form>
       </div>


       

</body>
</html>
<?php
if(isset($_POST['submit']))
{ $id=$_POST['id'];
	$coursename=$_POST['coursename'];
	$credit_hours=$_POST['credithours'];
	$Update="UPDATE course SET coursename='$coursename',credit_hours='$credit_hours' WHERE id=$id";
	 $record=mysqli_query($conn,$Update);

	echo"<script>window.location='course.php'</script>";

}
?>