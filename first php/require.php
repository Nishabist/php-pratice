<?php
echo"We are testing file inclusion using include method";
require 'header.php';
echo"Testing multiple include";
require_once 'header.php';
echo"Testing error";
require 'headee.php';
echo"This line is after the inclusion error";
?>
<!-- require stop execution of program if error is found -->