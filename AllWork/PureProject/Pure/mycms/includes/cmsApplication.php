<?php
    require_once('cmsBase.php');
    class CmsApplication extends CmsBase{
        //here we can write as many functions as we want and those functions will be called by user directly.
        function run()
        {
            $method=(isset($_REQUEST['task']))?$_REQUEST['task']:'display';
            $this->$method();
        }
        function display()
        {
            echo 'this is base display';
        }
 
    }
?>



