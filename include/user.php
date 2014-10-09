<?php
session_start();
if (isset($_SESSION['pw'])){
    if ($_SESSION['pw'] == ADMIN_PW) {
    } else {
        session_destroy();
    }
} else {
    session_destroy();
}
?>