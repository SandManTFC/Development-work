<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Profile- Totally Free UK Dating</title>
	<link rel="stylesheet" href="<?php echo base_url('public_html/css/style.css')?>" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>

	<div id="header">
		<div>
			<div>
				
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				
			</div>
			<ul>
				<li>
					<a href="<?php echo site_url('front')?>">TFUKD</a>
				</li>
				
				<li>
				<li class="selected">
					<a href="<?php echo site_url('member_reg') ?>">Register</a>
				</li>
				<li>
					<a href="<?php echo site_url('search_form') ?>">Search</a>
				</li>
				<li>
					<a href="<?php echo site_url('help_form')?>">Help</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
	


<div class="section">
<div class="aside">
<p>
<div class="reg_form">

<p><h2>You must Register to use this site for free</h2></p>
	<br>

  <form action="<?php echo site_url('member_reg/registration')?>" method='post'>
  
  
  <?php if(isset($error))
    			{ 
    				echo $error;
    				
    			}?> 
  <p>
  <span class="required"><label for="username">Username</label></span> 
	    <input id="username" type="text" name="username" maxlength="20" value="<?php echo set_value('username'); ?>"/><?php echo form_error('username'); ?>
  </p>
  <p>
  <span class="required"><label for="email">Email</label></span> 
	    <input id="email" type="text" name="email" maxlength="20" value="<?php echo set_value('email'); ?>"/><?php echo form_error('email'); ?>
  </p>
   <p>
  <span class="required"><label for="emailconf">Email Confirmation</label></span> 
	    <input id="emailconf" type="text" name="emailconf" maxlength="20" value="<?php echo set_value('emailconf'); ?>"/><?php echo form_error('emailconf'); ?>
  </p>
  <p>
 <span class="required"><label for="password">Password</label></span> 
	    <input id="password" type="password" name="password" maxlength="15" value="<?php echo set_value('password'); ?>"/><?php echo form_error('password'); ?>
  </p>
  <p>
  <span class="required"><label for="passconf">Password Confirmation</label></span> 
	    <input id="passconf" type="password" name="passconf" maxlength="15" value="<?php echo set_value('passconf'); ?>"/><?php echo form_error('passconf'); ?>
  </p>
  <p>
 <span class="required"><label for="age">Age</label></span> 
	    <input id="age" type="text" name="age" maxlength="2" value="<?php echo set_value('age'); ?>"/><?php echo form_error('age'); ?>
  </p>
  <p>
  <span class="required"><label for="town">Town</label></span> 
	    <input id="town" type="text" name="town" maxlength="10" value="<?php echo set_value('town'); ?>"/><?php echo form_error('town'); ?>
  </p>
   <p>
   <span class="required"><label for="postcode">Postcode</label></span> 
	    <input id="postcode" type="text" name="postcode" maxlength="12" value="<?php echo set_value('postcode'); ?>"/><?php echo form_error('postcode'); ?>
  </p>
  <p>
   <span class="required"> <label for="gender">Gender</label></span> 
  <input type="radio" name="gender" checked="checked" value="male">Male</input>
  <input type="radio" name="gender" value="female">Female</input><?php echo form_error('gender'); ?>
  </p>
  <p>
  <input type="submit" class="greenButton" value="Submit" />
  </p>
  
  </div>
</form>

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
	
	</div>
	</div>
	
</body>
</html>

