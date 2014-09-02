<?php
require_once('includes/cmsApplication.php');
class LogInApplication extends CmsApplication

{
        
        
        function display()
        {
        	$this->displayDashboard();
        }
        
        private function displayDashboard()
        {
        	
        	
        	include_once("simple_login_page_content.php");
        	
        	
        }
        
       
        
        
}
?>


