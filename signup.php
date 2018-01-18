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
              
            <div>
                <h2>Date Of Birth</h2>
                <input type="date" name="date" placeholder="Date of birth"> 
            </div>
            <div>
                <input type="email" name="email" placeholder="Enter correct Email"> 
            </div>
    	</form>
       </div>


       

</body>
</html>