<?php
header("Content-Type: application/json");
include "../config/config.php";
include "user.php";
if (!isset($_POST['fId']) or empty($_POST['fId'])) {
    $fId = 0;
} else {
    $fId = $_POST['fId'];
}
$DB = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DB.';charset=utf8', DB_USER, DB_PW);
$query = $DB->prepare("SELECT * FROM forwarded INNER JOIN questions ON forwarded.tId = questions.id WHERE fId > ?");
if ($query->execute(array($fId))) {
    $rows = $query->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($rows);
    echo json_encode($rows);
} else {
    echo "DB error!";
}