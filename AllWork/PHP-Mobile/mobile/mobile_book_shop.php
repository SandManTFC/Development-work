<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<link rel="stylesheet" href="css/mobile_book.css">
</head>
<body>
<div data-role="page" id="pageone">
  <div data-role="header" data-theme="b">
  
  <div class="ui-grid-b">
  
   <div class="ui-block-a">
        <div data-role="collapsible" data-collapsed-icon="bullets" data-expanded-icon="bullets" data-mini="true">
    <h4>Menu</h4>
    
    <ul data-role="listview">
      <li><a href="#">Adele</a></li>
      <li><a href="#">Agnes</a></li>
    </ul>
    </div>
  
  </div>

 
    
      <div class="ui-block-b">
       
      </div>
      
      
      <div class="ui-block-c">
        
        <span> <button class="ui-btn ui-icon-shop ui-btn-icon-left">Shop Button</button></span>
      </div>
      
    </div>
    
  </div>

<div data-role="page" id="pageone">

  
   
    <div data-role="collapsible" data-collapsed-icon="bullets" data-expanded-icon="bullets" data-mini="true">
    <h4>Menu</h4>
    
    <ul data-role="listview">
      <li><a href="#">Adele</a></li>
      <li><a href="#">Agnes</a></li>
    </ul>
    
    </div>
    
    <form method="post" action="demoform.asp">
      <div class="ui-field-contain">
        <label for="search">Search:</label>
        <input type="search" name="search" id="search" placeholder="Search for content...">
      </div>
      <input type="submit" data-inline="true" value="Submit">
    </form> 
</div>
    
    
  <div data-role="main" class="ui-content" data-mini="true">
<form method="post" action="demoform.asp">
      <div class="ui-field-contain">
        <label for="search">Search:</label>
        <input type="search" name="search" id="search" placeholder="Search for a specific book...">
      </div>
      <input type="submit" data-inline="true" value="Submit">
    </form> 
    </div>
    
  <div data-role="web" class="ui-content">
  <h3>Web Development Books</h3>
  
  A number of old and new web development books for sale. Php,Asp.net,Javascript.
    <div data-role="collapsible">
   
      <h3>View</h3>
      <ul data-role="listview">
      <li><a href="#">PHP</a></li>
      <li><a href="#">MYSQL</a></li>
    </ul>
      
    </div>
  </div>
  
  <div data-role="software" class="ui-content">
  <h3>Software Development Books</h3>
  
  A number of old and new software development books for sale. C++, Java, C#, Visual Basic 5 + 6.
    <div data-role="collapsible">
   
      <h3>View</h3>
      <ul data-role="listview">
      <li><a href="#">C++</a></li>
      <li><a href="#">Java</a></li>
    </ul>
    </div>
  </div>

  <div data-role="footer" data-theme="b">
    <h1><a href="www.phil-lee.co.uk" class="ui-btn">Go to phil-lee.co.uk</a></h1>
  </div>
  
</div>
</body>
</html>