<?php
if (isset($_POST['submit'])) {
	include "config/config.php";

	// GET IP
	if (!($ip = getenv('HTTP_CLIENT_IP'))) {
   		$ip = getenv('REMOTE_ADDR');
	}

	$timestamp = time();

	$DB = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DB.';charset=utf8', DB_USER, DB_PW);
	$query = $DB->prepare("INSERT INTO questions (ip, question, timestamp)
	VALUES (?, ?, ?) ");
	$query->execute(array($ip, $_POST['message'], $time));
}