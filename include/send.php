<?php
$status = 0;
if (isset($_POST['submit'])) {


    // GET IP
    include "ip.php";
    $ip = ip2long(get_ip());

    // START CHECKING FOR ERRORS
    if (isset($_POST['message']) and !empty($_POST['message'])) {
        $message = $_POST['message'];
    } else {
        $status = 3;
    }

    $timestamp = time();
    $spamtimer = $timestamp - SPAMTIMER;
    $duplicatetimer = $timestamp - DUPLICATTIMER;
    // Connect to DB
    $DB = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DB.';charset=utf8', DB_USER, DB_PW);

    // Spam timer
    if ($status == 0) {
        $query = $DB->prepare("SELECT ip FROM questions WHERE ip = ? and timestamp > ? LIMIT 1");
        if ($query->execute(array($ip, $spamtimer))) {
            $row = $query->fetchAll();
            if ($row) {
                $status = 5;
            }
        } else {
            $status = 2;
        }
    }

    // Spam by ip
    if ($status == 0) {
        $query = $DB->prepare("SELECT ip FROM questions WHERE ip = ? and question = ? and timestamp > ? LIMIT 1");
        if ($query->execute(array($ip, $message, $duplicatetimer))) {
            $row = $query->fetchAll();
            if ($row) {
                $status = 4;
            }
        } else {
            $status = 9;
        }
    }

    // Try send
    if ($status == 0) {
        send($ip, $message);
    }
    status($status);

    //var_dump($_POST);

}

function send($ip, $message) {
    global $status;
    global $DB;
    global $timestamp;
    $query = $DB->prepare("INSERT INTO questions (ip, question, timestamp, lastupdate) VALUES (?, ?, ?, ?) ");
    if ($query->execute(array($ip, htmlspecialchars($message), $timestamp, $timestamp))) {
        $status = 1;
    } else {
        $status = 2;
    }
}

function status($status){
    if ($status != 0) {
        if ($status == 1) {
            //success
            ?>
                <div class="alert alert-dismissable alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    Message successfully sent!
                </div>
            <?php
        } else {
            //switch between different errors
            $error = "Unknown error, contact developer!";
            switch ($status) {
                case 2:
                    $error = "CRITICAL ERROR: Error connecting to database!";
                    break;
                case 3:
                    $error = "Please enter a question or a comment!";
                    break;
                case 4:
                    $error = "You have already sent this message, you must wait ".DUPLICATTIMER." seconds before sending it again!";
                    break;
                case 5:
                    $error = "You have to wait ".SPAMTIMER." seconds between two submitions!";
                    break;
                case 6:
                    $error = "You have been banned from making sumbitions!";
                    break;
                default:
                    $error = "Something went wrong, but noone knows what!";
            }
            ?>
            <div class="alert alert-dismissable alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
            <?php echo $error; ?>
            </div>
            <?php
        }
    }
}
?>