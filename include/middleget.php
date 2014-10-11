<?php
header("Content-Type: application/json");
include "../config/config.php";
include "user.php";
if (!isset($_POST['timestamp']) or empty($_POST['timestamp'])) {
	$timestamp = 0;
} else {
	$timestamp = $_POST['timestamp'];
}
$DB = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DB.';charset=utf8', DB_USER, DB_PW);
$query = $DB->prepare("SELECT * FROM questions WHERE id > ?");
if ($query->execute(array($timestamp))) {
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($rows);
    echo json_encode($rows);
} else {
    echo "DB error!";
}