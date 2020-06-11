<?php
session_start();
$name= $_SESSION['name'];
// if (empty($ame)) {
// $name = "Sign IN/UP";
// }
// else{
//     $name="Hello ".$ame;
// }


?>


<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- jQuery library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tenali+Ramakrishna&display=swap" rel="stylesheet">
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        /**********************************
new design of course card
***********************************/
        .row-card-course {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 25px auto;


        }


        .eightbit-btn {
            background: #e6cd44;
            display: inline-block;
            position: relative;
            text-align: center;
            /* font-size: 30px; */
            padding: 5px;
            font-family: 'Press Start 2P', cursive;
            text-decoration: none;
            color: #28334AFF;
            box-shadow: inset -4px -4px 0px 0px #e6cd44;
        }

        .eightbit-btn:hover,
        .eightbit-btn:focus {
            background: #e6cd44;
            color: #28334AFF;
            text-decoration: none;
            box-shadow: inset -6px -6px 0px 0px #e6cd44;
        }

        .eightbit-btn:active {
            box-shadow: inset 4px 4px 0px 0px #e6cd44;
        }

        .eightbit-btn:before,
        .eightbit-btn:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            box-sizing: content-box;
        }

        .eightbit-btn:before {
            top: -2px;
            left: 0;
            border-top: 2px #28334AFF solid;
            border-bottom: 2px #28334AFF solid;
        }

        .eightbit-btn:after {
            left: -2px;
            top: 0;
            border-left: 2px #28334AFF solid;
            border-right: 2px #28334AFF solid;
        }

        .row-card-course .course-card {
            margin: 25px;
            padding: 5px;
            margin-top: 15px;
            /* border-radius: 8px; */
            /* border: 1px solid #999; */
            box-shadow: inset 0px 4px 4px 1px rgba(0, 0, 0, 0.15);
        }

        .row-card-course .course-card {
            display: block;
            color: #000;
            background: rgba(255, 255, 255, 0.85);
            /* border-top: 3px solid #000; */
            /* border-bottom: 3px solid #000; */
            position: relative;
            padding-left: 0;

            /* box-shadow: -1px 51px 104px -77px rgba(0, 0, 0, 0.75), inset -5px -5px 10px rgba(74, 165, 46, 0.3), inset 5px 5px 10px rgba(74, 165, 46, 0.3); */
        }

        /* 
        .row-card-course .course-card:before,
        .row-card-course .course-card:after {
            content: '';
            top: 0;
            width: 3px;
            height: 100%;
            position: absolute;
            background: rgba(0, 0, 0, 0.8);
        }

        .row-card-course .course-card:before {
            left: -3px;
        }

        .row-card-course .course-card:after {
            right: -3px;
        } */

        .row-card-course .course-card>.thumbnail {
            margin-left: 10px;
            margin-right: 10px;
        }

        .course-card .thumbnail {
            padding: 0;
            border: none;
            text-align: center;
            border-radius: 0;
            margin: 0 auto;
            width: 215px;
            background: transparent;
            font-family: "Open Sans", sans-serif;
            font-size: 14px;
            line-height: normal;
        }

        .course-card .thumbnail .full-length {
            height: 5px;
            width: 100%;
            background: #bcbcbc;
            display: block;
        }

        .course-card .thumbnail .current-length {
            height: 100%;
            width: 48%;
            background: red;
            display: block;
        }

        .course-card .course-card-image {
            width: 100%;
            height: 100%;
            margin-bottom: -40px;
            min-height: 190px;
            /* padding: 5px; */
            padding-left: 0;
            padding-right: 0;
        }

        #shop {
            background: -webkit-linear-gradient(rgb(255, 88, 51, 0.6), rgb(6, 23, 60, 0.8));
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .course-card .course-card-image {
            width: 220px;
            margin-top: 5px;
            padding: 0;

        }


        .course-card .thumbnail .caption {
            margin: auto;
            width: 225px;
            margin: 0;
            /* padding: 10px; */
            margin-top: 9%;
            position: relative;
            box-sizing: border-box;
            /* background: rgba(255, 255, 255, 0.8); */
            /* box-shadow: inset 5px 0 10px rgba(57, 146, 212, 0.3), inset -5px 0px 10px rgba(57, 146, 212, 0.3); */
        }

        .course-card .course-title {
            min-height: 50px;

        }

        .course-title-heading {
            margin-top: 0;
            margin-bottom: 0;
            font-family: 'Tenali Ramakrishna', sans-serif;
            /* color: ; */
            margin-bottom: 10px;
        }

        .course-title-heading img {
            font-size: 17px;
            font-weight: 400;
            color: #444;
            text-decoration: none;
            display: inherit;
            line-height: 20px;

        }

        .course-title-heading img:hover {
            color: #222;
        }

        .course-card .btn-group {
            width: 100%;
        }

        .course-card .btn-group .course-card-btn {
            background: transparent;
            border-color: transparent;
            color: #444;
            font-size: 18px;
        }

        .course-card .course-fav-cost {

            width: 100%;
            height: auto;
            float: left;
            padding: 0px 0;
            text-align: left;
            margin: 5px;
        }

        .course-card .course-fav-cost .course-rating-star {
            padding-left: 0;
            width: 80%;
            float: left;
        }

        .course-card .course-fav-cost .course-rating-star img {
            height: 10px;
            width: auto;
        }

        .course-card .course-fav-cost .course-rating-star .course-rating {
            unicode-bidi: bidi-override;
            direction: rtl;
        }

        .course-card .course-fav-cost .course-rating-star .course-rating>span>span {
            display: inline-block;
            position: relative;
            width: auto;
            color: #e6cd44;

        }

        .course-card .course-fav-cost .course-rating-star .course-rating>span>span.active:before,
        .course-card .course-fav-cost .course-rating-star .course-rating>span>span.active~span:before {
            content: "\2605";
            position: absolute;
        }

        .course-card .course-fav-cost .course-fav-price {
            position: ABSOLUTE;
            right: 10%;
            width: auto;

        }

        .course-card .course-fav-cost .course-fav-price .price-dollar:hover {
            background: #e6cd44;
            color: #fff;
        }

        .course-card .course-fav-cost .course-fav-price .price-dollar {
            color: #e6cd44;
            font-size: 12px;
            font-weight: 700;

            background: transparent;
            border: 2px solid #06173c;
            border-radius: 5px;
            padding: 5px;
        }

        .course-card .course-fav-cost .price {
            padding-right: 0;
        }

        .course-card .course-fav-cost .price .price-dollar {
            /* color: #FF5733; */
            font-size: 12px;
            font-weight: 700;

        }

        .course-card-foot img {
            width: 35px;
            height: 35px;
            padding: 0 10px 0 0;
            box-sizing: content-box;
        }

        .course-card-foot-name {
            text-align: left;
        }

        .course-card-foot .main-name {
            color: #444;
            font-size: 13px;
            height: 100%;
            line-height: 35px;
            text-align: left;
            display: table;
        }

        .course-card-foot .main-name:hover,
        .course-card-foot .main-name:focus {
            text-decoration: none;
        }

        .fa-angle-double-right {
            color: #e6cd44;
        }

        .fa-map-marker-alt {
            color: #3992d4;
        }

        html,
        body {
            overflow-x: hidden;
            font-family: 'Patrick Hand', cursive;
            width: 100%;
        }

        .aaa {
            display: inline-block;
            width: 150px;
            height: 150px;
            /* margin: 15px; */
            margin: 30px;
            margin-bottom: 5px;
            margin-top: 30px;

        }

        .aaa i {
            color: #28334AFF;
        }

        #ttt {
            scroll-behavior: smooth;
            overflow-x: scroll;
            margin: 0px;
            padding: 0px;
            margin-bottom: 8px;
        }

        .arrow {
            display: none;
            color: #e6cd44;

        }

        .fea:hover .arrow {
            display: flex;
            transition: 2s;
            color: #e6cd44;
            background: rgba(255, 255, 255, 0.7);
            z-index: -1;
            height: 40%;
            margin: 0;
            position: absolute;
            top: 50%;
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 8%;

        }

        .fea {
            /* box-shadow: inset -1px 51px 51px -45px rgba(0, 0, 0, 0.15); */
            background: red;
            z-index: 11111;
        }

        /* width */
        #ttt::-webkit-scrollbar {
            height: 8px;

        }

        /* Track */
        #ttt::-webkit-scrollbar-track {
            background: rgba(153, 153, 153, 0.4);
            border-radius: 8px;
            margin-bottom: 15px;

        }

        /* Handle */
        #ttt::-webkit-scrollbar-thumb {
            border-radius: 8px;
            background: rgba(85, 85, 85, 0.4);
        }

        /* Handle on hover */
        #ttt::-webkit-scrollbar-thumb:hover {
            border-radius: 8px;
            background: rgba(51, 51, 51, 0.5);
        }

        /* recent scrollbar */
        #recent::-webkit-scrollbar {
            width: 4px;

        }

        /* Track */
        #recent::-webkit-scrollbar-track {
            background: rgba(153, 153, 153, 0.4);
            border-radius: 8px;
            margin-bottom: 15px;

        }

        /* Handle */
        #recent::-webkit-scrollbar-thumb {
            border-radius: 8px;
            background: rgba(85, 85, 85, 0.4);
        }

        /* Handle on hover */
        #recent::-webkit-scrollbar-thumb:hover {
            border-radius: 8px;
            background: rgba(51, 51, 51, 0.5);
        }

        #navvv {
            /* width: 350px; */
            /* height: 500px; */
            background: transparent;
            position: fixed;
            /* overflow: hidden; */
            backdrop-filter: blur(2px);
            /* background: rgba(255, 255, 255, 0.75); */
            /* background: rgba(19, 26, 34, 0.88); */
            background: #28334AFF;
        }

        /* #navvv:after {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            width: calc(100% -0px);
            height: 50%;
            background: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.2));
        } */
        @media (max-width:767px) {
            .hidden-xs {
                display: none !important
            }
        }

        /*  */
        .visible-xs {
            display: block !important
        }

        .hidden-xs {
            display: none !important
        }



        @media (max-width:767px) {
            .visible-xs {
                display: none !important
            }

            .hidden-xs {
                display: block !important
            }

            table.visible-xs {
                display: table !important
            }

            tr.visible-xs {
                display: table-row !important
            }

            td.visible-xs,
            th.visible-xs {
                display: table-cell !important
            }
        }

        @media (max-width:767px) {
            .visible-xs-block {
                display: block !important
            }
        }

        @media (max-width:767px) {
            .visible-xs-inline {
                display: inline !important
            }
        }

        @media (max-width:767px) {
            .visible-xs-inline-block {
                display: inline-block !important
            }
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        button:focus {
            outline: none;
        }
    </style>
</head>

<body>
    
    <!--Dhananjai-->
    <!--
    <script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        document.getElementById("lat").value = position.coords.latitude;
        document.getElementById("long").value = position.coords.longitude;
    }
    getLocation();
