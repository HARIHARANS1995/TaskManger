<?php
//session_start();
include_once('includes/config.inc.php');
  $con= new mysqli(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD,DB_DATABASE)or die("Could not connect to mysql".mysqli_error($con));
  //$createdby=$_SESSION['createdby'];
  //echo $_POST['data'];
if(isset($_POST['data'])){
  $i=1;
  foreach ($_POST['data'] as $value) {
    // echo $value." ";
    $query="UPDATE task_manager SET A_priority='$i' WHERE t_id='$value' ";

     $q=mysqli_query($con,$query);
    if($q){
      echo "success";
    }
    // Execute statement:
    // UPDATE [Table] SET [Position] = $i WHERE [EntityId] = $value
    $i++;
}



}











?>