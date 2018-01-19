<html>
<head>
	<title></title>
    
	<link rel="stylesheet" type="text/css" href="style2.css"></link>
</head>
<body>
    <div class="container">
        <p>Sign Up</p>
    	<form action="signupdb.php" method="post" onsubmit="return validation()" name="signupform">
    		<div>
           <input type="text" name="firstname" placeholder="Enter FirstName">
           <div id="error_firstname"></div> 
       </div>
       <div>
           <input type="text" name="surname" placeholder="Enter SurName">  
            <div id="error_surname"></div>    
            </div>
              
              <div class="date">
                Date Of Birth:
                <input type="date" name="date" placeholder="Date of birth"> 
                <div id="error_dateofbirth"></div>  
            </div>
              <div class="radiobt">
                <input type="radio" name="gender" value="Male" checked="checked">Male
                <input type="radio" name="gender" value="female">FeMale
                 
            </div>
              <div>
                <input type="email" name="email" placeholder="Enter correct Email"> 
                <div id="error_email"></div>  
            </div>
              <div>
                <input type="text" name="phoneno" placeholder="Enter Mobile Number"> 
                <div id="error_phonenumber"></div>  
            </div>
              <div>
                <input type="text" name="password" placeholder="Enter New Password">
                <div id="error_password"></div>  
            </div>
            <div>
                <input type="submit" name="submit" value="Send" class="btnsignin">
            </div>

    	</form>
       </div>

<!--adding java script-->
<script type="text/javascript">
    //Geting all input text of object
    var firstname=document.forms["signupform"]["firstname"];
     var surname=document.forms["signupform"]["surname"];
      var date=document.forms["signupform"]["date"];
      var email=document.forms["signupform"]["email"];
       var phoneno=document.forms["signupform"]["phoneno"];
       var password=document.forms["signupform"]["password"];
    //getting all error display
    var firstname_error=document.getElementById("error_firstname");
     var surname_error=document.getElementById("error_surname");
      var dateofbirth_error=document.getElementById("error_dateofbirth");
    var email_error=document.getElementById("error_email");
var phonenumber_error=document.getElementById("error_phonenumber");
    var password_error=document.getElementById("error_password");
    //setting all event listner
    firstname.addEventListener("blur",firstnameVerify,true);
    surname.addEventListener("blur",surnameVerify,true);
    date.addEventListener("blur",dateVerify,true);
    email.addEventListener("blur",emailVerify,true);
    phoneno.addEventListener("blur",phonenoVerify,true);
    password.addEventListener("blur",passwordVerify,true);
    // write validation function
    function validation()
    {
        //firstname error
        if(firstname.value=="")
        {
            firstname.style.border="3px solid red";
            firstname_error.textContent="Please enter the firstname";
            firstname.focus();
            return false;
        }
        //surname error
        if(surname.value=="")
        {
            surname.style.border="3px solid red";
           surname_error.textContent="Please enter the surname";
            surname.focus();
            return false;
        }
        //date of birth error
        if(date.value=="")
        {
            date.style.border="3px solid red";
            dateofbirth_error.textContent="Please enter the date of birth";
             dateofbirth_error.textContent.color="red";
            date.focus();
            return false;
        }
        if(email.value=="")
        {
            email.style.border="3px solid red";
            email_error.textContent="Please enter the email";
            email.focus();
            return false;
        }
        //pjone no error
        if(phoneno.value=="")
        {
            phoneno.style.border="3px solid red";
            phonenumber_error.textContent="Please enter the phone Number";
            phoneno.focus();
            return false;
        }
        //password error
        if(password.value=="")
        {
            password.style.border="3px solid red";
           password_error.textContent="Please enter the password";
            password.focus();
            return false;
        }
        if(date.value>=01/01/2018)
        {
            date.style.border="3px solid red";
            dateofbirth_error.textContent="Please enter the correct date of birth";
             dateofbirth_error.textContent.color="red";
            date.focus();
            return false;

        }
    }
</script>
</body>
</html>