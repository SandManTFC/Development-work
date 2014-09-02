<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Login Form</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="<?php echo $this->getCurrentTemplatePath();?>css/contact_form_style.css">
	<link rel="stylesheet" href="<?php echo $this->getCurrentTemplatePath();?>css/style.css">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/JavaScript" src="<?php echo $this->getCurrentTemplatePath();?>js/sha512.js"></script> 
        <script type="text/JavaScript" src="<?php echo $this->getCurrentTemplatePath();?>js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
 
	</head>
<body>
<div class="wrapper">
    <div class="header"><?php $this->widgetOutput('logoPosition');?></div>
    <div class='clear'></div>
    <div class="sidebar">
       <?php $this->widgetOutput('sidebarPosition');?>
        <br><br><br><br><br><br><br>
    </div>
    <div class='content'>
   
        <?php echo $this->appOutput();?>
        <br><br><br><br><br>
    </div>
    <div class='clear'></div>
    <div class="footer">
        this is footer text                
    </div>
    
    
</div>
</body>
</html>

