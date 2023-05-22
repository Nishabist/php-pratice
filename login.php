<?php
require_once'database_connect.php';
if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO login(email,password)
    VALUES('$email','$password')";

if($conn->query($sql)===TRUE){
     //echo"New record created sucessfully";
     header("Location:select_login.php?select=Record added sucessfully");
      exit();
}else{
    echo"Error:".$sql."<br>".$conn->error;
}
}

?>

<form action="" method="POST">

 Enter your email address <br> <input type="email" value="" name="email"><br>
 Enter your password  <br> <input type="password" value="" name="password"><br>
 <button>Submit</button>
</form>