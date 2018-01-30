<?php
include'connection.php';
$data="SELECT * FROM course";
$qr=mysqli_query($conn,$data);
$x=1;
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<!---<link rel="stylesheet" type="text/css" href="style.css"></link>-->
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body>
    <div >
    <?php include 'header.php' ?>
   </div>
       <div class="addnew"><a href="addcourse.php"><input type="button" name="addnew" value="Add New"/></a>
       </div>
       <div>
        <h2 align="center">
            Course Table
        </h2>
       </div>
    <table align="çenter" cellpadding="7" cellspacing="3" id="table1">
        <tr>
       <th>
           Course Name
       </th>
       <th>
        Credit Hours
       </th>
       <th>
          Edit
          </th>
       <th>
    Delete
       </th>
          </tr>
        <tr>
        <?php
        while($record=mysqli_fetch_assoc($qr))
        {
           
            if($x==1){
                 $id=$record['id'];
            echo "<tr id='table2'>";
          echo "<td>".$record['coursename']. "</td>";
          echo "<td>".$record['credit_hours']. "</td>";
          echo "<td> <a href='courseedit.php?id={$id}'> Edit</a> </td>";
          echo "<td> <a href='courseDelete.php?id={$id}'> Delete</a> </td>";
         echo"</tr>" ; 
         
         $x=0;
     }
     else
     {
         echo "<tr>";
          echo "<td>".$record['coursename']. "</td>";
          echo "<td>".$record['credit_hours']. "</td>";
          echo "<td> <a href='courseedit.php?id={$id}'> Edit</a> </td>";
          echo "<td > <a href=''> Delete</a> </td>";
         echo"</tr>" ; 
         $x=1;
         
     }
        }//while end
        ?>
    </tr>
    </table>
       

</body>
</html>