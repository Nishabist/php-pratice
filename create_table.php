<?php
require_once'database_connect.php';
//sql to create table
$sql="CREATE TABLE student(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    program VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    address VARCHAR(200),
    rollno INT(6)
    )";
    if ($conn->query($sql)===TRUE){
        echo"Student table created sucessfully";
    }
    else{
        echo"Error creating table:".$conn->error;
    }
    ?>