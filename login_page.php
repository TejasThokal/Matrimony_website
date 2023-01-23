<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>The Ideal Wedding: A vow of togetherness</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
  
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link href="css/styler.css" type="text/css" rel="stylesheet" media="all">

    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
    <!-- //online-fonts -->
    <style type="text/css">
        .msg{
                margin-top: 1.5em;
    flex-basis: 100%;
    -webkit-flex-basis: 100%;
        }
    </style>
</head>

<body>
    <!-- banner -->
    <div class="banner">
      
        <div class="container">
            <!-- banner-text -->
            <div class="banner-text" style="padding: 0vw 0 5vw;">
                <div class="slider-info">
                    <h1><a href="index.html"><img src="images/logo.png" width="50%"></a></h1>
                    <div class="sub-main-w3">
        <form action="login.php" method="post" style="background: #000;">
            <h2>login Now
                <i class="fas fa-level-down-alt"></i>
            </h2>

            <?php
            if(isset($_SESSION["msg"])){
            echo "<br><h6 class='msg'>".$_SESSION["msg"]."</h6>";
//            session_unset("msg");
        }
            ?>
            <br><br><br>
            <div class="form-style-agile">
                <label class="col-sm-12">Email
                    <i class="fas fa-user"></i>
                </label>
                <input placeholder="Email" name="email" type="text" required="">
            </div>
            <div class="form-style-agile">
                <label class="col-sm-12">
                    Password
                    <i class="fas fa-unlock-alt"></i>
                </label>
                <input placeholder="Password" name="password" type="password" required="">
            </div>
            Don't have account? <a href="registration.html"> Register Now!</a>
            <!-- //checkbox -->
            <input type="submit" value="Log In">
        </form>
    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- //banner-text -->
     
    <div class="copyright py-3">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <ul class="social-icons scial justify-content-end">
                        <li class="mr-1"><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fa fa-google-plus"></span></a></li>
                        <li class="mx-1"><a href="#"><span class="fa fa-linkedin"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--//newsletter-->

</body>
</html>