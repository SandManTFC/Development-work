<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <title><?php echo (isset($title)) ? $title : "Welcome to PDL Paving and Groundworks" ?> </title>
<link rel='stylesheet' type='text/css' href="<?php echo base_url('public_html/css/menu_style.css')?>" />
<link rel='stylesheet' type='text/css' href="<?php echo base_url('public_html/css/template_style.css')?>"/>
<link rel='stylesheet' type='text/css' href="<?php echo base_url('public_html/css/image_gallery_style.css')?>"/>
<link rel='stylesheet' type='text/css' href="<?php echo base_url('public_html/css/contact_form_style.css')?>"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

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
message = $form.find( 'textarea[name="message"]' ).val(),
url = $form.attr( 'action' );
/* Send the data using post */
var posting = $.post( url, { name: name,email: email,message: message, } );
/* Put the results in a div */
posting.done(function( data ) {
	alert(data);
	$('#frm_submit').disabled=false;
	$('#frm_submit').val('Submit Message');
	$( '#contactForm' ).each(function(){
	    this.reset();
	});
	});
});
</script>  

</head>
