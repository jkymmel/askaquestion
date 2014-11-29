
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Johannes Kümmel">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
    include "include/login.php";
    ?>
    <form method="post" role="form">
        <div class="row">
            <div class="col-xs-12">
                <fieldset>
                    <div class="well">
                        <div class="form-group">
                            <label class="control-label" for="password">Enter Password!</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="password">
                        </div>
                        <div class="form-group">
                            <button type="submit"  name="mm" class="btn btn-success">I'm a middleman!</button>
                            <button type="submit"  name="target" class="btn btn-success">I'm a target!</button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </form>
</div>
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>