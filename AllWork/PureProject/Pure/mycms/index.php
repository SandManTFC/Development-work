<?php
require_once('includes/templateFunctions.php');
$tmpl=new TemplateFunctions();
$tmpl->setWidget('logoPosition','logo');
$tmpl->setWidget('sidebarPosition','hello',array('hello_to'=>'MyCms')); 
$tmpl->setWidget('sidebarPosition','hello');
//$tmpl->setWidget('sidebarPosition','loginform',array('use_cssdesign'=>true));
//$tmpl->setWidget('sidebarPosition','calculator',array('use_scientific'=>true)); 
$tmpl->show();
?>