</script>
***PHP WORk STARTS***

< ?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//User Coordinates and Lat/Long range define
$lat = $_POST['lat'];
$lon = $_POST['long'];
$latlow = $lat-0.0450450;
$latup = $lat+0.0450450;
$longlow = $long-0.0450450;
$longup = $long+0.0450450;

// Only show places within 5km
$distance = 5;

$lat = mysqli_real_escape_string($conn, $lat);
$lon = mysqli_real_escape_string($conn, $lon);
$distance = mysqli_real_escape_string($conn, $distance);

$query = <<<EOF
    SELECT * FROM (
        SELECT *, 
            (
                (
                    (
                        acos(
                            sin(( $lat * pi() / 180))
                            *
                            sin(( `lat` * pi() / 180)) + cos(( $lat * pi() /180 ))
                            *
                            cos(( `lat` * pi() / 180)) * cos((( $lon - `lng`) * pi()/180)))
                    ) * 180/pi()
                ) * 60 * 1.1515 * 1.609344
            )
        as distance FROM `shopkeepers` WHERE lat between latlow AND latup
        AND long between longlow AND langup
    ) shopkeepers
    WHERE distance <= $distance;
    
EOF;

$result = $conn->query($query);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["name"] . "<br>";
    }
}
?> -->
    
    
    <section style="background:rgba(255, 255, 255, 0.91)">
        <nav id="navvv" class="visible-xs" style="z-index:1111111;width:100%;padding:7px;">
            <div class="wrapper d-flex space-between justify-content align-items">
                <div class="navbar__left">
                    <!--   <i class="fa fa-bars navbar__left__hamburger" aria-hidden="true"></i>-->
                    <!-- <img src="logo.png" style="width: 35px; height: 35px; margin-right: 12px" width="60px"
                    class="navbar__left__logo"> -->
                </div>
                <div class="nabar__left" style="font-size:2em;color:beige"><img src="logow.png" style="width:150px;">
                </div>

                <div class=" navbar__center">
                    <i class="fa fa-arrow-left navbar__center__arrow" aria-hidden="true"></i>
                    <input type="text" class="navbar__center__input" placeholder="Search"
                        style="border:2px solid #e6cd44">
                    <button class="navbar__center__search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>



                <div class="navbar__right">
                    <i class="fa fa-search navbar__right__icon " aria-hidden="true"></i>

                    <!-- class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" -->



                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <?php echo $name; ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Update password</a>
                            <a class="dropdown-item" href="login.html">Sign up</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>

                    <button class="button__cs navbar__right__icon" style="background:transparent"><i
                            style="color:#e6cd44" class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i>
                        <span
                            style="font-size:15px;display:block;width:20px;height:20px;border-radius:50%;background:red; margin-top:-35px;margin-left:25px;color: #fFF"><b>00</b></span>
                    </button>


                    <!-- <div class="dropdown nav-item dropdown">
                    <button type="button" class="button__cs nav-link dropdown-toggle" id="navbarDropdown2" style="background:rgba(255,255,255,0.4);
            "> <i style="color:#4AA52E" class="fa fa-user navbar__right__icon" aria-hidden="true"></i> Sign-in/Up
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->
                </div>

            </div>
        </nav>
        <!-- partial -->
        <script src="./script.js"></script>
        <!-- /////////////////////////mobile view navbar//////////////////////////////////// -->

        <nav id="navvv" class="hidden-xs" style="z-index:1111111;width:100%;padding:7px;">
            <div class="row wrapper d-flex space-between justify-content align-items">
                <div class="col-lg-12">
                    <div class="nabar__left" style="color:#fff;margin-right:8px;display:inline-block"><span
                            style="cursor:pointer" onclick="openNav()">&#9776;</span>
                        <img src="logow.png" class="logo"></div>
                    <span class="navbar__righ" style="">
                        <button class="button__cs " style="background:transparent"><i style="color:#e6cd44"
                                class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i>
                            <span
                                style="font-size:15px;display:block;width:20px;height:20px;border-radius:50%;background:red; margin-top:-35px;margin-left:25px;color: #fFF"><b>00</b></span>
                        </button>
                    </span>

                </div>
                <div class="col-lg-12 navbar__center">
                    <i class="fa fa-arrow-left navbar__center__arrow" aria-hidden="true"></i>
                    <input type="text" class="navbar__center__input" placeholder="Search"
                        style="border:2px solid #e6cd44">
                    <a class="navbar__center__search-btn" style="padding-bottom: 2px;"><i class="fa fa-search"></i></a>
                </div>


                <div class="navbar__right">

                    <!-- <i class="fa fa-search navbar__right__icon" aria-hidden="true"></i> -->

                    <!-- class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" -->


                    <!-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hello rajat
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Update password</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->
                    <!-- <div class="dropdown nav-item dropdown">
                    <button type="button" class="button__cs nav-link dropdown-toggle" id="navbarDropdown2" style="background:rgba(255,255,255,0.4);
            "> <i style="color:#4AA52E" class="fa fa-user navbar__right__icon" aria-hidden="true"></i> Sign-in/Up
                    </button>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div> -->
                </div>

            </div>
        </nav>

        <div id="mSidenav" class="sidenav" style="z-index:11111111;background:rgba(40, 51, 74,0.85)"></div>
        <div id="mySidenav" class="sidenav" style="z-index:11111111;background:rgba(40, 51, 74,0.98)">
            <a><img src="logow.png" style="width:75%;margin-top:5px;" class="img-fluid closebtn"></a>
            <a class="button__cs " style="color:#fff;background:rgba(40, 51, 74,0.88) ;display:inline-block"><i
                    style="color:#e6cd44;" class="fas fa-user"></i>
                Hello <?php echo $name; ?>
            </a>
            <a href="javascript:void(0)" style="color:#e6cd44;width:10%;display:inline-block" clss="closebtn"
                onclick="closeNav()">&times;</a>
            <div class="dropdown-divider"></div>

            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>

        <script>
            function openNav() {
                document.getElementById("mSidenav").style.width = "100%";

                document.getElementById("mySidenav").style.width = "250px";

            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("mSidenav").style.width = "0";

            }
        </script>













        <div id="demo" class="carousel slide" data-ride="carousel" style="background:#fff;">

            <!-- Indicators -->

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="111.png" width="100%" height="80%">
                </div>
                <div class="carousel-item">
                    <img src="112.png" width="100%" height="80%">
                </div>
                <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTUk2YcVQHA7Apkf5xShWsHeTQwivtQomqZmnA8viy0kxRsk0Zo&usqp=CAU"
                        alt="New York" width="100%" height="80%">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class=" carousel-control-prev" href="#demo" data-slide="prev" style="z-index: 111;">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class=" carousel-control-next" href="#demo" data-slide="next" style="z-index: 111;">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>





        <center>
            <div style="position:-ms-page;">
                <section class="fea" style="width:90%;position:absolute;top:50vh; 
            left: 50%;
            transform: translate( -50%);background:rgba(255,255,255,0.7);  ">

                    <h1
                        style="text-align: justify;margin-top:3%; margin-left:4%; font-family: 'Tenali Ramakrishna', sans-serif;">
                        Our
                        Services</h1>
                    <div style="width:90%;">
                        <table id="ttt" class="table-responsive">
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <div class="aaa">
                                        <center> <i class="fas fa-street-view fa-5x"></i></center>
                                        <h4>Best local shops</h4>
                                    </div>
                                </td>
                                <td>
                                    <div class="aaa">
                                        <center><i class="fas fa-shipping-fast fa-5x"></i></center>
                                        <h4>Fast delivery</h4>
                                    </div>
                                </td>
                                <td>
                                    <div class="aaa">
                                        <center><i class="fas fa-exchange-alt fa-5x"></i>
                                            <h4>Easy refunds</h4>
                                        </center>
                                    </div>
                                </td>
                                <td>
                                    <div class="aaa">
                                        <center><i class="fas fa-language fa-5x"></i></center>
                                        <h4>Regional language support</h4>
                                    </div>
                                </td>
                                <td>
                                    <div class="aaa">
                                        <center><i class="far fa-money-bill-alt fa-5x"></i></center>
                                        <h4>Secure payments</h4>
                                    </div>
                                </td>
                                <td>
                                    <div class="aaa">
                                        <center><i class="fas fa-headset fa-5x"></i>
                                            <h4>Customeer support</h4>
                                        </center>
                                    </div>
                                </td>
                                <td>
                                    <div class="aaa">
                                        <center><br><i class="far fa-star fa-2x"></i><i class="far fa-star fa-2x"></i><i
                                                class="far fa-star fa-2x"></i><i class="far fa-star fa-2x"></i>

                                            <h4><br>choose from best rated store</h4>
                                        </center>
                                    </div>
                                </td>
                            </tr>
                            <a class=" carousel-control-prev arrow" onclick="scrollprevious()" data-slide="prev">
                                <i class="fas fa-caret-left fa-3x"></i>
                            </a>
                            <a class=" carousel-control-next arrow" onclick="scrollnext()" data-slide="next">
                                <i class="fas fa-caret-right fa-3x"></i>

                            </a>
                        </table>
                    </div>


                </section>
            </div>
        </center>

        <script>
            function scrollnext() {

                var aaab = document.getElementById('ttt');
                aaab.scrollBy(100, 0);

            }

            function scrollprevious() {
                var pre = document.getElementById('ttt');
                pre.scrollBy(-100, 0);

            }
        </script>


        <div class="blankDiv">
            <br><br><br><br> <br>
        </div>
        <section style="box-shadow:inset 4px 50px 200px rgba(40, 51, 74,0.7) ;">
            <div class="row-card-course" style="position:relative;margin-bottom:0px;">
                <div class="col-lg-12" style="margin-left:10%;">
                    <h1 style="color:#e6cd44;margin-top:15px;">Merchant near you</h1>
                </div>
                <div class="course-card">
                    <div class="thumbnail">
                        <div class="course-card-image">
                            <!-- <i id="shop" class="fas fa-store-alt fa-8x"></i> -->

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR6HXspXCoVi0vN7sW_VE8XzBZ_Enfjz3VztLSv4BcBNiHcOXcP&usqp=CAU"
                                class="img-fluid">
                        </div>
                        <div class="caption">
                            <div class="course-title">
                                <h3 class="course-title-heading">
                                    SHOP 1
                                </h3>
                                <p style="text-align:justify;"><i class="fas fa-angle-double-right "></i> General
                                    store<br><i class="fas fa-map-marker-alt"></i> Tilak
                                    nagar</p>
                            </div>
                            <div class="course-fav-cost row">
                                <div class="course-rating-star">
                                    <small>Rating</small>
                                    <br>
                                    <div class="course-rating">
                                        <span><span> ☆</span><span class="active"> ☆</span><span> ☆</span><span>
                                                ☆</span><span>
                                                ☆</span></span>
                                    </div>
                                </div>
                                <div class="course-fav-price text-right">
                                    <a type="button" href="login.html" class="eightbit-btn">check item</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="thumbnail">
                        <div class="course-card-image">
                            <!-- <i id="shop" class="fas fa-store-alt fa-8x"></i> -->

                            <img src="https://images.jdmagicbox.com/comp/hyderabad/l1/040pxx40.xx40.130105111156.y2l1/catalogue/sri-sai-kirana-and-general-store-ramanthapur-hyderabad-general-stores-4dcs6rd.jpg"
                                class="img-fluid">
                        </div>
                        <div class="caption">
                            <div class="course-title">
                                <h3 class="course-title-heading border-black">
                                    SHOP 2
                                </h3>
                                <p style="text-align:justify;"><i class="fas fa-angle-double-right "></i> General
                                    store<br><i class="fas fa-map-marker-alt"></i> Tilak
                                    nagar</p>
                            </div>
                            <div class="course-fav-cost row">
                                <div class="course-rating-star">
                                    <small>Rating</small>
                                    <br>
                                    <div class="course-rating">
                                        <span><span> ☆</span><span class="active"> ☆</span><span> ☆</span><span>
                                                ☆</span><span>
                                                ☆</span></span>
                                    </div>
                                </div>
                                <div class="course-fav-price text-right">
                                    <a type="button" href="login.html" class="eightbit-btn">check item</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="thumbnail">
                        <div class="course-card-image">
                            <!-- <i id="shop" class="fas fa-store-alt fa-8x"></i> -->

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR6HXspXCoVi0vN7sW_VE8XzBZ_Enfjz3VztLSv4BcBNiHcOXcP&usqp=CAU"
                                class="img-fluid">
                        </div>
                        <div class="caption">
                            <div class="course-title">
                                <h3 class="course-title-heading border-black">
                                    SHOP 3
                                </h3>
                                <p style="text-align:justify;"><i class="fas fa-angle-double-right "></i> General
                                    store<br><i class="fas fa-map-marker-alt"></i> Tilak
                                    nagar</p>
                            </div>
                            <div class="course-fav-cost row">
                                <div class="course-rating-star">
                                    <small>Rating</small>
                                    <br>
                                    <div class="course-rating">
                                        <span><span> ☆</span><span class="active"> ☆</span><span> ☆</span><span>
                                                ☆</span><span>
                                                ☆</span></span>
                                    </div>
                                </div>
                                <div class="course-fav-price text-right">
                                    <a type="button" href="login.html" class="eightbit-btn">check item</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="thumbnail">
                        <div class="course-card-image">
                            <!-- <i id="shop" class="fas fa-store-alt fa-8x"></i> -->

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR6HXspXCoVi0vN7sW_VE8XzBZ_Enfjz3VztLSv4BcBNiHcOXcP&usqp=CAU"
                                class="img-fluid">
                        </div>
                        <div class="caption">
                            <div class="course-title">
                                <h3 class="course-title-heading border-black">
                                    SHOP 4
                                </h3>
                                <p style="text-align:justify;"><i class="fas fa-angle-double-right "></i> General
                                    store<br><i class="fas fa-map-marker-alt"></i> Tilak
                                    nagar</p>
                            </div>
                            <div class="course-fav-cost row">
                                <div class="course-rating-star">
                                    <small>Rating</small>
                                    <br>
                                    <div class="course-rating">
                                        <span><span> ☆</span><span class="active"> ☆</span><span> ☆</span><span>
                                                ☆</span><span>
                                                ☆</span></span>
                                    </div>
                                </div>
                                <div class="course-fav-price text-right">
                                    <a type="button" href="login.html" class="eightbit-btn">check item</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


        </section>

        <center>
            <div style="box-shadow:inset 4px 50px 200px #e6cd44 ;">
                <section clss="fea" style="width:100%;
          ">
                    <br>
                    <h1
                        style="text-align: justify;margin-top:0%; margin-left:4%; font-family: 'Tenali Ramakrishna', sans-serif;">
                        You Recent Orders</h1>
                    <div style="width:90%;">
                        <table id="ttt" class="table-responsive">
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <div class="row-card-course" style="width:80%;">

                                        <div class="course-card" style="width:80%; background: transparent;
                                    overflow: hidden;
                                    backdrop-filter: blur(3px);
                                    background: rgba(255, 255, 255, 0.5);
                        ">
                                            <div class="thumbnail" style="width:100%;">

                                                <div class="caption">
                                                    <div class="course-title" style="width:80%;">
                                                        <!-- <h3 class="course-title-heading" style="width:80%;">
                                                        SHOP 1
                                                    </h3> -->

                                                        <p style="text-align:justify;">
                                                            <table id="recent" class="table table-responsive"
                                                                style="height:150px;width:90%;overflow-y: scroll;">
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Qnt.</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item a</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                            </table><i class="fas fa-angle-double-right "></i> Shop1
                                                            (General
                                                            store)<br><i class="fas fa-map-marker-alt"></i> Tilak
                                                            nagar
                                                        </p>
                                                    </div>
                                                    <div class="course-fav-cost row">
                                                        <div class="course-rating-star">
                                                            <a type="button"
                                                                style="width:50%;margin-right:8px;margin-left:3px;"
                                                                href="login.html" class="eightbit-btn">check
                                                                item</a><br><br>
                                                            <a type="button" style="width:40%;" href="login.html"
                                                                class="eightbit-btn">
                                                                Buy again</a> </div>
                                                        <div class="course-fav-price " style="width:80%;">
                                                            <!-- <a type="button" style="width:50%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a>
                                                        <a type="button" style="width:30%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a> -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div c <div class="row-card-course" style="width:80%;">

                                        <div class="course-card" style="width:80%; background: transparent;
                                    overflow: hidden;
                                    backdrop-filter: blur(3px);
                                    background: rgba(255, 255, 255, 0.5);
                        ">
                                            <div class="thumbnail" style="width:100%;">

                                                <div class="caption">
                                                    <div class="course-title" style="width:80%;">
                                                        <!-- <h3 class="course-title-heading" style="width:80%;">
                                                        SHOP 1
                                                    </h3> -->

                                                        <p style="text-align:justify;">
                                                            <table id="recent" class="table table-responsive"
                                                                style="height:150px;width:90%;overflow-y: scroll;">
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Qnt.</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item a</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                            </table><i class="fas fa-angle-double-right "></i> Shop1
                                                            (General
                                                            store)<br><i class="fas fa-map-marker-alt"></i> Tilak
                                                            nagar
                                                        </p>
                                                    </div>
                                                    <div class="course-fav-cost row">
                                                        <div class="course-rating-star">
                                                            <a type="button"
                                                                style="width:50%;margin-right:8px;margin-left:3px;"
                                                                href="login.html" class="eightbit-btn">check
                                                                item</a><br><br>
                                                            <a type="button" style="width:40%;" href="login.html"
                                                                class="eightbit-btn">
                                                                Buy again</a> </div>
                                                        <div class="course-fav-price " style="width:80%;">
                                                            <!-- <a type="button" style="width:50%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a>
                                                        <a type="button" style="width:30%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a> -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row-card-course" style="width:80%;">

                                        <div class="course-card" style="width:80%; background: transparent;
                                    overflow: hidden;
                                    backdrop-filter: blur(3px);
                                    background: rgba(255, 255, 255, 0.5);
                        ">
                                            <div class="thumbnail" style="width:100%;">

                                                <div class="caption">
                                                    <div class="course-title" style="width:80%;">
                                                        <!-- <h3 class="course-title-heading" style="width:80%;">
                                                        SHOP 1
                                                    </h3> -->

                                                        <p style="text-align:justify;">
                                                            <table id="recent" class="table table-responsive"
                                                                style="height:150px;width:90%;overflow-y: scroll;">
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Qnt.</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item a</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                            </table><i class="fas fa-angle-double-right "></i> Shop1
                                                            (General
                                                            store)<br><i class="fas fa-map-marker-alt"></i> Tilak
                                                            nagar
                                                        </p>
                                                    </div>
                                                    <div class="course-fav-cost row">
                                                        <div class="course-rating-star">
                                                            <a type="button"
                                                                style="width:50%;margin-right:8px;margin-left:3px;"
                                                                href="login.html" class="eightbit-btn">check
                                                                item</a><br><br>
                                                            <a type="button" style="width:40%;" href="login.html"
                                                                class="eightbit-btn">
                                                                Buy again</a> </div>
                                                        <div class="course-fav-price " style="width:80%;">
                                                            <!-- <a type="button" style="width:50%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a>
                                                        <a type="button" style="width:30%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a> -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row-card-course" style="width:80%;">

                                        <div class="course-card" style="width:80%; background: transparent;
                                    overflow: hidden;
                                    backdrop-filter: blur(3px);
                                    background: rgba(255, 255, 255, 0.5);
                        ">
                                            <div class="thumbnail" style="width:100%;">

                                                <div class="caption">
                                                    <div class="course-title" style="width:80%;">
                                                        <!-- <h3 class="course-title-heading" style="width:80%;">
                                                        SHOP 1
                                                    </h3> -->

                                                        <p style="text-align:justify;">
                                                            <table id="recent" class="table table-responsive"
                                                                style="height:150px;width:90%;overflow-y: scroll;">
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Qnt.</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item a</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                            </table><i class="fas fa-angle-double-right "></i> Shop1
                                                            (General
                                                            store)<br><i class="fas fa-map-marker-alt"></i> Tilak
                                                            nagar
                                                        </p>
                                                    </div>
                                                    <div class="course-fav-cost row">
                                                        <div class="course-rating-star">
                                                            <a type="button"
                                                                style="width:50%;margin-right:8px;margin-left:3px;"
                                                                href="login.html" class="eightbit-btn">check
                                                                item</a><br><br>
                                                            <a type="button" style="width:40%;" href="login.html"
                                                                class="eightbit-btn">
                                                                Buy again</a> </div>
                                                        <div class="course-fav-price " style="width:80%;">
                                                            <!-- <a type="button" style="width:50%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a>
                                                        <a type="button" style="width:30%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a> -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row-card-course" style="width:80%;">

                                        <div class="course-card" style="width:80%; background: transparent;
                                    overflow: hidden;
                                    backdrop-filter: blur(3px);
                                    background: rgba(255, 255, 255, 0.5);
                        ">
                                            <div class="thumbnail" style="width:100%;">

                                                <div class="caption">
                                                    <div class="course-title" style="width:80%;">
                                                        <!-- <h3 class="course-title-heading" style="width:80%;">
                                                        SHOP 1
                                                    </h3> -->

                                                        <p style="text-align:justify;">
                                                            <table id="recent" class="table table-responsive"
                                                                style="height:150px;width:90%;overflow-y: scroll;">
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Qnt.</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item a</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                            </table><i class="fas fa-angle-double-right "></i> Shop1
                                                            (General
                                                            store)<br><i class="fas fa-map-marker-alt"></i> Tilak
                                                            nagar
                                                        </p>
                                                    </div>
                                                    <div class="course-fav-cost row">
                                                        <div class="course-rating-star">
                                                            <a type="button"
                                                                style="width:50%;margin-right:8px;margin-left:3px;"
                                                                href="login.html" class="eightbit-btn">check
                                                                item</a><br><br>
                                                            <a type="button" style="width:40%;" href="login.html"
                                                                class="eightbit-btn">
                                                                Buy again</a> </div>
                                                        <div class="course-fav-price " style="width:80%;">
                                                            <!-- <a type="button" style="width:50%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a>
                                                        <a type="button" style="width:30%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a> -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row-card-course" style="width:80%;">

                                        <div class="course-card" style="width:80%; background: transparent;
                                    overflow: hidden;
                                    backdrop-filter: blur(3px);
                                    background: rgba(255, 255, 255, 0.5);
                        ">
                                            <div class="thumbnail" style="width:100%;">

                                                <div class="caption">
                                                    <div class="course-title" style="width:80%;">
                                                        <!-- <h3 class="course-title-heading" style="width:80%;">
                                                        SHOP 1
                                                    </h3> -->

                                                        <p style="text-align:justify;">
                                                            <table id="recent" class="table table-responsive"
                                                                style="height:150px;width:90%;overflow-y: scroll;">
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Qnt.</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item a</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                            </table><i class="fas fa-angle-double-right "></i> Shop1
                                                            (General
                                                            store)<br><i class="fas fa-map-marker-alt"></i> Tilak
                                                            nagar
                                                        </p>
                                                    </div>
                                                    <div class="course-fav-cost row">
                                                        <div class="course-rating-star">
                                                            <a type="button"
                                                                style="width:50%;margin-right:8px;margin-left:3px;"
                                                                href="login.html" class="eightbit-btn">check
                                                                item</a><br><br>
                                                            <a type="button" style="width:40%;" href="login.html"
                                                                class="eightbit-btn">
                                                                Buy again</a> </div>
                                                        <div class="course-fav-price " style="width:80%;">
                                                            <!-- <a type="button" style="width:50%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a>
                                                        <a type="button" style="width:30%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a> -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="row-card-course" style="width:80%;">

                                        <div class="course-card" style="width:80%; background: transparent;
                                    overflow: hidden;
                                    backdrop-filter: blur(3px);
                                    background: rgba(255, 255, 255, 0.5);
                        ">
                                            <div class="thumbnail" style="width:100%;">

                                                <div class="caption">
                                                    <div class="course-title" style="width:80%;">
                                                        <!-- <h3 class="course-title-heading" style="width:80%;">
                                                        SHOP 1
                                                    </h3> -->

                                                        <p style="text-align:justify;">
                                                            <table id="recent" class="table table-responsive"
                                                                style="height:150px;width:90%;overflow-y: scroll;">
                                                                <tr>
                                                                    <th>Item</th>
                                                                    <th>Qnt.</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item a</td>
                                                                    <td>2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Item b</td>
                                                                    <td>5</td>
                                                                </tr>
                                                            </table><i class="fas fa-angle-double-right "></i> Shop1
                                                            (General
                                                            store)<br><i class="fas fa-map-marker-alt"></i> Tilak
                                                            nagar
                                                        </p>
                                                    </div>
                                                    <div class="course-fav-cost row">
                                                        <div class="course-rating-star">
                                                            <a type="button"
                                                                style="width:50%;margin-right:8px;margin-left:3px;"
                                                                href="login.html" class="eightbit-btn">check
                                                                item</a><br><br>
                                                            <a type="button" style="width:40%;" href="login.html"
                                                                class="eightbit-btn">
                                                                Buy again</a> </div>
                                                        <div class="course-fav-price " style="width:80%;">
                                                            <!-- <a type="button" style="width:50%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a>
                                                        <a type="button" style="width:30%;" href="login.html"
                                                            class="eightbit-btn">check
                                                            item</a> -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- <a class=" carousel-control-prev " onclick="scrollprevious()" data-slide="prev">
                            <i style="color:#000" class="fas fa-caret-left fa-3x"></i>
                        </a>
                        <a class=" carousel-control-next arrow" onclick="scrollnext()" data-slide="next">
                            <i class="fas fa-caret-right fa-3x"></i>

                        </a> -->
                        </table>
                    </div>


                </section>
            </div>
        </center>
        <script>
            const $dropdown = $(".dropdown");
            const $dropdownToggle = $(".dropdown-toggle");
            const $dropdownMenu = $(".dropdown-menu");
            const showClass = "show";

            $(window).on("load resize", function () {
                if (this.matchMedia("(min-width: 768px)").matches) {
                    $dropdown.hover(
                        function () {
                            const $this = $(this);
                            $this.addClass(showClass);
                            $this.find($dropdownToggle).attr("aria-expanded", "true");
                            $this.find($dropdownMenu).addClass(showClass);
                        },
                        function () {
                            const $this = $(this);
                            $this.removeClass(showClass);
                            $this.find($dropdownToggle).attr("aria-expanded", "false");
                            $this.find($dropdownMenu).removeClass(showClass);
                        }
                    );
                } else {
                    $dropdown.off("mouseenter mouseleave");
                }
            });
        </script>
        <br><br><br>
</body>

</html>