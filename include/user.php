<?php
session_start();
// echo $_SESSION['pw'];
if (isset($_SESSION['pw'])){
    if ($_SESSION['pw'] == ADMIN_PW) {
    } else {
        session_destroy();
        header("Location:admin.php");
    }
} else {
    session_destroy();
    header("Location:admin.php");
}
?>