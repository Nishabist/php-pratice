<?php
session_start();

if(!isset($_SESSION['id'])){
    header('Location:login.php');
    exit();
}
require_once 'database_connect.php';

if($id=$_GET['id']){
    $sql ="Delete from student WHERE id= $id";
    if($conn->query($sql)===TRUE){
        header("Location:select.php?success=Record deleted sucessfully");
        exit();
      }
      else{
          echo "Error updating record:".$conn->error;
      }
    }

?>
