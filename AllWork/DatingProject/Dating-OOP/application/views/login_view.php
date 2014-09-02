<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Log in</title>
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
					
				<div class="contact">
				 <ul class="first">
						<div class="comment">
						 <form action="<?php echo site_url('front_login/process') ?>" method='post' name='process'>
                <h2>User Login</h2>
    			<?php if(isset($error))
    			{ 
    				echo $error;
    			}?> 
    			
	            <span><label for='username'>Username</label><input type='text' name='username' id='username' size='25' /></span>
                <span><label for='password'>Password</label><input type='password' name='password' id='password' size='25' /></span>                     
            <input type='Submit' value='Login' />            
        </form>
        <span><a href="<?php echo site_url('lost_password_form')?>">Lost Password?</a></span>
						
					</ul>
					   
						   
				</div>
				
			</div>
			
				</p>
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