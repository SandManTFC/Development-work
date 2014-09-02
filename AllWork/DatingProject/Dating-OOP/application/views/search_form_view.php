<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Search Members</title>
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
				<li class="selected">
					<a href="<?php echo site_url('search') ?>">Search</a>
				</li>
				<li>
					<a href="<?php echo site_url('image') ?>">Images</a>
				</li>
			
				<li>
					<a href="<?php echo site_url('member_dash') ?>">Profile</a>
				</li>
				<li>
					<a href="<?php echo site_url('received_messages') ?>">Messages</a>
				</li>
				
			</ul>
		</div>
	</div>
	<div id="body">
		

<div class="section">
<div class="aside">
				<h2>Search members</h2>

<?php 

$my_gender = $this->session->userdata('my_gender');
$looking_for_gender = $this->session->userdata('looking_for_gender');
$age_from = $this->session->userdata('age_from');
$age_to = $this->session->userdata('age_to');
$postcode = $this->session->userdata('postcode');
$distance = $this->session->userdata('distance');

$attributes = array('class' => '', 'id' => '');
echo form_open('search_form', $attributes); ?>

<p>
        <span class="required"><label for="my_gender">My Gender</label></span>
        <?php echo form_error('my_gender');$options = array(''  => 'Select',
                                                  'male'    => 'male',
        		                                  'female'    => 'female'
                                                ); 
        echo form_dropdown('my_gender', $options, set_value('my_gender',$my_gender))?>
   </p>                                       
                        
<p>
       <span class="required"><label for="looking_for_gender">looking for Gender</label></span>
        <?php echo form_error('looking_for_gender');$options = array(''  => 'Select',
                                                  'female'    => 'female',
        		                                  'male'    => 'male'
                                                ); 

         echo form_dropdown('looking_for_gender', $options, set_value('looking_for_gender',$looking_for_gender))?>
        
       
        
</p>                                             
                        
<p>
       <span class="required"><label for="age_from">Age_From</label></span>
	   <?php echo form_error('age_from'); ?>
	   <input id="age_from" type="text" name="age_from" maxlength="2" value="<?php echo set_value('age_from',$age_from); ?>"  />
							
	
</p>
<p>
        <span class="required"><label for="age_to">Age_To</label></span>
        <?php echo form_error('age_to'); ?>
        <input id="age_to" type="text" name="age_to" maxlength="2" value="<?php echo set_value('age_to',$age_to); ?>"  />
</p>

<p>
        <span class="required"><label for="postcode">Postcode</label></span>
	    <?php echo form_error('postcode'); ?>
	    <input id="postcode" type="text" name="postcode" maxlength="10" value="<?php  echo set_value('postcode',$postcode);?>"  />
							
	
</p>
<p>
        <span class="required"><label for="distance">Distance is in Miles</label></span>
        <?php echo form_error('distance');$options = array(''  => 'distance',
                                                  '30'    => '30',
        										   '50'    => '50',
        											 '100'    => '100',
        												'200'    => '200',
        		                                         '400'    => '400'
                                                ); 
        echo form_dropdown('distance', $options, set_value('distance',$distance))?>
   </p>                                       
           

<p>
         <br><?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
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