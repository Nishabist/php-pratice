<?php
echo"We are testing file inclusion using include method";
include 'header.php';
echo"Testing multiple include";
include_once 'header.php';
echo"Testing error";
include 'headee.php';
echo"This line is after the inclusion error";
?>
<!-- include continues it's execution even after error is found -->