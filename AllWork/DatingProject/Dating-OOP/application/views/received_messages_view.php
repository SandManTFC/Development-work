<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Received Messages</title>
	<link rel="stylesheet" href="<?php echo base_url('public_html/css/style.css')?>" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
	
		<div>
			<div>
				
			</div>
			<ul>
			<ul>
			
				<li>
					<a href="http://localhost/codeigniter/index.php/search_form">Search</a>
				</li>
				<li>
					<a href="http://localhost/codeigniter/index.php/image">Images</a>
				</li>
				
				<li>
					<a href="http://localhost/codeigniter/index.php/member_dash">Profile</a>
				</li>
				<li class = "selected">
					<a href="http://localhost/codeigniter/index.php/received_messages">Messages</a>
				</li>
				<li>
					<a href="blog.html">Help</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		
		<div class="body">
			<div class="content">
			   <div id="blog">
					<h2>Messages</h2>
					<img src="images/heart.jpg" alt="">
					<p>
						<div class="contact">
				 <ul class="first">
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
							<b>From: </b><form action='http://localhost/codeigniter/index.php/members_profile/fetchMembersProfile' method='post' name='process'>
			              <input type='text' name='members_username' id='members_username' size='25' value="<?=$row->usernamefrom?>"/>
				           <input type='Submit' value='View Profile' />    
                        </form>
						 
       					 <form action='http://localhost/codeigniter/index.php/message/fetch' method='post' name='process'>
         					<input type='hidden' name='username' id='username' size='25'value="<?=$row->username?>" /><br />
         					<input type='hidden' name='usernamefrom' id='usernamefrom' size='25' value="<?=$row->usernamefrom?>"/>                      
        					<input type='Submit' value='View Message' />            
       					 </form>
    
						</ul>
					
				</ul>
 <?php endforeach;}?> 
			
					
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