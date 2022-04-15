<?php
session_start();
session_destroy();
header("location:http://localhost/crud%20system/login.php");
?>