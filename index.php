
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Johannes Kümmel">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
        <link href="css/font-awesome.min.css" rel="stylesheet">
		<title>Ask a Question?</title>
	</head>
	<body>
		<div class="navbar navbar-default navbar-static-top">
      		<div class="container">
        		<div class="navbar-header">
          			<a href="#" class="navbar-brand">Ask a Question?</a>
        		</div>
      		</div>
    	</div>
    	<div class="container">
    		<?php
            include "config/config.php";
            include "include/send.php";
            ?>
            <div class="wrapper">
                <form method="post" role="form">
                    <div class="row">
                        <div class="col-xs-12">
                            <fieldset>
                                <div class="well">
                                    <div class="form-group">
                                        <label class="control-label" for="message">Message</label>
                                        <input type="text" class="form-control" name="message" id="message" placeholder="Message">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit"  name="submit" class="btn btn-success">Send</button>
                                    </div>
                                </div>
                                <!--<div class="col-xs-12">
                                    <h6 class="text-muted"><a href="http://jkymmel.github.io" target="_blank">jkymmel.github.io</a></h6>
                                </div>-->
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
            <div class="footer container">
                <p>Powered with <i class="fa fa-heart"></i> and <i class="fa fa-coffee"></i> by <span class="">
                <a href="http://of.plandr.ee" class="plandr"> plandr</a>
                </span></p>
            </div>
		</div>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
</html>