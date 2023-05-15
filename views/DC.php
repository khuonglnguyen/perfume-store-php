

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=njs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdnjs.cloudfedge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/HD.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdlare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<script defer src="/your-path-to-fontawesome/js/brands.js"></script>
<script defer src="/your-path-to-fontawesome/js/solid.js"></script>
<script defer src="/your-path-to-fontawesome/js/fontawesome.js"></script>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script defer src="/your-path-to-fontawesome/js/brands.js"></script>
  <script defer src="/your-path-to-fontawesome/js/solid.js"></script>
  <script defer src="/your-path-to-fontawesome/js/fontawesome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,900;1,400&display=swap" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->

</head>
<body>
    
    <div>
        <?php require_once "./views/Blok/nav.php" ?>
    </div>
    

    <div class="container-fluid">
        <div class="container-sm" style="margin-top: 200px;">
            <div class="_1G9Cv7">

            </div>
            <div class="Hang1">
                
                <i class="fas fa-map-marker-alt"></i>
                Địa Chỉ Nhận Hàng
         
                <button type="button" class="them" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" ><img src="./public/img/location.png" alt="" style="height: 25px; width: 25px;"> Thêm Địa Chỉ</button>
               

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 >Thông Tin Khách Hàng </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tên Khách Hàng:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Địa Chỉ:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">SDT:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
                        <button type="button" class="btn btn-primary">Thêm Mới</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row DC">
                <div class="col-2">
                    <i class="fas fa-dot-circle" style="color: rgb(0, 252, 84);"></i>
                  Nguyễn Phúc Khang 
                  
                </div>
                <div class="col-7">
                  189B Nguyễn thị Minh Khai, P.Xuân Khánh, Q.Ninh Kiều, TP.Cần Thơ
                </div>
                <div class="col">
                    <p>0901228320</p>
                </div>
                <div class="col">
                    <button class="TD"> Thay Đổi</button>
                  </div>
              </div>
        </div>
        <br>
        <div class="container-sm">
            <div class="Hang2">
                <div class="row SP">
                    <div class="col-6">
                      Sản Phẩm
                      
                    </div>
                    <div class="col">
                      Đơn giá
                    </div>
                    <div class="col">
                        SL
                    </div>
                    <div class="col">
                       Thành Tiền
                    </div>
                </div>
                <br>
                <?php  $tongtien=0; foreach($product as $item) :?>
                <div class="row ">
                    <div class="col-6">
                        <img src="<?php echo $item['img'];?>" alt="" style="height: 50px; width: 50px;">
                        <span><?php echo $item['tensanpham'];?></span>
                    </div>
                    <div class="col">
                    <?php echo $gia=number_format($item['gia']);?>đ
                    </div>
                    <div class="col">
                        <?php echo $item['soluong'];?>
                    </div>
                    <div class="col">
                    <?php echo $tonggiasp=number_format($item['gia']*$item['soluong']);?>đ
                    </div>
                </div>
                <?php (float)$tongtien = (float)$tongtien + ((float)$item['gia']*(float)$item['soluong']); ?>
                                        <?php endforeach; ?>
                <br>
                <div class="_2kNe1K">
                    <div class="row ">

                        <div class="col-4 GG">
                            <div class="col-3">
                                <label for="">Giảm giá:</label>
    
                            </div>
                            <div class="col-1"  style="float: left; ">
                           
                                <input type="text" style="float: left;margin-left: 27px;    height: 35px;
                                margin-top: -30px;">
                            </div>
                        </div>
                        
                            <div class="col-2" >
                              Đơn vị vận chuyển: 
                            </div>
                            <div class="col-1" style="width: 210px; margin-left: -110px; margin-top: -27px;">
                                <div class="form-group"> <label for="form_loai"></label> 
                                    <select id="form_loai" name="loai" class="form-control" required="required" onchange="VanChuyen(value)">
                                        <option value="" selected disabled>Chọn Cty Giao Hàng</option>
                                        <?php foreach($ship as $row) :?>
                                        <option <?php if($vanchuyen==$row['id']){echo "selected";} ?> value="<?php echo $row['id']; ?>"><?php echo $row['tenship']; ?></option>
                                        <!-- <option>Giao Hàng Nhanh</option>
                                        <option>Viettel Post</option>
                                        <option>Ship Chung</option>
                                        <option>Ninja Van Ship  </option>
                                        <option>Bưu Điện</option> -->
                                        <?php endforeach; ?>
                                    </select>
                                    <script type="text/javascript">
                                        function VanChuyen(value) {
                                            var searchParams = new URLSearchParams(window.location.search)
                                            searchParams.set('vanchuyen', value)
                                            window.location.search = searchParams.toString()
                                        }
                                    </script>
                                </div>
                            </div>
                            </div>
                            <div class="col-1" style="float: left; margin-left: 1100px;
                            margin-top: -40px;" >
                                <?php $phiship=$giaship['gia']; echo $phiship; ?>
                            </div>
                       

                    </div>
                </div>
                <div class="Hang2">
                    <div class="row ">
                        <div class="col-6">
                          
                          
                        </div>
                        <div class="col">
                         
                        </div>
                        <div class="col" style="text-align: right;">
                           Tổng giá tiền:
                        </div>
                        <div class="col">
                           
                           <div class="row">
                                <h6 style="margin-top: 2px !important; color: red;"><?=number_format($tongtien+$phiship)?>đ</h6>
                           </div>
                           <div class="row">
                                <button class="TT">Thanh Toán </button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    
    <script>
        var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})
    </script>
    
    <div class="fd " style="margin-top: 200px;" > 
        <?php require_once "./views/Blok/fooder.php" ?>
    </div>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>
</html>