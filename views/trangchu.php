<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <!-- https://xstore.8theme.com/demos/hosting/-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700&subset=latin-ext" rel="stylesheet">

    <style>
        .sdproduct {
            padding-top: 20px;
        }

        #slider-text {
            padding-top: 40px;
            display: block;
        }

        #slider-text .col-md-6 {
            overflow: hidden;
        }

        #slider-text h2 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-size: 30px;
            letter-spacing: 3px;
            margin: 30px auto;
            padding-left: 40px;
        }

        #slider-text h2::after {
            border-top: 2px solid #c7c7c7;
            content: "";
            position: absolute;
            bottom: 35px;
            width: 100%;
        }

        #itemslider h4 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-size: 12px;
            margin: 10px auto 3px;
        }

        #itemslider h5 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: bold;
            font-size: 12px;
            margin: 3px auto 2px;
        }

        #itemslider h6 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 300;
            ;
            font-size: 10px;
            margin: 2px auto 5px;
        }

        .badge {
            background: black;
            position: absolute;
            height: 40px;
            width: 60px;
            line-height: 31px;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 300;
            font-size: 14px;
            box-shadow: 0 0 0 1px black;
            top: 6px;
            right: 11%;
            background-color: black !important;
            padding: 13px 13px !important;
            border-radius: 0px !important;
        }

        #slider-control img {
            padding-top: 60%;
            margin: 0 auto;
        }

        @media screen and (max-width: 992px) {
            #slider-control img {
                padding-top: 70px;
                margin: 0 auto;
            }
        }

        .carousel-showmanymoveone .carousel-control {
            width: 4%;
            background-image: none;
        }

        .carousel-showmanymoveone .carousel-control.left {
            margin-left: 5px;
        }

        .carousel-showmanymoveone .carousel-control.right {
            margin-right: 5px;
        }

        .carousel-showmanymoveone .cloneditem-1,
        .carousel-showmanymoveone .cloneditem-2,
        .carousel-showmanymoveone .cloneditem-3,
        .carousel-showmanymoveone .cloneditem-4,
        .carousel-showmanymoveone .cloneditem-5 {
            display: none;
        }

        @media all and (min-width: 768px) {
            .carousel-showmanymoveone .carousel-inner>.active.left,
            .carousel-showmanymoveone .carousel-inner>.prev {
                left: -50%;
            }
            .carousel-showmanymoveone .carousel-inner>.active.right,
            .carousel-showmanymoveone .carousel-inner>.next {
                left: 50%;
            }
            .carousel-showmanymoveone .carousel-inner>.left,
            .carousel-showmanymoveone .carousel-inner>.prev.right,
            .carousel-showmanymoveone .carousel-inner>.active {
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
                display: block;
            }
        }

        @media all and (min-width: 768px) and (transform-3d),
        all and (min-width: 768px) and (-webkit-transform-3d) {
            .carousel-showmanymoveone .carousel-inner>.item.active.right,
            .carousel-showmanymoveone .carousel-inner>.item.next {
                -webkit-transform: translate3d(50%, 0, 0);
                transform: translate3d(50%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner>.item.active.left,
            .carousel-showmanymoveone .carousel-inner>.item.prev {
                -webkit-transform: translate3d(-50%, 0, 0);
                transform: translate3d(-50%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner>.item.left,
            .carousel-showmanymoveone .carousel-inner>.item.prev.right,
            .carousel-showmanymoveone .carousel-inner>.item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0;
            }
        }

        @media all and (min-width: 992px) {
            .carousel-showmanymoveone .carousel-inner>.active.left,
            .carousel-showmanymoveone .carousel-inner>.prev {
                left: -16.666%;
            }
            .carousel-showmanymoveone .carousel-inner>.active.right,
            .carousel-showmanymoveone .carousel-inner>.next {
                left: 16.666%;
            }
            .carousel-showmanymoveone .carousel-inner>.left,
            .carousel-showmanymoveone .carousel-inner>.prev.right,
            .carousel-showmanymoveone .carousel-inner>.active {
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner .cloneditem-2,
            .carousel-showmanymoveone .carousel-inner .cloneditem-3,
            .carousel-showmanymoveone .carousel-inner .cloneditem-4,
            .carousel-showmanymoveone .carousel-inner .cloneditem-5,
            .carousel-showmanymoveone .carousel-inner .cloneditem-6 {
                display: block;
            }
        }

        @media all and (min-width: 992px) and (transform-3d),
        all and (min-width: 992px) and (-webkit-transform-3d) {
            .carousel-showmanymoveone .carousel-inner>.item.active.right,
            .carousel-showmanymoveone .carousel-inner>.item.next {
                -webkit-transform: translate3d(16.666%, 0, 0);
                transform: translate3d(16.666%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner>.item.active.left,
            .carousel-showmanymoveone .carousel-inner>.item.prev {
                -webkit-transform: translate3d(-16.666%, 0, 0);
                transform: translate3d(-16.666%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner>.item.left,
            .carousel-showmanymoveone .carousel-inner>.item.prev.right,
            .carousel-showmanymoveone .carousel-inner>.item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0;
            }
        }

        .textct {
            text-decoration-line: line-through;
            color: black;
        }

        div#nz-div {
            border-bottom: 2px solid black;
            margin-bottom: 20px;
            display: block;
            padding-top: 10px;
        }

        #nz-div h3.tde {
            margin: 0;
            font-size: 16px;
            line-height: 20px;
            display: inline-block;
            text-transform: uppercase;
        }

        #nz-div h3.tde :after {
            content: "";
            width: 0;
            height: 0;
            border-top: 40px solid transparent;
            border-left: 20px solid black;
            border-bottom: 0px solid transparent;
            border-right: 0 solid transparent;
            position: absolute;
            top: 0px;
            right: -20px;
        }

        #nz-div h3.tde span {
            background: black;
            padding: 10px 20px 8px 20px;
            color: white;
            position: relative;
            display: inline-block;
            margin: 0;
        }

        .bannersales {
            margin-top: 50px;
            width: 1270px;
            margin-left: 110px;
        }

        .xemthem {
            margin-left: 47%;
            color: white;
            background: black;
            padding: 10px 12px 10px 12px;
            border: 1px solid black;
        }

        .xemthem a {
            color: white;
        }
        .sdproduct {
            padding-top: 20px;
        }
        
        #slider-text {
            padding-top: 40px;
            display: block;
        }
        
        #slider-text .col-md-6 {
            overflow: hidden;
        }
        
        #slider-text h2 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 380;
            font-size: 30px;
            letter-spacing: 3px;
            margin: 30px auto;
            padding-left: 40px;
        }
        
        #slider-text h2::after {
            border-top: 2px solid #c7c7c7;
            content: "";
            position: absolute;
            bottom: 35px;
            width: 100%;
        }
        
        #itemslider h4 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 400;
            font-size: 12px;
            margin: 10px auto 3px;
        }
        
        #itemslider h5 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: bold;
            font-size: 12px;
            margin: 3px auto 2px;
        }
        
        #itemslider h6 {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 300;
            ;
            font-size: 10px;
            margin: 2px auto 5px;
        }
        
        .badge {
            background: black;
            position: absolute;
            height: 40px;
            width: 60px;
            line-height: 31px;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 300;
            font-size: 14px;
            box-shadow: 0 0 0 1px black;
            top: 6px;
            right: 11%;
            background-color: black !important;
            padding: 13px 13px !important;
            border-radius: 0px !important;
        }
        
        #slider-control img {
            padding-top: 60%;
            margin: 0 auto;
        }
        
        @media screen and (max-width: 992px) {
            #slider-control img {
                padding-top: 70px;
                margin: 0 auto;
            }
        }
        
        .carousel-showmanymoveone .carousel-control {
            width: 4%;
            background-image: none;
        }
        
        .carousel-showmanymoveone .carousel-control.left {
            margin-left: 5px;
        }
        
        .carousel-showmanymoveone .carousel-control.right {
            margin-right: 5px;
        }
        
        .carousel-showmanymoveone .cloneditem-1,
        .carousel-showmanymoveone .cloneditem-2,
        .carousel-showmanymoveone .cloneditem-3,
        .carousel-showmanymoveone .cloneditem-4,
        .carousel-showmanymoveone .cloneditem-5 {
            display: none;
        }
        
        @media all and (min-width: 768px) {
            .carousel-showmanymoveone .carousel-inner>.active.left,
            .carousel-showmanymoveone .carousel-inner>.prev {
                left: -50%;
            }
            .carousel-showmanymoveone .carousel-inner>.active.right,
            .carousel-showmanymoveone .carousel-inner>.next {
                left: 50%;
            }
            .carousel-showmanymoveone .carousel-inner>.left,
            .carousel-showmanymoveone .carousel-inner>.prev.right,
            .carousel-showmanymoveone .carousel-inner>.active {
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner .cloneditem-1 {
                display: block;
            }
        }
        
        @media all and (min-width: 768px) and (transform-3d),
        all and (min-width: 768px) and (-webkit-transform-3d) {
            .carousel-showmanymoveone .carousel-inner>.item.active.right,
            .carousel-showmanymoveone .carousel-inner>.item.next {
                -webkit-transform: translate3d(50%, 0, 0);
                transform: translate3d(50%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner>.item.active.left,
            .carousel-showmanymoveone .carousel-inner>.item.prev {
                -webkit-transform: translate3d(-50%, 0, 0);
                transform: translate3d(-50%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner>.item.left,
            .carousel-showmanymoveone .carousel-inner>.item.prev.right,
            .carousel-showmanymoveone .carousel-inner>.item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0;
            }
        }
        
        @media all and (min-width: 992px) {
            .carousel-showmanymoveone .carousel-inner>.active.left,
            .carousel-showmanymoveone .carousel-inner>.prev {
                left: -16.666%;
            }
            .carousel-showmanymoveone .carousel-inner>.active.right,
            .carousel-showmanymoveone .carousel-inner>.next {
                left: 16.666%;
            }
            .carousel-showmanymoveone .carousel-inner>.left,
            .carousel-showmanymoveone .carousel-inner>.prev.right,
            .carousel-showmanymoveone .carousel-inner>.active {
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner .cloneditem-2,
            .carousel-showmanymoveone .carousel-inner .cloneditem-3,
            .carousel-showmanymoveone .carousel-inner .cloneditem-4,
            .carousel-showmanymoveone .carousel-inner .cloneditem-5,
            .carousel-showmanymoveone .carousel-inner .cloneditem-6 {
                display: block;
            }
        }
        
        @media all and (min-width: 992px) and (transform-3d),
        all and (min-width: 992px) and (-webkit-transform-3d) {
            .carousel-showmanymoveone .carousel-inner>.item.active.right,
            .carousel-showmanymoveone .carousel-inner>.item.next {
                -webkit-transform: translate3d(16.666%, 0, 0);
                transform: translate3d(16.666%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner>.item.active.left,
            .carousel-showmanymoveone .carousel-inner>.item.prev {
                -webkit-transform: translate3d(-16.666%, 0, 0);
                transform: translate3d(-16.666%, 0, 0);
                left: 0;
            }
            .carousel-showmanymoveone .carousel-inner>.item.left,
            .carousel-showmanymoveone .carousel-inner>.item.prev.right,
            .carousel-showmanymoveone .carousel-inner>.item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
                left: 0;
            }
        }
        
        .textct {
            text-decoration-line: line-through;
            color: black;
        }
        /* ------------------------------------------------------------------ */
        /* Đây là phần chất lượng thương hiệu-------------------------------- */
        
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Saira:wght@300&display=swap');
        div#nz-div {
            border-bottom: 2px solid black;
            margin-bottom: 20px;
            display: block;
            padding-top: 10px;
        }
        
        #nz-div h3.tde {
            margin: 0;
            font-size: 16px;
            line-height: 20px;
            display: inline-block;
            text-transform: uppercase;
        }
        
        #nz-div h3.tde :after {
            content: "";
            width: 0;
            height: 0;
            border-top: 40px solid transparent;
            border-left: 20px solid black;
            border-bottom: 0px solid transparent;
            border-right: 0 solid transparent;
            position: absolute;
            top: 0px;
            right: -20px;
        }
        
        #nz-div h3.tde span {
            background: black;
            padding: 10px 20px 8px 20px;
            color: white;
            position: relative;
            display: inline-block;
            margin: 0;
        }
        
        #counter {
            background-color: black;
            color: rgb(255, 255, 255);
            display: block;
            overflow: hidden;
            text-align: center;
            padding: 100px 0;
            margin-top: 20px;
            margin-bottom: 20px;
            font-family: 'Oswald', sans-serif;
            ;
        }
        
        #counter .count {
            padding: 50px;
            color: black;
            text-align: center;
            background: rgb(183, 248, 219);
            background: linear-gradient(0deg, rgba(183, 248, 219, 1) 29%, rgba(80, 167, 194, 1) 100%);
        }
        
        .count h4 {
            font-size: 16px;
            margin-top: 0;
        }
        
        #counter .count .fa {
            font-size: 43px;
            display: block;
            color: #fff;
        }
        
        #counter .number {
            font-size: 30px;
            font-weight: 700;
            margin: 0;
        }
        /* ------------------------------------------------------------- */
        /* --------------------------phần giới thiệu có hình bà chị kế trọ----------------- */
        
        .girl {
            width: 400px;
            margin-left: 30px;
        }
        
        .noidung h2 {
            text-align: center;
            font-family: 'Satisfy', cursive;
            font-size: 35px;
            margin-top: 30px !important;
        }
        
        .noidung h4 {
            font-family: 'Lexend Zetta', sans-serif;
            text-align: center;
            font-size: 15px;
        }
        
        .noidung p {
            font-family: 'Oswald', sans-serif;
            font-size: 19px;
            padding-right: 30px;
            text-align: justify;
        }
        .noidung{
            width: 800px !important;
        }
        .bt1 {
            background: black;
            color: white;
            font-size: 20px;
            font-family: 'Oswald', sans-serif;
            padding: 5px;
            margin-left: 270px;
            margin-top: 15px;
        }
        /* --------------------------------------------------------- */
        /* Danh mục thương hiệu------------------------------------ */
        
        div#nz-div {
            border-bottom: 2px solid black;
            margin-bottom: 20px;
            display: block;
            padding-top: 10px;
        }
        
        #nz-div h3.tde {
            margin: 0;
            font-size: 16px;
            line-height: 20px;
            display: inline-block;
            text-transform: uppercase;
        }
        
        #nz-div h3.tde :after {
            content: "";
            width: 0;
            height: 0;
            border-top: 40px solid transparent;
            border-left: 20px solid black;
            border-bottom: 0px solid transparent;
            border-right: 0 solid transparent;
            position: absolute;
            top: 0px;
            right: -20px;
        }
        
        #nz-div h3.tde span {
            background: black;
            padding: 10px 20px 8px 20px;
            color: white;
            position: relative;
            display: inline-block;
            margin: 0;
        }
        
        @import url('https://fonts.googleapis.com/css?family=Poppins|Ubuntu&display=swap');
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }
        
        body {
            background: #eee;
            font-family: 'Ubuntu', sans-serif
        }
        
        #thieu {
            text-align: center;
            font-family: 'Oswald', sans-serif;
        }
        
        .box {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px
        }
        
        .our-services {
            margin-top: 75px;
            padding-bottom: 30px;
            padding: 0 60px;
            min-height: 198px;
            text-align: center;
            border-radius: 10px;
            background-color: #fff;
            transition: all .4s ease-in-out;
            box-shadow: 0 0 25px 0 rgba(20, 27, 202, .17)
        }
        
        .our-services .icon {
            margin-bottom: -40px;
            transform: translateY(-50%);
            text-align: center;
        }
        
        .our-services:hover h4,
        .our-services:hover p {
            color: #fff
        }
        
        .speedup:hover {
            box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #fb0054 0%, #f55b2a 100%)
        }
        
        .settings:hover {
            box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #34b5bf 0%, #210c59 100%)
        }
        
        .privacy:hover {
            box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #3615e7 0%, #44a2f6 100%)
        }
        
        .backups:hover {
            box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #fc6a0e 0%, #fdb642 100%)
        }
        
        .ssl:hover {
            box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #8d40fb 0%, #5a57fb 100%)
        }
        
        .database:hover {
            box-shadow: 0 0 25px 0 rgba(20, 27, 201, .05);
            cursor: pointer;
            background-image: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%)
        }
        
        #tendanhmuc {
            font-family: 'Oswald', sans-serif;
        }
        /*  ----------------------------------------------*/
        /* Đây  là blog----------------------------------- */
        
        div#nz-div {
            border-bottom: 2px solid black;
            margin-bottom: 20px;
            display: block;
            padding-top: 10px;
        }
        
        #nz-div h3.tde {
            margin: 0;
            font-size: 16px;
            line-height: 20px;
            display: inline-block;
            text-transform: uppercase;
        }
        
        #nz-div h3.tde :after {
            content: "";
            width: 0;
            height: 0;
            border-top: 40px solid transparent;
            border-left: 20px solid black;
            border-bottom: 0px solid transparent;
            border-right: 0 solid transparent;
            position: absolute;
            top: 0px;
            right: -20px;
        }
        
        #nz-div h3.tde span {
            background: black;
            padding: 10px 20px 8px 20px;
            color: white;
            position: relative;
            display: inline-block;
            margin: 0;
        }
        
        .blogs {
            font-family: 'Oswald', sans-serif;
            font: 20px;
        }
        
        #tde {
            text-align: center;
            font-family: 'Oswald', sans-serif;
        }
        
        #tde span {
            color: orange;
        }
        
        .card-title {
            font-weight: bold;
            font-size: 20px;
            color: orange;
        }
        .btn{
            font-size: 20px !important;
        }
        /* ----------------------------------------------------------------------- */
        :root{
        --bg1: #9b59b6;
        --bg2: #3498db;
        --text: #1a1813;
        }
        .sale1{
            background: rgb(255, 255, 255);
            width: 98vw;
            height: 30vh;
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;        
        }
        .iteme{
            background: rgb(0, 0, 0);
            margin-right: 20px;
            height: 100px;
            width: 100px;
            border: 2px solid var(--text);
            display: flex;
            flex-direction: column;
            border-radius: 10%;
            justify-content: center;
            color: rgb(255, 255, 255);
        }
        .iteme span{
            font-weight: bold;
            font-size: 20px !important;
            margin-top: -5px !important;
        }
        .iteme p{
            font-size: 30px;
        }
        .heard{
            margin-bottom: 90px;
        }
        .heard1{
            margin-bottom: 500px;
        }
    </style>
