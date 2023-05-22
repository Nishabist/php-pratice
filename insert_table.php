<?php
require_once 'database_connect.php';
$sql="Insert into student(name,program,email,address,rollno)
values('Nisha Bist','Bsc.CSIT','nishubist220@gmail.com','Bedkot 04',21)";
if($conn->query($sql)===TRUE){
    echo"Record inserted sucessfully";
}
else{
    echo"Error inserting record:".$conn->error;
}
?>
