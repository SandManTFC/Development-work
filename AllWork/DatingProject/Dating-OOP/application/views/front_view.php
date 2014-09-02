<?php if(($this->session->userdata('username')!=""))
  {
   $this->load->view('member_dash_view.php');
  }
  ?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Welcome- Totally Free UK Dating</title>
	 <meta name="viewport" content="width=device-width,initial-scale=1" />     
	
	<link rel="stylesheet" href="<?php echo base_url('public_html/css/style.css')?>" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
	
</head>
<body>
	<div id="header">
		<div>
		<ul>
			<li class="selected">
					<a href="<?php echo site_url('front'); ?>">TFUKD</a>
				</li>
			
				<li>
					<a href="<?php echo site_url('search_form'); ?>">Search</a>
				</li>
				<li>
					<a href="<?php echo site_url('member_reg')?>">Register</a>
				</li>
			<li>
					<a href="<?php echo site_url('help_form')?>">Help</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div id="section">
				
					
				<div class="article">
					<h2>Welcome to Totally Free UK Dating</h2>
					
					<p>
						
				</div>
				<div>
					<b>New members joining every day</b>
					<p>
				You must register to enjoy the free use of this site, it's for all single people of the UK looking for a partner!
				<a href="<?php echo site_url('member_reg')?>" >Register</a>
					</p>
					
				</div>
				<div>
					
					 <img src="<?php echo base_url('public_html/images/couple-loving.jpg') ?>" alt="">
					 
					<p>
					This is a genuine totally free UK dating website. Take a look at our newest members!
					</p>
				
 
					
				</div>
			</div>
			
			<div id="sidebar">
				<div class="search">
				
					
				</div>
				
				<div class="contact">
				 <ul class="first">
					 <form action="<?php echo site_url('front_login/process') ?>" method='post' name='process'>
                <h2>User Login</h2>
    			<?php if(isset($error))
    			{ 
    				echo $error;
    			}?> 
    			<br>
	            <label for='username'>Username</label>
            <input type='text' name='username' id='username' size='25' /><br />
        <p>
            <label for='password'>Password</label>
            <input type='password' name='password' id='password' size='25' /><br />                            
        </p>
            <input type='Submit' value='Login' />            
        </form>
        <span><a href="<?php echo site_url('lost_password_form')?>">Lost Password?</a></span>
						
					</ul>
					
					<ul>
						<li class="office">
							<b>This UK Dating site is completely Free!</b>
							</li>
							<li
							<span>Remember New people joining every day so check back daily</span>
						</li>
						
					</ul>
					
				
				<div>
					<h3>Contact Us.</h3>
					<span>Any queries or help, Click link below!</span>
							<span><a href="http://localhost/codeigniter/index.php/contact">Click here to Contact us.</a>
						</span>
					
				</div>
			</div>
			
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
	</div>
</body>
</html>
