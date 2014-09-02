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
 			<form action="<?php echo site_url('help_form/SendHelpMessage'); ?>" id="contactForm" name="contactForm" method="post" enctype="multipart/form-data">
			<h1>Contact Us</h1> 
            <label for="name">Name:</label>
			<input type="text" name="name" value="" required="required" /> 
			 
			<label for="email">Email:</label> 
			<input type="email" name="email" value="" required="required" /> 
			 
			
             
			<label for="message">Message:</label> 
			<textarea name="message" rows="10" cols="30" required="required"></textarea>       
			 
			<input type="submit" id="frm_submit" value="Submit Message" name="submit" class="submit"   />     
		 
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
															
														

<p>We liaise closely with our customers in order to guarantee complete satisfaction and peace of mind.</p>

<p>No job is too big or too small and all our work carries our full guarantee.</p>


<p>Proper preparation is perhaps the most essential part of any project.</p>


															


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
