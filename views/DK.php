<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Đăng Nhập - ThreeMB</title>
  <link rel="stylesheet" href="./views/css/DN.css">

</head>
<body>
  <div class="nen">
    <img src="https://www.wallpapertip.com/wmimgs/28-285037_small-memory-hd-4k.jpg" alt="">
  </div>
<!-- partial:index.partial.html -->
<div class="login-box">
  <h2>Đăng Ký</h2>

  <form action="?view=DangKy" method="POST">
    <div class="user-box">
      <input type="text" name="taikhoan" required="" oninvalid="setCustomValidity('Vui lòng kiểm tra lại thông tin')">
      <label>Tài khoản</label>
    </div>
    <div class="user-box">
      <input type="password" name="matkhau" required="" oninvalid="setCustomValidity('Vui lòng kiểm tra lại thông tin')">
      <label>Mật khẩu</label>
    </div>
    <div class="user-box">
      <input type="password" name="matkhaulan2" required="" oninvalid="setCustomValidity('Vui lòng kiểm tra lại thông tin')">
      <label>Nhập lại mật khẩu</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required="" oninvalid="setCustomValidity('Vui lòng kiểm tra lại thông tin')">
      <label>E-mail</label>
    </div>
    <button style="background: none; border: none;" type="submit" name="DK">
          <a  style="background: rgba(0, 0, 0, 0.774); width: 280px; text-align: center;" type="submit" name="DangKy">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Đăng Ký
    </a>
    </button>
    <a href="?view=trangchu" style="background: rgba(0, 0, 0, 0.774);width: 280px; text-align: center;">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Quay Lại
    </a>
  </form>
</div>
<!-- partial -->
  
</body>
</html>
