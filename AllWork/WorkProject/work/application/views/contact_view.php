 <?php include 'header_view.php'; ?>
 	<body>
 		
 		<div id="main">
 		
 		
 		<div id="topcol"><h1></h1>
 		<div id="topmenu">
 		<?php include 'main_menu_view.php'; ?>
 		
 		</div>
 		</div>
 		
 			<div id="rightcol"><h1></h1>
 			<img src="<?php echo base_url('public_html/images/marshallsicon.jpeg')?>" width="150" height="120" alt="" />
 	   
 			</div><!-- <div id="rightcol">-->
 			
 			
 			
 			<div id="centercol"><h1></h1>
 			<div id ="topcentre">
 			<form action="<?php echo site_url('help_form/SendHelpMessage'); ?>" id="contactForm" name="contactForm" method="post" enctype="multipart/form-data"" method="post" class="basic-grey">
    <h1>Contact Form
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Your Name :</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" required="required"/>
    </label>
   
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" required="required"/>
    </label>
   
    <label>
        <span>Message :</span>
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
														
 			
 			
</div>


					
  <div id = "midcentre">


  
  	
</div>
	
</div>
															
														




															


</div>

</div>
 			
 			
 		
 		
 		<br id="footerbr" />
 		
 		
 		
 		
 		</div><!-- <div id="centercol">-->
 		
 		<div id="footer">
 		<?php include 'footer_view.php'; ?>
 		</div><!-- <div id="footer">-->
 		</div><!-- <div id="main">-->
 	</body>
 
 </html> 
