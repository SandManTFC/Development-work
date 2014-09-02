
<form action="<?php echo site_url('help_form/SendHelpMessage'); ?>" id="contactForm" name="contactForm" method="post" enctype="multipart/form-data"" method="post" class="basic-grey">
    <h1>Contact Form
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Name:</span>
        <input id="name" type="text" name="name" placeholder="Your  Name" required="required"/>
    </label>
   
    <label>
        <span>Email:</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" required="required"/>
    </label>
   
    <label>
        <span>Message:</span>
        <textarea id="message" name="message" placeholder="Your Message to Us" required="required"></textarea>
    </label>
     
     <label>
        <span>&nbsp;</span>
        <input type="submit" class="button" value="Send" id="frm_submit" value="Submit Message" name="submit"/>
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
name = $form.find( 'input[name="user"]' ).val(),
email = $form.find( 'input[name="password"]' ).val(),
url = $form.attr( 'action' );
/* Send the data using post */
var posting = $.post( url, { name: name,email: email,message: message, } );
/* Put the results in a div */
posting.done(function( data ) {
	alert(data);
	$('#frm_submit').disabled=false;
	$('#frm_submit').val('Signin');
	$( '#contactForm' ).each(function(){
	    this.reset();
	});
	});
});
</script>  