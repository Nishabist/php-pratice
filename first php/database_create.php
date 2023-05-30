<?php
//php program to create a databse name student_mis
require_once 'database_connect.php';
//create database
$sql="CREATE DATABASE student_mis";
if($conn->query($sql)===TRUE){
    echo"Database created sucessfully";

}
else{
    echo"Error creating database:".$conn->error;
}
$conn->close();
?>
