<?php
require_once('includes/cmsWidget.php');
class HelloWidget extends CmsWidget{
        //overriding base CmsWidget class display function
    function display()
    {
        $world='all';
        // if parameters array is not empty in other words parameters do exists then assign variable $world a value by that parameter
        if(count($this->parameters)!=0)
        {
            $world=$this->parameters['hello_to'];
        }        
        echo "Hello ".$world;
        //here you can write a complete php application code to be displayed as widget.
    }
}
?>
