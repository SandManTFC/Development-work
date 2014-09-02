<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Help form</title>
	<link rel="stylesheet" href="<?php echo base_url('public_html/css/style.css')?>" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			
			<ul>
				<li>
					<a href="<?php echo site_url('front'); ?>">TFUKD</a>
				</li>
			
				<li>
					<a href="<?php echo site_url('search_form'); ?>">Search</a>
				</li>
				<li>
					<a href="<?php echo site_url('member_reg')?>">Register</a>
				</li>
			    <li class="selected">
					<a href="<?php echo site_url('help_form')?>">Help</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="body">
	
		<div id="content">
		
		  <div class="content">
		  
			<div id="section">
					
						<div class="comment">
						
					   
						   <form action='<?php echo site_url('help_form/SendHelpMessage') ?>' method='post' name='process'>
						   <p>			
				           <b>Your Email</b>
				           </p>
				            <span class="required"><label for="email">Email</label></span> 
				           <input type='text' name='email' id='email' size='25' value=""/><?php echo form_error('email'); ?>
				            <span class="required"><label for="message">Message</label></span> 
			               <textarea rows="4" cols="50" name='message' id='message' size='25' value=""/></textarea><?php echo form_error('message'); ?>
				           <input type='Submit' value='Send Message' />   
				           Thank you.
					</form>
				</div>
				
			</div>
			
				</p>
 		</div>
	</div>
	
	
	<div id="footer">
		<div>
			
			<ul>
				<li>
					<a href="<?php echo site_url('front'); ?>">home</a>
				</li>
				<li>
					<a href="<?php echo site_url('search_form');?>">search</a>
				</li>
				<li>
					<a href="<?php echo site_url('member_reg');?>">register</a>
				</li>
				<li>
					<a href="<?php echo site_url('login');?>">log-in</a>
				</li>
				<li>
					<a href="<?php echo site_url('help_form');?>">help</a>
				</li>
				<li>
					<a href="<?php echo site_url('contact');?>">contact</a>
				</li>
			</ul>
			
		</div>
	</div>
</body>
</html>