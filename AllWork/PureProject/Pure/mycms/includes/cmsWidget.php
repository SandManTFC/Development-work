<?php
require_once('cmsBase.php');
class CmsWidget extends CmsBase{
    var $widgetPath='';
    var $widgetName='';
    function setWidgetPath($widgetName)
    {
        //here will be logic to set path to widget file which is extending CmsWidget class.
    	$this->widgetPath='widgets/'.$widgetName.'/';
    	$this->widgetName=$widgetName;
    	
    }
    function getWidgetPath()
    {
        return $this->widgetPath;
    }
    
    function display()
    {
    	echo 'this will be default output of widget if this function is not overrided by derived class';
    }
    

	function run($widgetName,$params)// this function will be called by template function class to display widget
	{
		$this->parameters=$params;
		$this->setWidgetPath($widgetName);
		$this->display();
	}

}
?>
