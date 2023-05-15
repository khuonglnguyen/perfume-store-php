<?php
  $tbltable = "thuonghieu";
  $navth = $db->getalldata($tbltable);
  $total = 0;
  if(isset($_SESSION['cart']) && $_SESSION['cart'] != null){
      foreach($_SESSION['cart'] as $list){
          $total += $list['soluong'];
      }
  }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Apple Menu Search Animation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<script defer src="/your-path-to-fontawesome/js/brands.js"></script>
<script defer src="/your-path-to-fontawesome/js/solid.js"></script>
<script defer src="/your-path-to-fontawesome/js/fontawesome.js"></script>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>

  .vh {
      border: 0;
      clip: rect(0 0 0 0);
      height: 1px;
      margin: -1px;
      overflow: hidden;
      padding: 0;
      position: absolute;
      width: 1px;
    }

    .fade-screen {
      background: rgba(0, 0, 0, 0.2);
      visibility: hidden;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }

    @-webkit-keyframes specialFadeIn {
      from {
        opacity: 0;
        transform: scale(0.8);
      }
      to {
        opacity: 1;
      }
    }

    @keyframes specialFadeIn {
      from {
        opacity: 0;
        transform: scale(0.8);
      }
      to {
        opacity: 1;
      }
    }
    .specialFadeIn {
      -webkit-animation-name: specialFadeIn;
              animation-name: specialFadeIn;
    }

    @-webkit-keyframes specialFadeOut {
      from {
        opacity: 1;
      }
      to {
        opacity: 0;
        transform: scale(0.8);
      }
    }

    @keyframes specialFadeOut {
      from {
        opacity: 1;
      }
      to {
        opacity: 0;
        transform: scale(0.8);
      }
    }
    .specialFadeOut {
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
    }

    @-webkit-keyframes specialSlideInRight {
      from {
        transform: translate3d(10%, 0, 0);
        visibility: visible;
      }
      to {
        transform: translate3d(0, 0, 0);
      }
    }

    @keyframes specialSlideInRight {
      from {
        transform: translate3d(10%, 0, 0);
        visibility: visible;
      }
      to {
        transform: translate3d(0, 0, 0);
      }
    }
    .specialSlideInRight {
      -webkit-animation-name: specialSlideInRight;
              animation-name: specialSlideInRight;
    }

    @-webkit-keyframes specialFadeInRight {
      from {
        opacity: 0;
        transform: translate3d(10%, 0, 0);
      }
      to {
        opacity: 1;
        transform: none;
      }
    }

    @keyframes specialFadeInRight {
      from {
        opacity: 0;
        transform: translate3d(10%, 0, 0);
      }
      to {
        opacity: 1;
        transform: none;
      }
    }
    .spceialFadeInRight {
      -webkit-animation-name: specialFadeInRight;
              animation-name: specialFadeInRight;
    }

    .menu-search-container.active {
      display: block;
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
      transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .visible {
      visibility: visible;
    }

    .hidden {
      display: none;
      transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .menu ul li {
      transition: opacity 0.2s cubic-bezier(0.645, 0.045, 0.355, 1);
    }

    .menu-mac.is-closed {
      -webkit-animation-name: specialFadeIn;
              animation-name: specialFadeIn;
      -webkit-animation-delay: 30ms;
              animation-delay: 30ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    .menu-mac.hidden {
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
      -webkit-animation-delay: 245ms;
              animation-delay: 245ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .menu-iPad.is-closed {
      -webkit-animation-name: specialFadeIn;
              animation-name: specialFadeIn;
      -webkit-animation-delay: 70ms;
              animation-delay: 70ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    .menu-iPad.hidden {
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
      -webkit-animation-delay: 210ms;
              animation-delay: 210ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .menu-iPhone.is-closed {
      -webkit-animation-name: specialFadeIn;
              animation-name: specialFadeIn;
      -webkit-animation-delay: 100ms;
              animation-delay: 100ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    .menu-iPhone.hidden {
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
      -webkit-animation-delay: 170ms;
              animation-delay: 170ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .menu-watch.is-closed {
      -webkit-animation-name: specialFadeIn;
              animation-name: specialFadeIn;
      -webkit-animation-delay: 130ms;
              animation-delay: 130ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    .menu-watch.hidden {
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
      -webkit-animation-delay: 130ms;
              animation-delay: 130ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .menu-tv.is-closed {
      -webkit-animation-name: specialFadeIn;
              animation-name: specialFadeIn;
      -webkit-animation-delay: 170ms;
              animation-delay: 170ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    .menu-tv.hidden {
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
      -webkit-animation-delay: 100ms;
              animation-delay: 100ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .menu-support.is-closed {
      -webkit-animation-name: specialFadeIn;
              animation-name: specialFadeIn;
      -webkit-animation-delay: 210ms;
              animation-delay: 210ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    .menu-support.hidden {
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
      -webkit-animation-delay: 70ms;
              animation-delay: 70ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .menu-search.is-closed {
      -webkit-animation-name: specialFadeIn;
              animation-name: specialFadeIn;
      -webkit-animation-delay: 245ms;
              animation-delay: 245ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    .menu-search.hidden {
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
      -webkit-animation-delay: 30ms;
              animation-delay: 30ms;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .menu-store.is-closed {
      -webkit-animation-name: specialFadeIn;
              animation-name: specialFadeIn;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    .menu-store.hidden {
      -webkit-animation-name: specialFadeOut;
              animation-name: specialFadeOut;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .menu-search-input {
      -webkit-animation-name: specialFadeInRight;
              animation-name: specialFadeInRight;
      -webkit-animation-duration: 400ms;
              animation-duration: 400ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
      -webkit-animation-delay: 350ms;
              animation-delay: 350ms;
    }

    .search-sub-menu h3 {
      -webkit-animation-name: specialFadeInRight;
              animation-name: specialFadeInRight;
      -webkit-animation-duration: 700ms;
              animation-duration: 700ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }

    .search-sub-menu ul li {
      -webkit-animation-name: specialFadeInRight;
              animation-name: specialFadeInRight;
      -webkit-animation-duration: 500ms;
              animation-duration: 500ms;
      -webkit-animation-fill-mode: both;
              animation-fill-mode: both;
    }
    .search-sub-menu ul li:nth-child(1) {
      -webkit-animation-delay: 0ms;
              animation-delay: 0ms;
    }
    .search-sub-menu ul li:nth-child(2) {
      -webkit-animation-delay: 30ms;
              animation-delay: 30ms;
    }
    .search-sub-menu ul li:nth-child(3) {
      -webkit-animation-delay: 50ms;
              animation-delay: 50ms;
    }
    .search-sub-menu ul li:nth-child(4) {
      -webkit-animation-delay: 70ms;
              animation-delay: 70ms;
    }
    .search-sub-menu ul li:nth-child(5) {
      -webkit-animation-delay: 90ms;
              animation-delay: 90ms;
    }

    nav {
      position: absolute;
      top: 0;
      right: 0;
      left: 0;
      height: 90px;
      min-width: 1024px;
      color: #ffffff;
      font-size: 18px;
      z-index: 2;
    }

    .menu-container {
      position: relative;
      margin: 0 auto;
      margin-top: -5px;
      max-width: 1200px;
      margin-left: 350px;
      padding: 0 25px;
    }
    .menu-container ul {
      list-style: none;
    }
    .menu-container ul li {
      display: inline-block;
      text-align: center;
      width: auto;
      margin-right: 62px;
      margin-top: 38px;
    }
    .menu-container ul li:last-child {
      margin-right: 0;
    }
    .menu-container ul li a {
      display: inline-block;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
      text-decoration: none;
      color: rgb(0, 0, 0);
      font-weight: 100;
      font-size: 18px;
      float: left;
    }
    .menu-container ul li a:hover {
      color: #969696;
    }
    .menu-container.menu-apple {
      background-repeat: no-repeat;
      width: 20px;
    }

    .apple-icon {
      font-size: 20px;
    }

    .menu-search-container {
      display: none;
      position: absolute;
      top: 18px;
      left: 20.6667%;
      width: 56.66667%;
      z-index: 2;
    }
    .menu-search-container input {
      background-color: transparent;
      border: none;
      width: 80%;
      font-size: 16px;
      outline: none;
      color: rgb(0, 0, 0);
    }
    .menu-search-container a {
      color: rgb(0, 0, 0);
    }
    .menu-search-container a:first-child {
      display: block;
      float: left;
      padding-right: 10px;
    }
    .menu-search-container.active {
      display: block;
    }

    .menu-search-close {
      position: absolute;
      right: -183px;
      top: 0;
    }

    .search-sub-menu {
      background: #fff;
      width: 125%;
      margin-top: 14px;
      margin-left: 30px;
      color: rgb(0, 0, 0);
      font-weight: 100;
      padding: 24px 0 15px;
      z-index: 1;
    }
    .search-sub-menu h3 {
      font-size: 18px;
      font-weight: 100;
      margin-top: 0;
      padding-left: 28px;
    }
    .search-sub-menu ul {
      margin: 0;
      padding: 0;
      width: 100%;
    }
    .search-sub-menu ul li {
      display: block;
      text-align: left;
      padding-bottom: 10px;
      margin: 0;
      text-indent: 50px;
    }
    .search-sub-menu ul li a {
      font-size: 14px;
      color: #999;
      width: 100%;
      padding-top: 5px;
      padding-bottom: 5px;
    }
    .search-sub-menu ul li a:hover {
      background-color: #000000;
      color: #ffffff;
    }
    .search-sub-menu ul li a:first-child {
      float: none;
      padding-right: 0;
    }

    .dropdown{
      position: relative;
      display: inline-block;
      margin-top: 20px !important;
    }


    /*sub-menu*/
    .dropdown-content{
      display: none;
      position: absolute;
      background: rgb(0, 0, 0) !important;
      color: rgb(255, 255, 255) !important;
      z-index: 1;
      list-style: none;
      margin-top: 20px !important;
    }


.dropdown-content a:hover{
  background: yellow !important;
  color: #000 !important;
}
    .dropdown:hover .dropdown-content{
      display: block;
      margin-top: 25px !important;
      margin-left: -25px;
    }
    .SL{
      background: red;
        position: absolute;
        margin-top: -10px;
        margin-left: 10px;
        border-radius: 40%;
        width: 19px;
        height: 21px;
        text-align: center;
        font-size: small;

    }
    .SL span{
      text-align: center;
      margin-top: 4px;
    }
/* ----------------------------------------------------------------------- */

</style>
</head>
<body>
<!-- partial:index.partial.html -->
<header>
<nav>
  <div class="menu-container" class="collapse navbar-collapse navbar-nav" id="navbarNavDropdown">
    <!-- Menu -->
    <a class="navbar-brand" href="#"><img src="./public/img/000TTT.png" alt="" style="    margin-top: 0px;
      height: 90px;
      margin-left: -400px;position: absolute;"></a>
    <ul class="menu ">
      
     
      <li class="menu-mac">
        <a href="?view=trangchu">
          <span style=" font-weight:500; ">Trang Chủ</span>
        </a>
      </li>
      <li class="menu-iPad">
        <a href="?view=GT">
          <span>Giới thiệu</span>
        </a>
      </li>
      <li class="menu-iPhone nav-item dropdown" > 
        <a  href="?view=sanpham" id="navbarDropdown"><span style="margin-top: -5px !important;">Sản Phẩm</span></a>
          <div class="dropdown-content">
          <?php
            foreach($navth as $row){
          ?>
            <a class="dropdown-item" href="?view=sanpham&math=<?php echo $row['math']; ?>" style="color: white;"><?php echo $row['tenth']; ?></a>
            <div class="dropdown-divider"></div>
          <?php
            }
          ?>
          <!-- <div class="dropdown-content">
          <a class="dropdown-item" href="#" style>Jean Paul Gaultier</a>
          
          <a class="dropdown-item" href="#">Paco Rabanne</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Jimmy Choo</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Gucci</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Burberry</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Nina Ricci</a> -->
      </li>
      <li class="menu-tv">
        <a href="?view=Blog">
          <span>Tin Tức</span>
        </a>
      </li>
      <li class="menu-watch">
        <a href="?view=LienHe">
          <span>Liên Hệ</span>
        </a>
      </li>

      
      <li class="menu-search" style="margin-left: 230px; margin-right: 30px; font-size: 45px;">
        <a href="#">
          <i class="fa fa-search" aria-hidden="true" style=" font-size: 23px;"></i>
        </a>
      </li>
      <li class="menu-store" style=" margin-right: 30px;">
        <a href="?view=giohang">
          <i class="fa fa-shopping-bag" aria-hidden="true" style=" font-size: 23px;"></i>
        </a>
        <div class="SL">
          <span>
            <?= $total?>
          </span>
        </div>
      </li>
      <li class="menu-store nav-item dropdown" style=" margin-right: 20px;">
        
          
          <a  href="#" id="navbarDropdown"><i class="fas fa-user" aria-hidden="true" style=" font-size: 23px;"></i></a>
          <div class="dropdown-content">
            <?php if(isset($_SESSION['user'])){ ?>
              <a class="dropdown-item" href="?view=DangXuat"style="color: white !important;">Đăng Xuất</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="?view=TaiKhoan"style="color: white !important;">Tài Khoản</a>
              <div class="dropdown-divider"></div>
              <?php if($_SESSION['user']['phanquyen']=='0'){ ?>
              <a class="dropdown-item" href="?view=QuanTri"style="color: white !important;"> Quản Trị</a>
              <div class="dropdown-divider"></div>
              <?php } ?>
            <?php }else{ ?>
            <a class="dropdown-item" href="?view=DangKy"style="color: white !important;">Đăng Ký</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?view=DangNhap" style="color: white !important;" >Đăng Nhập</a>
            <div class="dropdown-divider"></div>
            <?php } ?>
          </div>
      </li>
    </ul>
    
    <!-- Search -->
    <div class="menu-search-container">
      <div class="menu-search-input">
      <form action="?view=KQTK" method=post>
        <a href="#">
          <i class="fa fa-search" aria-hidden="true"></i>
        </a>
        <input name="searchkey" class="menu-search-input" type="text" aria-label="Search apple.com" placeholder="Search apple.com" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false">
      </form>
      </div>
      <a class="menu-search-close" href="#">
        <i class="fa fa-close" aria-hidden="true"></i>
      </a> 
      <!-- <div class="search-sub-menu">
      <h3>Sản phẩm bạn cần tìm</h3>
      <div class="row no-gutters mx-auto justify-content-start flex-sm-row flex-column">
          <div class="col-md-3 text-center"><img class="irc_mi img-fluid mr-0" src="https://genie.com.vn/wp-content/uploads/2019/04/nuoc-hoa-vung-kin-genie-paris-choi-dear-darling.jpg" width="100" height="100"></div>
          <div class="col-md-6 " >
              <div class="card border-0 " style="margin-left:-30px; margin-top:10px">
                  <div class="card-body">
                      <h5 class="card-title "><b>Nước hoa 001</b></h6>
                      <p class="card-text " style="width: 375px;">
                          <p>Giá: 150.00đ</p>
                      </p> 
                  </div>
              </div>
          </div>
      </div> -->
    </div>
    </div>
   
  </div>
</nav>
</header>
<div class="fade-screen"></div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="script.js"></script>
<script>
    (function() {

      'use strict';

      var $searchView = $('.menu-search-container');
      var $menu = $('.menu-mac, .menu-iPad, .menu-iPhone, .menu-watch, .menu-tv, .menu-support, .menu-search, .menu-store');
      var $fadeScreen = $('.fade-screen');

      $('li.menu-search a, .fade-screen, .menu-search-close').on('click', function(e) {
        
        $searchView.toggleClass('active');
        
        setTimeout(function(){
          $searchView.children().find('input').focus();
        }, 1100);
        
        $fadeScreen.toggleClass('visible');
        $menu.removeClass('is-closed');
        $menu.toggleClass('hidden');
        
        e.preventDefault();
      });

      $('.fade-screen,.menu-search-close').on('click', function(e) {
        $menu.toggleClass('is-closed');
        e.preventDefault();
      });
        
      }())
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
