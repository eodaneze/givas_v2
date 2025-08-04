<?php 
   session_start();
   require_once('../../inc/config/connection.php');
   if(isset($_GET['id'])){
       $agent_id = $_GET['id'];
       
       $sql = "DELETE FROM agent WHERE id = '$agent_id'";
       $result = mysqli_query($conn, $sql);
       if($result){
           
           $_SESSION['success'] = 'Agent have been deleted successfully';
           header('location: ../add-agent');
       }else{
           $_SESSION['error'] = 'Error deleting agent';
           header('location: ../add-agent');
       }
       
       
   }
?>