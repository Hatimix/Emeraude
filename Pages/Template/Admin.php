
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Administration</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/paper.css" rel="stylesheet">
    <style>
        input{
            outline:none;
            width:100%;
        }
        button{
            padding: 10px 20px;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../Admin/index.php">Administration</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="../Admin/index.php?page=login#signin">Se connecter</a></li>
                <li><a href="../Admin/index.php?page=register#signup">S'inscrire</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="text-align: left;padding-top: 80px;width: 40%;">
    <?= $adminContent; ?>
</div><!-- /.container -->
</body>
</html>