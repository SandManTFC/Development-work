<?php
require_once('includes/cmsApplication.php');
class DefaultApplication extends CmsApplication
{
        function addcontent()
        {
            echo 'here add content functionality will takes place';
        }
        function display()
        {
            echo 'it is default task of application';
        }
        function anothertask()
        {
            echo 'this is another task here can be written a complete php program against that task';
        }
}

?>
