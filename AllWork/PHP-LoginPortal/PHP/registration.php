<?php

    include_once 'include/class.user.php';
    $user = new User();

    // Checking for user logged in or not
    /*if (!$user->get_session())
    {
       header("location:index.php");
    }*/
    if (isset($_REQUEST['submit'])){
        extract($_REQUEST);
        $register = $user->reg_user($name,$pass, $email);
        if ($register) {
            // Registration Success
            echo 'Registration  successful <a href="login.php">Click here</a> to login';
        } else {
            // Registration Failed
            echo 'Registration failed. Email or Username already exits please try again';
        }
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
      
        <title>Register</title>
		
            <link rel="stylesheet" href="assets/css/contact_form_style.css" />
		
		
    </head>
    <body>
        <body>
        <div id="container">
           
            
            <form action="" id="contactForm" name="contactForm" method="post" enctype="multipart/form-data"" method="post" class="basic-grey">
     <h1>Registration Here
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Name:</span>
        <input id="name" type="text" name="name" placeholder="Your Name" required="required"/>
    </label>
   
    <label>
        <span>Email:</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" required="required"/>
    </label>
   
    <label>
        <span>Password:</span>
         <input id="pass" type="password" name="pass" placeholder="Valid Password" required="required"/>
    </label>
     
     <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" id="frm_submit" value="Register" name="submit"/>
        <a href="login.php">Already registered! Click Here!</a>
    </label>   
   
</form>

<script>
/* attach a submit handler to the form */
$("#contactForm").submit(function(event) {
/* stop form from submitting normally */
event.preventDefault();
/* get some values from elements on the page: */
$('#frm_submit').disabled=true;
$('#frm_submit').val('loading...');
var $form = $( this ),
name = $form.find( 'input[name="name"]' ).val(),
email = $form.find( 'input[name="email"]' ).val(),
pass= $form.find( 'input[name="pass"]' ).val(),
url = $form.attr( 'action' );
/* Send the data using post */
var posting = $.post( url, { name: name,email: email,password: password, } );
/* Put the results in a div */
posting.done(function( data ) {
	alert(data);
	$('#frm_submit').disabled=false;
	$('#frm_submit').val('Register');
	$( '#contactForm' ).each(function(){
	    this.reset();
	});
	});
});
</script>  
        </div>
    </body>
    </body>
</html>
