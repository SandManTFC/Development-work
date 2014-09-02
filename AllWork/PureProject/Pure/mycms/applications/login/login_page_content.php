<?php
include_once 'includes/psl-config.php';
include_once 'includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}


        
	

	  
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
		
		
			<form action="applications/login/includes/process_login.php" id="contactForm" name="login_form" method="post" enctype="multipart/form-data"" method="post" class="basic-grey">
				<h1>Please fill all the texts in the fields to view the site.</h1>
				  
   
    <label>
        <span>Email:</span>
        <input id="email" type="text" name="email" placeholder="Your Email Address" required="required"/>
    </label>
   
    <label>
        <span>Password:</span>
        <input id="p" type="text" name="p" placeholder="Your Password" required="required" />
    </label>
   
 
     
     <label>
        <span>&nbsp;</span>
        <input type="submit"  onclick="formhash(this.form, this.form.password);"  class="button" value="Login" id="frm_submit"  name="submit"/>
    </label>    
			<form>
		
<p>If you don't have a login, please <a href="register.php">register</a></p>
        <p>If you are done, please <a href="includes/logout.php">log out</a>.</p>
        <p>You are currently logged <?php echo $logged ?>.</p>
	
		

	

	
	
<script>
/* attach a submit handler to the form */
$("#login_form").submit(function(event) {
/* stop form from submitting normally */
event.preventDefault();
/* get some values from elements on the page: */
$('#frm_submit').disabled=true;
$('#frm_submit').val('loading...');
var $form = $( this ),
name = $form.find( 'input[email="email"]' ).val(),
email = $form.find( 'input[p="p"]' ).val(),
url = $form.attr( 'action' );
/* Send the data using post */
var posting = $.post( url, { email: email,p: p} );
/* Put the results in a div */
posting.done(function( data ) {
	alert(data);
	$('#frm_submit').disabled=false;
	$('#frm_submit').val('Login');
	$( '#login_form' ).each(function(){
	    this.reset();
	});
	});
});
</script>  
