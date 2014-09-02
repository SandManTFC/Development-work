<?php
require_once('includes/cmsWidget.php');
class CalculatorWidget extends CmsWidget{
    function display()
    {
      //if use_scientifc parameter is set and its value is true then output scientific calculator
      if(!empty($this->parameters['use_scientific']) and $this->parameters['use_scientific']==true)
      {
        require($this->getWidgetPath().'tmpl/scientific.php');
      }
      else
      {
        require($this->getWidgetPath().'tmpl/default.php');
      }
    }
}
?>

