<?php
require_once'database_connect.php';
//sql to create a table
$sql="CREATE TABLE login(
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     email VARCHAR(50) NOT NULL,
     password VARCHAR(70) NOT NULL
     )";
    if ($conn->query($sql)===TRUE){
        echo"login table created sucessfully";
    }
    else{
        echo"Error creating table:".$conn->error;
    }
    ?>