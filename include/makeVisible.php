<?php
include "../config/config.php";
include "user.php";
if (!isset($_POST['id']) or empty($_POST['id']) or !is_numeric($_POST['id'])) {
    exit;
} else {
    $id = $_POST['id'];
}
$timestamp = time();
$DB = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DB.';charset=utf8', DB_USER, DB_PW);
$query = $DB->prepare("UPDATE questions SET forwarded = 1, lastupdate = ? WHERE id = ?");
$query->bindValue(1, $timestamp, PDO::PARAM_INT);
$query->bindValue(2, (int)$id, PDO::PARAM_INT);
if ($query->execute()) {
    echo "<script>alert('Works!')</script>";
} else {
    echo "DB error!";
}