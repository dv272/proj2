<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 11/27/17
 * Time: 5:32 PM
 */


//each page extends controller and the index.php?page=tasks causes the controller to be called
class tasksController extends http\controller
{
    //each method in the controller is named an action.
    //to call the show function the url is index.php?page=task&action=show
    public static function show()
    {
        $record = todos::findOne($_REQUEST['id']);
        self::getTemplate('show_task', $record);
    }

    //to call the show function the url is index.php?page=task&action=list_task

    public static function all()
    {
        $records = todos::findAll();
        session_start();
           if(key_exists('userID',$_SESSION)) {
               $userID = $_SESSION['userID'];

				$records = todos::findTasksbyID($userID);
        
        		self::getTemplate('all_tasks', $records);
           } else {

               echo '<h1>you must be logged in to view tasks</h1>';
           }

    }
    //to call the show function the url is called with a post to: index.php?page=task&action=create
    //this is a function to create new tasks

    //you should check the notes on the project posted in moodle for how to use active record here

    public static function create()
    {
        if(isset($_POST['message'])) 
        {
        	session_start();
			$task = new todo();
			$user = accounts::findUserbyID($_SESSION['userID']);
			$task->id = '';
			$task->createddate = $_POST['createddate'];
			$task->message = $_POST['message'];
			$task->duedate = $_POST['duedate'];
			$task->ownerid = $user->id;
			$task->owneremail = $user->email;
			$task->isdone = 0;
			$task->save();
			header("Location: index.php?page=tasks&action=all");
        } 
        else
        {
        	self::getTemplate('new_task');
        }
    }

    //this is the function to view edit record form
    public static function edit()
    {
        $record = todos::findOne($_REQUEST['id']);

        self::getTemplate('edit_task', $record);

    }

    //this would be for the post for sending the task edit form
    public static function store()
    {


        $record = todos::findOne($_REQUEST['id']);
       // $record->body = $_REQUEST['body'];
       	$record->id = $_REQUEST['id'];
       	$record->message = $_POST['message'];
        $record->ownerid = $_POST['ownerid'];
        $record->owneremail = $_POST['owneremail'];
        $record->createddate = $_POST['createddate'];
        $record->duedate = $_POST['duedate'];
        $record->isdone = intval($_POST['isdone']);
        print_r($record->isdone);
       	//print_r($_POST);
       	//print_r($record);
        $record->save();
		header("Location: index.php?page=tasks&action=all");
    }

    public static function save() {
        session_start();
        $task = new todo();

        $task->body = $_POST['body'];
        $task->ownerid = $_SESSION['userID'];
        $task->save();

    }

    //this is the delete function.  You actually return the edit form and then there should be 2 forms on that.
    //One form is the todo and the other is just for the delete button
    public static function delete()
    {
        $record = todos::findOne($_REQUEST['id']);
        $record->delete();
		header("Location: index.php?page=tasks&action=all");
    }
    
    

}