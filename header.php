<!DOCTYPE html>
<html lang="en">
<head>
    <title>home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/zoom.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="css/zoom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/zoom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#tampil").hover(function(){
                $("#myresult").css("display", "block");
            }, function(){
                $("#myresult").css("display", "none");
            });
        });
    </script>

    <style>
        .box {
            position: relative;
            display: inline-block; /* Make the width of box same as image */
        }
        .box .text {
            position: absolute;
            z-index: 999;
            margin: 0 auto;
            left: 0;
            right: 0;
            text-align: center;
            top: 40%; /* Adjust this value to move the positioned div up and down */
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            width: 60%; /* Set the width of the positioned div */
        }
    </style>

</head>

<body>
<div class="col-sm-12 d-flex justify-content-center" style="background: #2f9f00;">
    <nav class="header navbar navbar-expand-lg navbar-dark primary-color col-sm-9">
        <div class="pr-sm-5">
            <a href="index.php" class="logo d-flex align-items-center"><img style="max-width: 160px" src="image/logo.svg"></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
            </ul>

            <div class="ml-auto">
                <a class="btn btn-outline-light mr-3" href="#login">Login</a>
                <a href="#regis">Register</a>
            </div>
        </div>
    </nav>
</div>
