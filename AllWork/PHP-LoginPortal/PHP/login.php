<?php
	session_start();
	include_once 'include/class.user.php';
	$user = new User();

	if (isset($_REQUEST['submit'])) { 
		extract($_REQUEST);   
	    $login = $user->check_login($emailusername, $pass);
	    if ($login) {
	        // Registration Success
	       header("location:home.php");
	    } else {
	        // Registration Failed
	        echo 'Wrong username or password';
	    }
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>OOP Login Module</title>
		
	 <link rel="stylesheet" href="assets/css/contact_form_style.css" />
		
	</head>

	<body>
		<div id="container">
			
			 <form action="" id="contactForm" name="contactForm" method="post" enctype="multipart/form-data"" method="post" class="basic-grey">
     <h1>Log in Here
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
   
    <label>
        <span>Email or Name:</span>
        <input id="emailusername" type="text" name="emailusername" placeholder="Valid Email or Name" required="required"/>
    </label>
   
    <label>
        <span>Password:</span>
         <input id="pass" type="password" name="pass" placeholder="Valid Password" required="required"/>
    </label>
     
     <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" id="frm_submit" value="Login" name="submit"/>
        
         <a href="registration.php">Register new user</a>
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

emailusername = $form.find( 'input[name="emailusername"]' ).val(),
pass= $form.find( 'input[name="pass"]' ).val(),
url = $form.attr( 'action' );
/* Send the data using post */
var posting = $.post( url, { emailusername: emailusername,password: password, } );
/* Put the results in a div */
posting.done(function( data ) {
	alert(data);
	$('#frm_submit').disabled=false;
	$('#frm_submit').val('Login');
	$( '#contactForm' ).each(function(){
	    this.reset();
	});
	});
});
</script>  
		</div>
	</body>
</html>