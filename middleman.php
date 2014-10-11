
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Ask a Question?</a>
                </div>
                <div class="navbar-collapse navbar-responsive-collapse collapse" style="height: 1px;">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <?php
            include "config/config.php";
            include "include/user.php";
            ?>
            <form method="post" role="form">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-striped table-hover table-condensed">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Message</th>
                                <th>Timestamp</th>
                                <th>IP</th>
                                <th>Visible to Target</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody id="table">

                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/middlelist.js"></script>
        <script src="js/middleget.js"></script>
        <script type="text/javascript">getRows(timestamp);</script>
    </body>
</html>