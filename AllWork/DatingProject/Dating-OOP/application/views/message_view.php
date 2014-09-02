<?php $user = $this->session->userdata('username')?>

<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Cardiology Website Template</title>
	<link rel="stylesheet" href="<?php echo base_url('public_html/css/style.css')?>" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="<?php echo base_url('public_html/balupton-jquery-scrollto-a30313e/jquery-scrollto/vendor/jquery.js')?>"></script>
	<script src="<?php echo base_url('public_html/balupton-jquery-scrollto-a30313e/jquery-scrollto/lib/jquery-scrollto.js')?>"></script>
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
	
	<script type="text/javascript">
	function scrollToElement(selector, time, verticalOffset) 
	{
    time = typeof(time) != 'undefined' ? time : 1000;
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $(selector);
    offset = element.offset();
    offsetTop = offset.top + verticalOffset;
    $('html, body').animate({
        scrollTop: offsetTop
    }, time);

}

	$(document).ready(function(){
	 	
		scrollToElement('#point', 500, -150); 

		});
	
	</script>
</head>
<body>
	<div id="header">
		<div>
			<div>
				
			</div>
			<ul>
				<li class="selected">
					<a href="<?php echo site_url('message'); ?>">Messages</a>
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
			<div id="blog">
				
				  
				<small><a href="http://localhost/codeigniter/index.php/delete_messages/deleteAllMessages">Click here To Delete all messages Below</a></small> 
				<p>
				 <?php if(isset($error))
    			{ 
    				echo $error;
    			}
    			else
    			{
				foreach($data_array as $row):
				
				?> 
				
					<ul>
					
	         		
						<li class="email">
							<span><font color="red"><?=$row->usernamefrom?></font></span>
						</li>
					
						<li class="email">
							<span><?=$row->message?></span>
							<p><font size="1"><?=$row->dateT?></font></p>
							
						</li>
						
					</ul>
						</p>
					<?php 
					
					endforeach;
					
    			
    			?>
				
				           
				<div class="comment">
						<h3>Type Message Below</h3>
					   
						<form action='http://localhost/codeigniter/index.php/add_message/insertMessageProcess' method='post' name='process'>
			              <input type='hidden' name='username' id='username' size='25' value="<?=$row->username?>"/>
			              <input type='hidden' name='usernamefrom' id='usernamefrom' size='25' value="<?=$user?>"/>
			              <textarea rows="4" cols="50" name='message' id='message' size='25' value=""/></textarea>
				           <input type='Submit' value='Send Message' />   
				           
					</form>
					<form action='http://localhost/codeigniter/index.php/delete_messages/deleteAllMessages' method='post' name='process'>
			              <input type='hidden' name='username' id='username' size='25' value="<?=$user?>"/>
			              <input type='hidden' name='usernamefrom' id='usernamefrom' size='25' value="<?=$row->usernamefrom?>"/>
			              
				           <input type='Submit' value='Delete All Messages' />
					<?php 
					
    			}
					
    			
    			?>
				
					<div id = "point"></div>
				</div>
				
			</div>
			
			<div id="sidebar">
				<div class="search">
					<h3>search</h3>
					<form action="index.html">
						<input type="text" name="search" id="search" value="Search here...">
						<input type="hidden" name="submit" id="submitBtn" value="">
					</form>
				</div>
				<div class="category">
					<h3>blog categories</h3>
					<ul>
						<li>
							<a href="blog-single.html">health factors</a>
						</li>
						<li>
							<a href="blog-single.html">preventive tips</a>
						</li>
						<li>
							<a href="blog-single.html">medical education</a>
						</li>
						<li>
							<a href="blog-single.html">families in general</a>
						</li>
						<li>
							<a href="blog-single.html">babies and mommies</a>
						</li>
					</ul>
				</div>
				<div class="posts">
					<h3>popular blog posts</h3>
					<ul>
						<li>
							<a href="blog-single.html">Keeping Yourself Away From Parasites</a>
						</li>
						<li>
							<a href="blog-single.html">Neurological Problems You Should Watch Out For</a>
						</li>
						<li>
							<a href="blog-single.html">Planning On Having A Baby? Get Fertile Now!</a>
						</li>
					</ul>
				</div>
				<div class="tweets">
					<h3>recent tweets</h3>
					<ul>
						<li>
							<a href="#">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec suscipit nibh diam, quis sodales turpis. <i>(30 mins ago)</i></a>
						</li>
						<li>
							<a href="#poo">In non erat ac ante commodo lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed imperdiet arcu ut massa fermentum non porttitor mi pretium. <i>(1 hour ago)</i></a>
						</li>
					</ul>
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
			<div>
				<span>stay connected:</span>
				<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook">facebook</a>
				<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a>
				<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">googleplus</a>
			</div>
		</div>
	</div>
	

</body>
</html>
