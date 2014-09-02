<html>
<head>

<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<link rel='stylesheet' type='text/css' href='<?php echo base_url('public_html/cssmenu/menu_source/styles.css')?>' />
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
	<script type='text/javascript' src='<?php echo base_url('public_html/cssmenu/menu_source/menu_jquery.js')?>'></script>

<style>


div.out
{
top:50px;
width: 95%;
height:95%;
  margin: 30px auto;
  padding: 40px;
  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
background: #ffffff;
}

div.in
{
position:absolute;
left:500px;
top:2px;
width: 50%;
  margin: 30px auto;
  padding: 40px;
  border: solid grey 0px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;

}

div.main
{
position:absolute;
left:100px;
top:170px;
height:70%;
width: 60%;
  margin: 30px auto;
  padding: 40px;
  border:1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
         

}

div.right
{
position:absolute;
left:835px;
top:170px;
width: 25%;
height:70%;
  margin: 30px auto;
  padding: 40px;
   border:1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
overflow:scroll;
}


.horizontaldivider
{
border: 0;
height: 0;
border-top: 1px solid rgba(0, 0, 0, 0.1);
border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}

.verticaldivider
{
    position:absolute;
    left:43%;
    top:10%;
    bottom:80%;
    border-left: 1px solid rgba(0, 0, 0, 0.1);
}

body {
   background: url("<?php echo base_url('public_html/cssmenu/menu_source/images/androidbg.jpg')?>") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
}

body {

    background-color: #fff;

    margin: 30px;

    font-family: Lucida Grande, Verdana, Sans-serif;

    font-size: 14px;

    color: #4F5155;

    }



    a {

    color: #003399;

    background-color: transparent;

    font-weight: normal;

    }



    h1 {

    color: #444;

    background-color: transparent;

    border-bottom: 1px solid #D0D0D0;

    font-size: 16px;

    font-weight: bold;

    margin: 24px 0 2px 0;

    padding: 5px 0 6px 0;

    }



    code {

    font-family: Monaco, Verdana, Sans-serif;

    font-size: 12px;

    background-color: #f9f9f9;

    border: 1px solid #D0D0D0;

    color: #002166;

    display: block;

    margin: 14px 0 14px 0;

    padding: 12px 10px 12px 10px;

    }


</style>
	
	
	
</head>
<body>

<div class="out">
<div class="right">

 <h1>Comments</h1>



    <?php foreach($shout as $shout): ?>



    <code> <b><?php echo $shout->name.' says -';?></b><br><?php echo $shout->shout?></code>

    <?php endforeach; ?>



   



    <p><b>Comment</b></p>

    <form action="http://localhost/portfilio/index.php/port_design/shout" method="post">

    <fieldset>

    <legend>Comment:</legend>

    Name:<input type="text" name="name" />

    Leave Comment:<input type="text" name="shout" />

    Email:<input type="text" name="email" />

    <input type="submit" value="submit" name="submit" />



    </fieldset>

    </form>



</div>
<div class="in">

<div id='cssmenu'>
<ul>
   <li class='has-sub'><a href='index.html'><span>My Portfilio</span></a>
   <ul>
         <li><a href='#'><span>Personal details</span></a></li>
         <li><a href='<?php echo site_url('qualifications'); ?>'><span>IT Qualifications</span></a></li>
         
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Codeigniter</span></a>
      <ul>
         <li><a href='#'><span>Dating Website</span></a></li>
         <li><a href='#'><span>Coming soon</span></a></li>
         
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>CakePhp</span></a>
      <ul>
         <li><a href='#'><span>Coming soon</span></a></li>
         <li class='last'><a href='#'><span>Coming soon</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>Android</span></a>
      <ul>
         <li><a href='#'><span>Dating app</span></a></li>
         <li class='last'><a href='#'><span>Care Agency app</span></a></li>
      </ul>
   </li>
  
</ul>
</div><!--   menu  -->

innercss
</div><!--  inner menu box -->


<div class="verticaldivider"></div>
<div class="main">

main css
</div>

IT Projects Developed by Philip lee
</div><!-- Outer box -->

</body>
</html>
