<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar-default" id="firstNav">
    <div class="container">
        <ul>
            <i class="fa fa-envelope" aria-hidden="true"><a href="mailto:Example@gmail.com">&nbsp;Example@gmail.com</a></i>
            &nbsp;&nbsp;&nbsp;
            <i class="fa fa-phone"><a href="#">&nbsp;+212 522 56 87 32</a></i>
            <div id="login">
                <li class="trait"><a href="./Admin/index.php?p=login">Login</a></li>
                <li class="traits"><a href="#">Sign Up</a></li>
            </div>
        </ul>
    </div>
</nav><!-- END NAVBAR By LAGZAR Hatim -->
<nav class="nav" id="secondNav">
    <div class="container">
        <div class="site-logo">
            <a href="../Emeraude/"><img src="img/logo.png" alt="" width="250"></a>
        </div>
        <div id="navigation">
            <ul>
                <li><a href="<?='index.php?page=accueil'; ?>">Accueil</a></li>
                <li><a href="<?='index.php?page=service'; ?>">Services</a></li>
                <li><a href="<?='index.php?page=about'; ?>">A propos</a></li>
                <li><a href="<?='#contact'; ?>">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php echo $content; ?>
<section id="contact">
    <div class="container">
        <div class="row row_contact">
            <center><h2 class="heading" id="contact">Contact us</h2></center>
            <div id="contact_form">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Put your Full name here ...">
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control" placeholder="Put your E-mail name here ...">
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Your Message ..."></textarea>
                    </div>
                </div>
                <div id="send_btn">
                    <button type="button" class="btn btn-primary btn-lg">Send</button>
                    <button type="button" class="btn btn-default btn-lg">Clean</button>
                </div>
            </div>
        </div><!--end row contact -->
    </div><!-- end container contact -->
</section><!-- end contact by Hatim -->
<footer>
    <div class="container">
        <p>All rights reserved &copy; 2016</p>
        <p id="sign">Designed BY : <a href="https://facebook.com/HLGeek">LAGZAR Hatim</a></p>
    </div><!-- end container footer -->
</footer><!-- end footer by hatim -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
</body>
</html>