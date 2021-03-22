<?php
session_start();
unset($_SESSION['student_dash']); // unset session variable
session_destroy(); // destroy session
header("location:index.php");
?>