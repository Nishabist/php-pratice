<?php

if(isset($_GET['select'])){
    echo'<h2 style=" border:1px solid blue;color:blue;padding:5px;text-align:center;">'.$_GET['select'].'</h2>';
}

require_once'database_connect.php';

$sql="SELECT * from login";
$result =$conn->query($sql);

if($result->num_rows>0){
    //output data from each row
    echo'<table cellspacing="10px" cellpadding="10px">';
    echo '<tr><th>S.N</th><th>Email</th><th>Password</th><tr>'
    ;
    $i=1;
    while($row=$result->fetch_assoc()){
        echo'<tr><td>'.$i.'</td>'.'<td>'.$row["email"].'</td>';
        echo'<td>'.$row["password"].'</td>';
       
        echo'</tr>';
        $i++;

    }
    echo'</table>';
}else{
    echo"0 results";
}
$conn->close();
?>