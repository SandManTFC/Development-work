
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
			
			<ul>
		        <li class="selected">
					<a href="<?php echo site_url('member_dash'); ?>">Profile</a>
				</li>
			
				<li>
					<a href="<?php echo site_url('search_form'); ?>">Search</a>
				</li>
				<li>
					<a href="<?php echo site_url('member_reg')?>">Register</a>
				</li>
				<li>
					<a href="<?php echo site_url('image')?>">Image</a>
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
				<h2>Profile</h2>
				<b>Main Profile Picture</b>
				<ul>
				<br>
				

    <?php
    
    function is_dir_empty($dir) {
    	if (!is_readable($dir)) return NULL;
    	return (count(scandir($dir)) == 2);
    }
    
    $user = $this->session->userdata('username');
    $dir = "assets/uploads/thumbs/users/".$user."/";
    
    
    
    if (is_dir_empty($dir)) {
    	echo "Click on the Images page to upload a profile picture!";
    }
    else
{
    	
    
    
   
    
    
   
    $images = scandir($dir);
    $i = rand(2, sizeof($images)-1);
    $location = "http://localhost/codeigniter/assets/uploads/thumbs/users/".$user."/";
   // echo "http://localhost/codeigniter/assets/uploads/main/users/".$user."/";
    ?>
    <img src="<?php echo $location?><?php echo $images[$i]; ?>" alt="" /> <?php }?>
   
				
					<li>
					<br>
						Make your profile stand out as much as possible by adding an profile image and fill in about me section below!
					</li>
					
				</ul>
				
				<div>
				<?php foreach($array_name as $row):?> 
					<b>About Me:</b>
					<p>
					<form action='http://localhost/codeigniter/index.php/add_aboutme/insertAboutMeProcess' method='post' name='process'>
			              <input type='hidden' name='username' id='username' size='25' value="<?=$row->username?>"/>			              
			              <textarea rows="4" cols="50" input type='text' name='aboutme' id='aboutme' size='25' value=""/><?=$row->About?></textarea>
				           <input type='Submit' value='Edit About Me' />   
				           
					</form>
						 </p>
					
				</div>
			</div>
			<div id="sidebar">
				<div class="search">
				
					
					
				</div>
				<div class="contact">
				 <ul class="first">
					
	         			<li class="email">
							<b>Username: </b><span><?=$row->username?></span>				
						</li>
						<li class="email">
							<b>Age: </b><span><?=$row->Age?></span>
						</li>
						<li class="email">
							<b>Email: </b><span><?=$row->email?></span>
						</li>
						<li class="email">
							<b>Town: </b><span><?=$row->town?></span>
						</li>
						<li class="email">
							<b>Postcode: </b><span><?=$row->postcode?></span>
						</li>
						
					</ul>
					
					<ul>
					
						<li class="email">
							<a href="http://www.freewebsitetemplates.com/misc/contact">View Favourites</a>
							</li>
							<li class="email">
							<a href="http://www.freewebsitetemplates.com/misc/contact">View Flirts</a>
							</li>
							<li class="email">
							<a href="http://www.freewebsitetemplates.com/misc/contact">View Messages</a>
							
						</li>
					</ul>
					<?php endforeach;?> 
				
				
					 <form action="http://localhost/codeigniter/index.php/member_reg/logout">
						<input type="submit" name="submit" id="submitBtn" value="Log Out">
					</form></span></span>
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
</body>
</html>