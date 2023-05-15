<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./mvc/bootstrap4/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./public/css/fooder.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Saira:wght@300&display=swap" rel="stylesheet">
    <script>
        src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        charset = "UTF-8"
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Broccoli</title>
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Saira:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cinzel&family=Teko:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Sacramento&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poiret+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cookie&display=swap');
body {
    font-family: 'Oswald', sans-serif;
}

.fd1 {
    height: 300px;
    width: 25%;
    border-right: black solid 1px;
}

.fd2 {
    width: 26%;
    border-right: black solid 1px;
}

.fd3 {
    border-right: black solid 1px;
    width: 20%;
}

.icon ul li {
    list-style: none;
    float: left;
}

.icon ul li a {
    font-size: 40px;
    padding-right: 15px;
}

.tw {
    color: cyan;
}

.gg {
    color: rgb(248, 72, 72);
}

.fb {
    color: rgb(64, 12, 187);
}

.ins {
    color: rgb(223, 14, 14);
}

.logo {
    padding-top: 20px;
    margin-left: 57px;
}

#tieude {
    font-size: 20px;
    padding-left: 15px;
    text-align: left;
    color: #8f8f8f;
}

.icon h3 {
    padding-left: 15px;
}

.content {
    max-width: 650px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 2;
}

.content h2 {
    color: #243c4f;
    margin-bottom: 40px;
}

.content .form-control {
    height: 40px;
    border-color: #ffffff;
    border-radius: 0;
}

.content.form-control:focus {
    box-shadow: none;
    border: 2px solid #243c4f;
}

.content .btn {
    min-height: 40px;
    border-radius: 0;
    background: #243c4f;
    color: #fff;
    font-weight: 500;
}

.tieude2 {
    /* text-align: center; */
    padding-top: 20px;
    color: white;
    padding-left: 38px;
    font-size: xx-large;
}

.fooder {
    background: black;
    height: 480px;
    position: absolute;
    z-index: 1;
}

.fd2 ul li a {
    color: #8f8f8f
}

.fd3 ul li a {
    color: #8f8f8f;
}

.chinhanh {
    color: #8f8f8f;
}

.fd1 h3 {
    color: white;
}

#ngang {
    height: 0.1px;
    background-color: #999999;
    margin-top: 15px;
    width: 900px;
    margin-left: 170px;
}

.end {
    text-align: center;
    color: white;
}

#chungnhan {
    width: 100px;
    padding-left: 10px;
}

.thuonghieu .row .th1 {
    text-align: center;
    font-family: 'Cookie', cursive;
    font-size: 40px;
}

.thuonghieu .row .th2 {
    text-align: center;
    font-family: 'Poiret One', cursive;
    font-size: 38px;
}

.thuonghieu .row .th3 {
    text-align: end;
    font-family: 'Orbitron', sans-serif;
    font-size: 34px;
}

.thuonghieu .row .th4 {
    text-align: end;
    font-family: 'Cinzel', serif;
    font-size: 40px;
}

.thuonghieu .row .th5 {
    text-align: end !important;
    font-family: 'Sacramento', cursive;
    font-size: 45px !important;
}

.thuonghieu .row .th6 {
    text-align: -webkit-center;
    font-family: 'Teko', sans-serif;
    font-size: 50px !important;
} 
ul{
    font-size:large;
}
.fooder{
    margin-left: -15px;
}
p{
    font-size: initial;
}
    </style>
    
</head>

<body>

    <div class="container-fluid thuonghieu">
        <div class="row TH">
            <div class="col-md-2 th1">Jean Paul Gaultier</div>
            <div class="col-md-2 th2">Paco Rabanne</div>
            <div class="col-md-2 th3">Jimmy Choo</div>
            <div class="col-md-2 th4">Gucci</div>
            <div class="col-md-2 th5">Burberry</div>
            <div class="col-md-2 th6">Coach</div>

        </div>
    </div>
    <div class="container-fluid fooder">
        <div class="row">
            <div class="row-md-3 fd1">
                <img class="logo" src="./public/img/logo.jpg" style="width:200px;">
                <p id="tieude">Không phải là tao chưa biết ghi gì ở đây, tao nghĩ ra rồi nhưng tao không muốn ghi dô thôi Khi nào rãnh thời gian tao sẽ tuông lời hay ý đẹp dô đây ! </p>
                <div class="icon">
                    <h3>Theo dõi chúng tôi !</h3>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook fb"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter tw"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus gg"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin lk"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram ins"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row-md-3 fd3">
                <h4 class="tieude2">VỀ CHÚNG TÔI</h4>
                <ul>
                    <li><a href="#">Lịch sử thương hiệu</a></li>
                    <li><a href="#"> Ưu đãi khách hàng</a></li>
                    <li><a href="#">Chính sách chung</a></li>
                    <li><a href="#">Hợp tác kinh doanh</a></li>
                    <li><a href="#">Quy định chung</a></li>
                </ul>
            </div>
            <div class="row-md-3 fd2">
                <h4 class="tieude2">THƯƠNG HIỆU SẢN PHẨM</h4>
                <ul>
                    <li><a href="#">Jean Paul Gaultier</a></li>
                    <li><a href="#">Paco Rabanne</a></li>
                    <li><a href="#">Jimmy Choo</a></li>
                    <li><a href="#">Gucci</a></li>
                    <li><a href="#">Burberry</a></li>
                    <li><a href="#">Coach</a></li>
                </ul>

            </div>
            <div class="row-md-3 fd2">
                <h4 class="tieude2">THÔNG TIN LIÊN HỆ</h4>
                <ul>
                    <li>
                        <a>
                            <p class="chinhanh">Chi Nhánh 1</p>
                            <p class="chinhanh">69 Trần Phú, Cái Khế/ Hotline: 0973731800 </p>
                        </a>
                    </li>
                    <li>
                        <a>
                            <p class="chinhanh">Chi Nhánh 2</p>
                            <p class="chinhanh">19 Nguyễn Văn Cừ,Ninh Kiều Hotline: 0973731822 </p>

                        </a>
                    </li>


                </ul>
                <div class="content">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Nhập vào những góp ý">
                        <span class="input-group-btn">
                             <button class="btn" type="submit" style="font-size: 14px !important;">Gửi ngay</button>
                             </span>
                    </div>
                </div>

            </div>
        </div>
        <div id="ngang"></div><br>
        <p class="end">ThreeMB@gmail.com. <img id="chungnhan" src="./public/img/chungnhan.png (1).png">
        </p>
        <p class="end">Copyright © 2008 Công ty Cổ Phần Thương Mại ThreeMB NƯỚC HOA.</p>
        <p class="end"> Giấy chứng nhận ĐKKD số: 0314354419 do Sở Kế Hoạch và Đầu Tư TPHCM cấp lần đầu ngày 17/04/2021.</p>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>