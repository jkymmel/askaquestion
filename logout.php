<?php
session_start();
$_SESSION['pw'] = "";
session_destroy();
header("Location:admin.php");