<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Help form</title>
	<link rel="stylesheet" href="http://localhost/codeigniter/public_html/css/style.css" type="text/css">
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
			 Enter your email address below, Thank you.
			 <br>
     <form action='<?php echo site_url('lost_password') ?> method='POST'>
     <input type='text' name='remail'>
     <input type='submit' value='Submit'>
     </form>
	 <br>
	  Password will be sent to this Email address.
				</div>				
			</div>		
				
 		</div>
	</div>
	
	
	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.html">Cardio Center</a>
			</p>
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