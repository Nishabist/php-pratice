<?php
require_once'database_connect.php';
if(isset($_POST['name'])){
    $name=$_POST['name'];
    $program=$_POST['program'];
    $address=$_POST['address'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    
    $sql ="UPDATE student SET name='$name',program='$program',address='$address',email='$email',rollno='$rollno'
    WHERE id=$id";

    if($conn->query($sql)==TRUE){
      //  echo "Record updated sucessfully";
      header("Location:select.php?success=Record updated sucessfully");
      exit();
    }
    else{
        echo "Error updating record:".$conn->error;
    }
}



$id=$_GET['id'];
$sql="SELECT * from student WHERE id=$id";
$result=$conn->query($sql);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
}

// //close database connection
 $conn->close();

 ?>



<form name="student" action="" method="POST" >
      <label>   Name </label><input  type="text"  name="name" value="<?php echo $row["name"];?>"><br><br>
    
       <label> program:</label><select  name="program">
                <option value="Bsc.csit" <?php if($row['program'] == 'Bsc.csit'){ echo 'selected'; } ?>>Bsc.csit</option>
                <option value="Engineering" <?php if($row['program']=='Engineering'){echo 'selected';}?>>Engineering</option>
                <option value="Management"<?php if($row['program']=='Management'){echo 'selected';}?>>Management</option></select><br>
          <label>  address:</label> <input type="text"  name="address" value="<?php echo $row["address"];?>"><br>
           <label> email</label> <input type="text"  name="email" value="<?php echo $row["email"];?>"><br><br>
        <label>rollNumber</label><input type="number" name="rollno"  value="<?php echo $row["rollno"];?>"><br><br>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
       <button>Update</button>
        
    </form>