</head>
<body>
    <div class="heard" >
        <?php  require_once("./views/Blok/nav.php"); ?>
    </div>
    <div class="heard1">
        <?php  require_once("./views/Blok/car.php"); ?>
    </div>
    <div>
        <div id='nz-div'>
            <h3 class="tde">
                <span class="null">SẢN PHẨM BÁN CHẠY NHẤT</span>
            </h3>
        </div>    
        <div class="container-fluid sdproduct">    
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                        <div class="carousel-inner">
    
                            <div class="item active">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/1.png" class="img-responsive center-block"></a>
                                    <h4 class="text-center">MAYORAL SUKNJA</h4>
                                    <h5 class="text-center">200,00 TK</h5>
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/2.png" class="img-responsive center-block"></a>
                                    <h4 class="text-center">MAYORAL KOŠULJA</h4>
                                    <h5 class="text-center">2000000</h5>
                                    <h5 class="text-center textct"> 2.000.000 vnđ</h5>
    
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/3.png" class="img-responsive center-block"></a>
                                    <span class="badge">10%</span>
                                    <h4 class="text-center">PANTALONE TERI 2</h4>
                                    <h5 class="text-center">4000,00 TK</h5>
                                    <h6 class="text-center">5000,00 TK</h6>
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/4.png" class="img-responsive center-block"></a>
                                    <h4 class="text-center">CVETNA HALJINA</h4>
                                    <h5 class="text-center">4000,00 RSD</h5>
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/5.png" class="img-responsive center-block"></a>
                                    <h4 class="text-center">MAJICA FOTO</h4>
                                    <h5 class="text-center">40,00 TK</h5>
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/6.png" class="img-responsive center-block"></a>
                                    <h4 class="text-center">MAJICA MAYORAL</h4>
                                    <h5 class="text-center">100,00 TK</h5>
                                </div>
                            </div>
    
                        </div>
    
                        <div id="slider-control">
                            <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
                            <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Item slider end-->
        <script>
            $(document).ready(function() {
    
                $('#itemslider').carousel({
                    interval: 3000
                });
    
                $('.carousel-showmanymoveone .item').each(function() {
                    var itemToClone = $(this);
    
                    for (var i = 1; i < 6; i++) {
                        itemToClone = itemToClone.next();
    
                        if (!itemToClone.length) {
                            itemToClone = $(this).siblings(':first');
                        }
    
                        itemToClone.children(':first-child').clone()
                            .addClass("cloneditem-" + (i))
                            .appendTo($(this));
                    }
                });
            });
        </script>
        <div class="container-fluid bannersale">
            <img class="bannersales" src="./public/img/imgsp/bannersale.jpeg">
        </div>
        <div class="sale1">
            <img src=".\public\img\sale.jpg" alt="" style="font-size: 20px !important;height: 160px;width: 200px;"> 
            <div class="iteme">
                <p>Ngày</p>
                <span id="days">Days</span>
            </div>
            <div class="iteme">
                <p>Giờ</p>
                <span id="hours">Hours</span>
            </div>
            <div class="iteme">
                <p>Phút</p>
                <span id="minutes">Minutes</span>
            </div>    
            <div class="iteme">
                <p>Giây</p>
                <span id="seconds">Seconds</span>
            </div>
        </div>
        <div id='nz-div'>
            <h3 class="tde">
                <span class="null">SẢN PHẨM KHUYẾN MÃI</span>
            </h3>
        </div>
        <div class="container-fluid sdproduct">
    
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="carousel carousel-showmanymoveone slide" id="itemslider">
                        <div class="carousel-inner">
    
                            <div class="item active">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/5.png" class="img-responsive center-block"></a>
                                    <span class="badge">20%</span>
                                    <h4 class="text-center">MAYORAL SUKNJA</h4>
                                    <h5 class="text-center">200,00 TK</h5>
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/6.png" class="img-responsive center-block"></a>
                                    <span class="badge">10%</span>
                                    <h4 class="text-center">MAYORAL KOŠULJA</h4>
                                    <h5 class="text-center">2000000</h5>
                                    <h5 class="text-center textct"> 2.000.000 vnđ</h5>
    
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/4.png" class="img-responsive center-block"></a>
                                    <span class="badge">10%</span>
                                    <h4 class="text-center">PANTALONE TERI 2</h4>
                                    <h5 class="text-center">4000,00 TK</h5>
                                    <h6 class="text-center">5000,00 TK</h6>
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/2.png" class="img-responsive center-block"></a>
                                    <span class="badge">50%</span>
                                    <h4 class="text-center">CVETNA HALJINA</h4>
                                    <h5 class="text-center">4000,00 RSD</h5>
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/3.png" class="img-responsive center-block"></a>
                                    <span class="badge">20%</span>
                                    <h4 class="text-center">MAJICA FOTO</h4>
                                    <h5 class="text-center">40,00 TK</h5>
                                </div>
                            </div>
    
                            <div class="item">
                                <div class="col-xs-12 col-sm-6 col-md-2">
                                    <a href="#"><img src="./public/img/imgsp/1.png" class="img-responsive center-block"></a>
                                    <span class="badge">30%</span>
                                    <h4 class="text-center">MAJICA MAYORAL</h4>
                                    <h5 class="text-center">100,00 TK</h5>
                                </div>
                            </div>
    
                        </div>
    
                        <!-- <div id="slider-control">
                            <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
                            <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
                        </div> -->
    
                    </div>
                    <button class="xemthem"><a href="">Xem thêm</a></button>
                </div>
            </div>
        </div>   
        <section id="counter" class="sec-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 ">
                        <div class="count" id="c1"> 
                            <p class="number">100% <i class="fas fa-check-circle"></i></p>
                            <h4>Hàng chính hãng</h4>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="count" id="c2"> 
                            <p class="number">FREESHIP <i class="fas fa-shipping-fast"></i></p>
                            <h4>Đơn hàng trên 500k</h4>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="count" id="c3"> 
                            <p class="number">HỖ TRỢ <i class="fas fa-user-shield"></i></p>
                            <h4>Tận tình - Thân thiện</h4>
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="count" id="c4"> 
                            <p class="number">SỞ HỮU 2 <i class="fas fa-map-marked-alt"></i></p>
                            <h4>CHI NHÁNH LỚN</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Đây là phần giới thiệu có hình bà chị kế trọ -->
        <div cclass="container-fluid info">
            <div class="row">
                <div class="col-md-5">
                    <img class="girl" src="./public/img/imgsp/girl.png">
                </div>
                <div class="col-md-7 noidung">
                    <h2>ThreeMB Perfume Store</h2>
                    <h4>Yếu tố quyết định sự quý phái trong bạn</h4>
                    <p>
                        Chơi nước hoa là một nghệ thuật, và người chơi nước hoa là biểu hiện của những cá nhân tinh tế giàu lòng trắc ẩn với những chiều sâu cảm xúc biến chuyển theo từng nốt thời gian. Với sự chuyên nghiệp và mong muốn đánh thức vẻ đẹp tiềm ẩn của mỗi cá nhân,
                        các nhà chế tác ThreeMB đã dùng năng lực của mình tạo ra những mùi hương nước hoa tuyệt đỉnh, mang nét đặc trưng riêng có của thương hiệu nước hoa nổi tiếng trên thế giới. Ấp ủ suốt 3 năm tìm tòi và tỉ mỉ trong từng khâu lựa chọn mùi
                        hương, Morra được khai sinh vào cuối năm 2019 và mang theo đó là sứ mệnh đem đến dòng Niche Perfume rất riêng của người Việt, đồng thời đánh thức sự bí ẩn quyến rũ của mỗi người mà không xuất hiện sự trùng lặp nào. Tại showrooms của
                        ThreeMB, các bạn sẽ có cơ hội trải nghiệm quá trình pha chế nước hoa trực tiếp tại cửa hàng thay vì chỉ được mua những sản phẩm pha chế sẵn. Bạn được in tem dán với tên của mình nhằm tạo dấu ấn cá nhân với mùi hương nước hoa mix từ
                        sự sáng tạo của bản thân với sự khéo léo của nhà pha chế từ ThreeMB.
                    </p>
                    <button class="bt1">Khám phá sản phẩm ngay</button>
                </div>
            </div>
    
            <!-- Đây là danh mục thương hiệu-->
            <div id='nz-div'>
                <h3 class="tde">
                    <span class="null">DANH MỤC CÁC THƯƠNG HIỆU</span>
                </h3>
            </div>
            <h1 id="thieu">...THƯƠNG HIỆU SẢN PHẨM...</h1>
            <div class="container-fluid mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services settings">
                                <div class="icon"> <img src="./public/img/imgsp/lg222.png" style="width: 120px;"> </div>
                                <h4>Jean Paul Gaultier</h4>
                                <p>Thương hiệu nước hoa được yêu chuộng nhất 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services speedup">
                                <div class="icon"> <img src="./public/img/imgsp/lg333.png" style="width: 120px;"> </div>
                                <h4>Paco Rabanne</h4>
                                <p>Thương hiệu nước hoa được yêu chuộng nhất 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services privacy">
                                <div class="icon"> <img src="./public/img/imgsp/lg444.png" style="width: 120px;"> </div>
                                <h4>Jimmy Choo</h4>
                                <p>Thương hiệu nước hoa được yêu chuộng nhất 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services backups">
                                <div class="icon"> <img src="./public/img/imgsp/lg555.png" style="width: 120px;"></div>
                                <h4>Gucci</h4>
                                <p>Thương hiệu nước hoa được yêu chuộng nhất 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services ssl">
                                <div class="icon"> <img src="./public/img/imgsp/lg111.png" style="width: 120px;"> </div>
                                <h4>Burberry</h4>
                                <p>Thương hiệu nước hoa được yêu chuộng nhất 2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box">
                            <div class="our-services database">
                                <div class="icon"><img src="./public/img/imgsp/lg666.png" style="width: 120px;"> </div>
                                <h4>Coach</h4>
                                <p>Thương hiệu nước hoa được yêu chuộng nhất 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <!-- ĐÂY là blog-------------- -->
            <div id='nz-div'>
                <h3 class="tde">
                    <span class="null">BẢNG TIN MỖI NGÀY</span>
                </h3>
            </div>
            <h1 id="tde" style="font-size: 35px;font-weight: 500; margin-bottom: 20px;">NƠI CHIA SẼ NHỮNG <span> BÍ QUYẾT VÀNG...</span></h1>
            <section id="gallery">
                <div class="container blogs">
                    <div class="row">
                        <div class="col-lg-4 mb-4">
                            <div class="card" style="width: 400px;">
                                <img src="./public/img/imgsp/blog1.png" style="width:398px" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">CÁCH CHỌN NƯỚC HOA ĐÚNG CÁCH</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                                    <a href="" class="btn btn-outline-success btn-sm">Đọc ngay</a>
                                    <a href="" class="btn btn-outline-danger btn-sm" style="margin-left: 3px;"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card" style="width: 400px;">
                                <img src="./public/img/imgsp/blog2.png" style="width:398px;" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">KHẢ NĂNG LƯU GIỮU MÙI HƯƠNG CỦA GUCCI</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                                    <a href="" class="btn btn-outline-success btn-sm">Đọc ngay</a>
                                    <a href="" class="btn btn-outline-danger btn-sm" style="margin-left: 3px;"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card" style="width: 400px;">
                                <img src="./public/img/imgsp/blog3.png" style="width:398px !important; height: auto ;" alt="" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">TOP 5 NƯỚC HOA ƯA CHUỘNG</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                                    <a href="" class="btn btn-outline-success btn-sm">Đọc ngay</a>
                                    <a href="" class="btn btn-outline-danger btn-sm" style="margin-left: 3px;"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    
        
    
        </div>
    </div>
    <div >
        <?php  require_once("./views/Blok/fooder.php"); ?>
    </div>

    <script>
        var fuT = new Date("june 20,2021 23:00:00").getTime() //Set up ngày  hết hạn cho sale
        setInterval(function(){
    
            var noW = new Date().getTime()
            var D = fuT - noW
            var days = Math.floor(D/(1000*60*60*24))  //set lộ trình chạy
            var hours = Math.floor(D/(1000*60*60))
            var minutes = Math.floor(D/(1000*60))
            var seconds = Math.floor(D/(1000))
    
            hours %=24
            minutes %=24
            seconds %=60
    
            document.getElementById("days").innerText = days //Gắn giá tị cho biến HTML
            document.getElementById("hours").innerText = hours
            document.getElementById("minutes").innerText = minutes
            document.getElementById("seconds").innerText = seconds
        },1000)
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>