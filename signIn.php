
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link rel="stylesheet" type="text/css" href="style.css"></link>
</head>
<body>
    <div class="container">
        <img src="images/men1.png">
    	<form action="$_SERVER['PHP_SELF']" method="post">
    		<div class="forminput">
    			<input type="text" name="username" placeholder="Enter UserName">
    		</div>
    		   <div class="forminput">
    			  <input type="password" name="password" placeholder="Enter Password">
    		</div>
            <div>
                <input type="submit" name="submit" value="SIGNIN" class="btnsignin">
            </div>
            <div>
               <a href="#"> <input type="button" name="signup" value="SIGNUP" class="btnsignup"></a>
            </div>
    	</form>
       </div>


       

</body>
</html>