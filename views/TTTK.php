

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="./public/css/tttk.css">
    <style>
        *{
            box-shadow: none!important;
        }
        #user-profile .profile-img {
            padding: 0px;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 50%;
            margin-left: 25px;
        }
    </style>
</head>
<body>
    
    <div>
    <?php  require_once("./views/Blok/nav.php"); ?>
    </div>
    
    <div style="margin-top: 200px;">
        <div class="KT">

        </div>
    <div class="container "></div>
    <div class="container bootstrap snippets bootdeys">
        <div class="row" id="user-profile">
            <div class="col-lg-3 col-md-4 col-sm-4" style="background: black; box-shadow: black !important; border: none;     margin-left: -31px;    height: 336px;">
                <div class="main-box clearfix1" style="box-shadow: black ! height: 250px; ">
                    <h2 style="color: rgb(55, 215, 236);"><?php echo $data['taikhoan']; ?></h2>
                    <div class="profile-status">
                        <i class="fas fa-circle"></i>  Online
                    </div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzVzDH5skaX2UfFWVvmGteqkbNu7iLQiynkA&usqp=CAU" style="width: 215px;" alt="" class="profile-img img-responsive center-block">
                    <div class="profile-label">
                    </div>

                </div>
            </div>

            <div class="col-lg-9 col-md-8 col-sm-8" style="background: black; box-shadow: black !important; border: none;    height: 290px;">
                <div class="main-box clearfix" >
                    <div class="profile-header">
                        <h3><span>THÔNG TIN CÁ NHÂN</span></h3>
                    </div>

                    <div class="row profile-user-info">
                        <div class="col-sm-8">
                            <!-- <div class="profile-user-details ">
                                <div class="profile-user-details-label">
                                    Họ
                                </div>
                                <div class="profile-user-details-value">
                                    Đỗ
                                </div>
                            </div> -->
                            <div class="profile-user-details" style="margin-top: 20px;">
                                <div class="profile-user-details-label">
                                    Họ Tên:
                                </div>
                                <div class="profile-user-details-value">
                                    <?php echo $data['hoten']; ?>
                                </div>
                            </div>
                            <div class="profile-user-details" style="margin-top: 20px;">
                                <div class="profile-user-details-label" >
                                    Địa chỉ:
                                </div>
                                <div class="profile-user-details-value">
                                    <?php echo $data['diachi']; ?>
                                </div>
                            </div>
                            <div class="profile-user-details" style="margin-top: 20px;margin-left: -10px;">
                                <div class="profile-user-details-label">
                                    Email:
                                </div>
                                <div class="profile-user-details-value">
                                    <?php echo $data['email']; ?>
                                </div>
                            </div>
                            <div class="profile-user-details " style="margin-top: 0px; margin-left: 50px;">
                                <div class="profile-user-details-label">
                                    Số điện thoại:
                                </div>
                                <div class="profile-user-details-value">
                                    <?php echo $data['sdt']; ?>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <input type="submit" value="ĐĂNG XUẤT" name="update_cart" class="button" onclick="location.href='?view=DangXuat';">
                <a href="?view=CNTK"><input type="submit" value="SỬA THÔNG TIN" name="update_cart" class="button" ></a>
                <a href="?view=DoiMatKhau"><input type="submit" value="ĐỔI MẬT KHẨU" name="update_cart" class="button" ></a>

            </div>
        </div>
    </div>
    </div>
    
    <div class="" style="margin-top: 200px;"> 
      <?php  require_once("views/Blok/fooder.php"); ?>
    </div>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <script src="js/main.js"></script>   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>
</html>