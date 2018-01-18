<html>
<head>
	<title></title>
    
	<link rel="stylesheet" type="text/css" href="style2.css"></link>
</head>
<body>
    <div class="container">
        <p>Sign Up</p>
    	<form action="$_SERVER['PHP_SELF']" method="post">
    		<div>
           <input type="text" name="firstname" placeholder="Enter FirstName"> 
           <input type="text" name="surname" placeholder="Enter SurName">      
            </div>
              
              <div class="date">
                Date Of Birth:
                <input type="date" name="date" placeholder="Date of birth"> 
            </div>
              <div class="radiobt">
                <input type="radio" name="male">Male
                <input type="radio" name="female">FeMale
            </div>
              <div>
                <input type="email" name="email" placeholder="Enter correct Email"> 
            </div>
              <div>
                <input type="text" name="phoneno" placeholder="Enter Mobile Number"> 
            </div>
              <div>
                <input type="text" name="password" placeholder="Enter New Password">
            </div>

    	</form>
       </div>


       

</body>
</html>