<?php 
function is_empty_dir($dir)
{
	if (($files = @scandir($dir)) && count($files) <= 2) {
		return true;
	}
	return false;
}
	?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Search Results</title>
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
		
		<div class="body">
			<div class="content">
			   <div id="blog">
				 
					<?php foreach($data_array as $row):?> 
				
					<ul>
					<li>
					<p>
					 <b>lookingfor: </b><span><?=$row->lookingfor?></span>
					 </p>
					<p>
					<?php
	
					
	
	
	
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
					
					
					</p>
					
	         			<p>
							<b>Username: </b><span><?=$row->username?></span>				
						</p>
						<p>
							<b>Age: </b><span><?=$row->Age?></span>
						</p>
						 <p>
							<b>Town: </b><span><?=$row->town?></span>
						</p>
						    
                            <form action='http://localhost/codeigniter/index.php/members_profile/fetchMembersProfile' method='post' name='process'>
			                <input type='hidden' name='members_username' id='members_username' size='25' value="<?=$row->username?>"/>
				           <input type='Submit' value='View Profile' />    
                        </form>
						</li>
						
					</ul>
					<?php endforeach;?> 
				
			</div>
		
	  </div>
</body>
</html>