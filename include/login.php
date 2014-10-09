<?php
session_start();
if (isset($_POST['password'])){
    if ($_POST['password'] == ADMIN_PW) {
        $_SESSION['pw'] = $_POST['password'];
        if (isset($_POST['mm'])) {
            header("Location:middleman.php");
        } elseif (isset($_POST['target'])) {
            header("Location:target.php");
        } else {
            session_destroy();
        }
    } else {
        session_destroy();
    }
}
?>