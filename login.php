<?php
session_start();

if(isset($_SESSION['id'])){
    header('Location:select.php');
    exit();
}
require_once'database_connect.php';
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    //$password=md5($_POST('password'));

    $sql="Select * from login where email='$email' and password='$password'";
    
    $result=$conn->query($sql); 
    if($result->num_rows > 0){
        $row=$result->fetch_assoc();
        $_SESSION['id']=$row['id'];
        $_SESSION['email']=$row['email'];
        header("Location:select.php?select=user login sucessfully");
      exit();
    }
    else{
        echo "Error:".$sql ."<br>" .$conn->error;
        $error='Invalid username and password';
    }

    
}

?>

<form action="" method="POST">

 Enter your email address <br> <input type="email" value="" name="email"><br>
 Enter your password  <br> <input type="password" value="" name="password"><br>
 <input type="submit" name="submit" value="Login">
</form>