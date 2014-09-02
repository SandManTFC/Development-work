<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Images- Totally Free UK Dating</title>
	<link rel="stylesheet" href="http://localhost/codeigniter/public_html/css/style.css" type="text/css">
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
					<a href="http://localhost/codeigniter/index.php/search_form">Search</a>
				</li>
				
				<li class="selected">
					<a href="http://localhost/codeigniter/index.php/images">Images</a>
				</li>
				
				<li>
					<a href="http://localhost/codeigniter/index.php/member_dash">Profile</a>
				</li>
				<li>
					<a href="http://localhost/codeigniter/index.php/received_messages">Messages</a>
				</li>
				<li>
					<a href="blog.html">Help</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="content">
			<div id="section">
				<h2>forms</h2>
				<b>requirements</b>
				<ul>
					<li>
						Sed vehicula dui ac odio dictum a luctus purus aliquam.
					</li>
					<li>
						Suspendisse potenti. Integer feugiat dolor ut odio tincidunt pulvinar.
					</li>
					<li>
						Suspendisse eget mauris sapien, sed convallis purus.
					</li>
					<li>
						Morbi dignissim nunc sed metus faucibus venenatis.
					</li>
					<li>
						Etiam eu purus sit amet velit semper adipiscing non et est.
					</li>
				</ul>
				
				
			</div>
			<div id="sidebar">
				<div class="search">
					<h3>Log Out</h3>
					<form action="http://localhost/codeigniter/index.php/member_reg/logout">
						<input type="submit" name="submit" id="submitBtn" value="Log Out">
					</form>
				</div>
				<div class="contact">
				 <ul class="first">
					
	         			<li class="email">
							<b>Username: </b><span></span>				
						</li>
						<li class="email">
							<b>Age: </b><span></span>
						</li>
						<li class="email">
							<b>Email: </b><span></span>
						</li>
						<li class="email">
							<b>Town: </b><span></span>
						</li>
						<li class="email">
							<b>Postcode: </b><span></span>
						</li>
						
					</ul>
					
					<ul>
						<li class="office">
							<b>Add Image</b><span><?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
							</span>
						</li>
						<li class="telephone">
							804-417-2482
						</li>
						<li class="fax">
							804-417-2483
						</li>
						<li class="email">
							<a href="http://www.freewebsitetemplates.com/misc/contact">info@fl.cardiocenter.com</a>
						</li>
					</ul>
					
				
				<div>
					<h3>office hours:</h3>
					<span>Monday - Friday <span>7:00 a.m. - 4:30 p.m.</span></span> <span>Saturdays &amp; Sundays <span>7:00 a.m. - 12:00 p.m.</span></span>
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
