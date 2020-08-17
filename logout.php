<?php
session_start();
session_destroy();
session_start();
$_SESSION['status'] = 0;
header("Location: login.php");
?>