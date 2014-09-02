<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>

<link rel='stylesheet' type='text/css' href='cssmenu/menu_source/styles.css'/>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script type='text/javascript' src='cssmenu/menu_source/menu_jquery.js''></script>
</head>
<body>


<div data-role="page" id="pageone">
  <div data-role="header" data-theme="b">
    <h1>Insert Page Title Here</h1>
    <div data-role="navbar">
    
      <ul>
        <li><a href="#pageone">Page One</a></li>
        <li><a href="#register">Register</a></li>
        <li><a href="#pagethree">Log-in</a></li>
      </ul>
    </div>
  </div>

  
 <div data-role="main" class="ui-content">
    <p>Insert Content Here</p>
    <a href="#" class="ui-btn">Button</a>
    <p>Insert <a href="#">link</a> here!</p>
  </div>

<div data-role="footer" data-theme="b">
    <h1>Insert Footer Text Here</h1>
  </div>
</div> 




<div data-role="page" id="pageone">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>
  <div data-role="main" class="ui-content">
    <p>Welcome! If you click on the link below, it will take you to Page Two.</p>
    <a href="#pagetwo">Go to Page Two</a>
  </div>
  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 



<div data-role="page" id="register">
  <div data-role="header">
    <h1>Welcome</h1>
  </div>

  <div data-role="main" class="ui-content">
   
  <div data-role="header">
  <h1>Register!</h1>
  </div>
  <div data-role="main" class="ui-content">
  
  </div>
</div>
    <a href="#pagethree">Go to Page three</a>
  </div>
  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 





<div data-role="page" id="pagethree">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>
  <div data-role="main" class="ui-content">
    <p>This is Page Three. If you click on the link below, it will take you to Page One.</p>
    <a href="#pagefour">Go to Page four</a>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 

<div data-role="page" id="pagefour">
  <div data-role="header">
    <h1>Welcome To My Homepage</h1>
  </div>

  <div data-role="main" class="ui-content">
    <p>This is Page four. If you click on the link below, it will take you to Page One.</p>
    <a href="#pagethree">Go to Page Three</a>
  </div>

  <div data-role="footer">
    <h1>Footer Text</h1>
  </div>
</div> 

</body>
</html>
