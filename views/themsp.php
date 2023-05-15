<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./public/css/themsp.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Saira:wght@300&display=swap" rel="stylesheet">
    <script>
        src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        charset = "UTF-8"
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Broccoli</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'><link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
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

</head>

<body>
    <div class="container">
        <div class=" text-center mt-5 ">
            <h1>THÊM SẢN PHẨM</h1>
        </div>
        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class="container formmain">
                            <form id="contact-form" role="form" method="post">
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_tensp">Tên sản phẩm:</label> <input id="form_tensp" type="text" name="tensp" class="form-control"> </div>
                                        </div>
                                
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_loai">Loại sản phẩm:</label> <select id="form_loai" name="loai" class="form-control" required="required">
                                                <option value="" selected disabled>Chọn loại sản phẩm</option>
                                                <?php foreach($thuonghieu as $row){ ?>
                                                <option value="<?php echo $row['math'];?>"><?php echo $row['tenth'];?></option>
                                                <?php } ?>  
                                            </select> </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_xuatxu">Xuất xứ:</label> <input id="form_xuatxu" type="text" name="xuatxu" class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_hinhanh">Hình ảnh:</label> <input id="form_hinhanh" type="text" name="hinhanh" class="form-control"> </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group"> <label for="form_hinhanh">Giới tính:</label> <input id="form_hinhanh" type="text" name="phai" class="form-control"> </div>
                                        </div>           
                                      
                                    </div>
                                    <div class="row">

                                    <div class="col-md-4">
                                            <div class="form-group"> <label for="huong">Giá 1:</label> <input id="form_huong" type="text" name="gia1" class="huong"> </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> <label for="huong">Giá 2:</label> <input id="form_huong" type="text" name="gia2" class="huong"> </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> <label for="huong">Giá 3:</label> <input id="form_huong" type="text" name="gia3" class="huong"> </div>
                                        </div>
                                   
                                    </div>
                                    <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group"> <label for="huong">Dung tích 1:</label> <input id="form_huong" type="text" name="dungtich1" class="huong"> </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> <label for="huong">Dung tích 2:</label> <input id="form_huong" type="text" name="dungtich2" class="huong"> </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> <label for="huong">Dung tích 3:</label> <input id="form_huong" type="text" name="dungtich3" class="huong"> </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group"> <label for="huong">Hương đầu:</label> <input id="form_huong" type="text" name="huong1" class="huong"> </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> <label for="huong">Hương giữa:</label> <input id="form_huong" type="text" name="huong2" class="huong"> </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> <label for="huong">Hương cuối:</label> <input id="form_huong" type="text" name="huong3" class="huong"> </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group"> <label for="form_message">Mô tả chi tiết sản phẩm</label> <textarea id="form_message" name="mota" class="form-control"></textarea> </div>
                                        </div>
                                        <div>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="col-md-4"> <a href=""><input type="submit" name="themsp" class="btn btn-success btn-send pt-2 btn-block " value="Xác nhận" style="margin-left:100px;" ></a> </div>
                                        <div class="col-md-4">
                                            <a href="?view=qlsp"> 
                                                <input  class="btn btn-success btn-send pt-2 btn-block " value="Thoát"  style="margin-left:150px;"> 
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.8 -->
            </div>
            <!-- /.row-->
        </div>
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