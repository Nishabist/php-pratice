<?php
require_once'database_connect.php';
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $program=$_POST['program'];
    $address=$_POST['address'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email'];

    $sql="INSERT INTO student(name,program,address,rollno,email)
     VALUES ('$name','$program','$address',$rollno,'$email')";

     if($conn->query($sql)===TRUE){
       // echo"New record created sucessfully";
       header("Location:select.php?success=Record added sucessfully");
       exit();
     }else{
        echo"Error:".$sql."<br>".$conn->error;
     }
}
?>

<form action="" method="POST" >
         Name<input  type="text" value="" name="name"><br><br>
    
        program:<select  name="program">
                <option value="Bsc.csit" >Bsc.csit</option>
                <option value="Engineering">Engineering</option>
                <option value="Management">Management</option></select><br>
            address: <input type="text" value="" name="address"><br>
            email <input type="text" value="" name="email"><br><br>
        rollNumber<input type="number" value="" name="rollno"><br><br>
       <button>Submit</button>
        
    </form>