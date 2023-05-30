<?php


if(isset($_GET['success'])){
    echo'<h2 style=" border:1px solid blue;color:blue;padding:5px;text-align:center;">'.$_GET['success'].'</h2>';
}
require_once 'database_connect.php';
$sql="SELECT * from student";
$result =$conn->query($sql);


if($result->num_rows>0){
    //output data from each row
    echo'<a href="login.php" >Admin Login</a>';
    echo' <h1>Student Record</h1>';
    echo'<table cellspacing="10px" cellpadding="10px">';
    echo '<tr><th>S.N</th><th>Name</th><th>Program</th><th>Address</th><th>Rollno</th><th>email</th><tr>'
    ;
    $i=1;
    while($row=$result->fetch_assoc()){
        echo'<tr><td>'.$i.'</td>'.'<td>'.$row["name"].'</td>';
        echo'<td>'.$row["program"].'</td>';
        echo'<td>'.$row["email"].'</td>';
        echo'<td>'.$row["address"].'</td>';
        echo'<td>'.$row["rollno"].'</td>';
       
        echo'</tr>';
        $i++;

    }
    echo'</table>';
}else{
    echo"0 results";
}
$conn->close();
?>

<style>
    
    a{
        text-decoration:none;
        color:black;
        
        display:flex;
        justify-content: center;        
        
    }
    a:hover{
        color:red;
    }
    table{
        border:1px solid black;
        margin:auto;
        background:brown;
        color:#ffff;
    }
    h1{
        display:flex;
        justify-content:center;
    }
    