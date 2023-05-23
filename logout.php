<?php
session_start();
unset($_SESSION['id']);
unset($_SESSION['email']);
session_destroy();
header('Location:login.php?select=User logged out successfully');
exit();
?>