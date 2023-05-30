<?php
$hour=date("H");
echo"$hour";
if($hour<12){
    echo"Good Morning everybody";
}
elseif($hour<16){
    echo"Good afternoon everybody";
}
elseif($hour<20){
    echo"Good evening everybody";
}
else{
    echo"Good night";
}

?>