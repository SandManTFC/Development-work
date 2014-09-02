<?php $user = $this->session->userdata('username')?>

<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Services - Cardiology Website Template</title>
	<link rel="stylesheet" href="<?php echo base_url('public_html/css/style.css')?>" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
	<script type="text/javascript">

function checkIt(f)
{   
if (f.elements['message'].length < 10)   
{      
alert('Message to short, please make it longer');
     return false;   
}   
return true;
}


   
 

 
</script>
	
</head>
<body>
	<div id="header">
		<div>
			
			<ul>
				<li class="selected">
					<a href="<?php echo site_url('members_profile'); ?>">Searched Members</a>
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
	<?php foreach($data_array as $row):?> 
		<div id="content">
			<div id="sidebar">
			
			
					 
	<?php
	function is_empty_dir($dir)
	{
		if (($files = @scandir($dir)) && count($files) <= 2) {
			return true;
		}
		return false;
	}
	
	
	
	
    $user = $row->username;
    $userdir = "assets/uploads/main/users/".$user."/";
    
    if (file_exists($userdir))
    {
    
    if(!is_empty_dir($userdir))
     {
 	$images = scandir($userdir);
 	$i = rand(2, sizeof($images)-1);
 	$location = "http://localhost/codeigniter/assets/uploads/main/users/".$user."/";
 	
 	?>
 	    <img src="<?php echo $location?><?php echo $images[$i]; ?>" alt="" />
 	    <?php 
 }
 else 
{
	?>
	<img src="http://localhost/codeigniter/public_html/images/small.jpg" alt="">
	<?php 
}
    }
else 
{
?>
	<img src="http://localhost/codeigniter/public_html/images/small.jpg" alt="">
	<?php 
	
    }
   ?>
			
			
				<h3><?=$row->username?></h3>
					
				
				
					
					
			</div>
				<div class="content">
			<div id="section">
			<p>					
				<b>Looking for</b>
						</p>
				<h2><?=$row->lookingfor?></h2>
				
				
				<p>
						
							<b>Age: </b><span><?=$row->Age?></span>
						</p>
						<p>
							<b>Town: </b><span><?=$row->town?></span>
						</p>
				
				<p>
				
							<b>About Me: </b><span><?=$row->About?></span>
						
						<div class="comment">
						
					   
					
					<form method="post" action="<?php echo site_url('add_message/insertMessageProcess')?>" method="post" name="sForm" onSubmit="return checkIt(this);">	
			        <input type='hidden' name='username' id='username' size='25' value="<?=$row->username?>"/>
			        <input type='hidden' name='usernamefrom' id='usernamefrom' size='25' value="<?=$user?>"/>
			        <span class="required"><label for="message"></label></span> 
			        <textarea rows="4" cols="50" name='message' id='message' size='25' value=""/></textarea><?php echo form_error('message'); ?>    
			        <input type="submit" value="Submit">
				  </form>
					
					
				</div>
				
			</div>
			
				</p>
                 
                	
			
		</div>
	</div>
	
	<?php  endforeach;?> 
	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.html">Cardio Center</a>
			</p>
			<ul>
				<li>
					<a href="index.html">home</a>
				</li>
				<li>
					<a href="about.html">about</a>
				</li>
				<li>
					<a href="doctors.html">our doctors</a>
				</li>
				<li>
					<a href="services.html">services</a>
				</li>
				<li>
					<a href="forms.html">forms</a>
				</li>
				<li>
					<a href="contact.html">contact</a>
				</li>
				<li>
					<a href="blog.html">blog</a>
				</li>
			</ul>
			
		</div>
	</div>
	
	
	
	
	

</body>
</html>