<?php
require_once('includes/cmsApplication.php');
class RegisterApplication extends CmsApplication{
        function addUser()
        {
            echo 'this will add new tasks to todolist in database';
            echo '<pre>';print_r($_REQUEST);echo '</pre>';
        }
        
        function viewtodolist()
        {
            echo 'this will show all todo tasks from database';
        }
        
        
        function display()
        {
        	$this->displayDashboard();
        }
        
        private function displayDashboard()
        {
        	include_once("register_page_content.php");
        	
            
        }
        
        function addtaskform()
        {
        	?>
               <div>
        <h3>Todolist Application Dashboard</h3>
          <form>
          <input type="hidden" name="app" value="todolist"/>
          <input type="hidden" name="task" value="addtodotask"/>
 
                  <label for="title">Title</label>
          <input type="text" name="title"/>
 
          <label for="desc">Description</label>
          <textarea name="desc"></textarea>
          <input type="submit" value="Add Task"/>            
         </form>
       </div>         

            <?php
            
        }
        
        
}
?>

