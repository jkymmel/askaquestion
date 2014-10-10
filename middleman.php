
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
                                <th>Delete and Ban</th>
                            </tr>
                            </thead>
                            <tbody id="table">
                            <tr>
                                <td>1</td>
                                <td><strong>Loading...</strong></td>
                                <td>...</td>
                                <td>...</td>
                                <td><a href="#" class="btn btn-success btn-xs">Make Visible</a></td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-xs">Delete</a>
                                    <a href="#" class="btn btn-danger btn-xs">Ban</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/middleget.js"></script>
        <script type="text/javascript">appendRow();</script>
    </body>
</html>