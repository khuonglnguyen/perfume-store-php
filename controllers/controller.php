<?php
$db = new database;
$db->connect();
session_start();

if(isset($_GET['view'])){
    $view = $_GET['view'];
}
else{
    $view ='';
}

$thanhcong =array();

switch($view){
    case 'trangchu':{
        $tbltable = "sanpham";
        $data = $db->getalldata($tbltable);
        require_once('views/trangchu.php');
        break;
    }
    case 'sanpham':{
        if(isset($_GET['math'])){
            $math = $_GET['math'];
            $sp = $db->Sanphamth($math);
        }
        else{
            $tbltable = "sanpham";
            $sp = $db->getalldata($tbltable);
        }
        require_once('views/SP.php');
        break;
    }
    case 'chitiet':{
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $ctsp = $db->Chitietsp($id);
        }
        require_once('views/ChiTiet.php');
        break;
    }
    case 'qlsp':{
        $tbltable = "sanpham";
        $data = $db->getalldata($tbltable);
        require_once('views/qlsp.php');
        break;
    }
    case 'giohang':{
        if(isset($_GET['action']) && isset($_GET['id'])){
            $action = $_GET['action'];
            if(isset($_POST['soluong'])){
                $soluong = $_POST['soluong'];
            }else{
                $soluong = 1;
            }
            $id = $_GET['id'];
            switch($action){
                case 'them':{
                    $gh = $db->Chitietsp($id);
                    foreach($gh as $row){
                        $img=$row['hinh'];
                        $ten=$row['tensp'];
                        $gia=$row['gia1'];
                    }
                    if(isset($_SESSION['cart'][$id])){
                        $_SESSION['cart'][$id]['soluong'] += $soluong;
                    }else{
                        $item = [
                            'id' => $id,
                            'img' => $img,
                            'tensanpham' => $ten,
                            'gia' => $gia,
                            'soluong' => $soluong
                        ];
                        $_SESSION['cart'][$id] = $item;
                    }
                    break;
                }
                case 'tang':{
                    if(isset($_SESSION['cart'][$id])){
                        $_SESSION['cart'][$id]['soluong']+=1;
                    }
                    break;
                }
                case 'giam':{
                    if(isset($_SESSION['cart'][$id])){
                        $_SESSION['cart'][$id]['soluong']-=1;
                    }
                    break;
                }
                case 'xoa':{
                    if(isset($_SESSION['cart'][$id])){
                        unset($_SESSION['cart'][$id]);
                    }
                    break;
                }
            }
        }
        $product = !empty($_SESSION['cart']) ? $_SESSION['cart'] : [];
        require_once('views/GioHang.php');
        break;
    }
    case 'GT':{
        require_once('views/GT.php');
        break;
    }
    case 'Blog':{
        require_once('views/tintuc.php');
        break;
    }
    case 'LienHe':{
        require_once('views/LH.php');
        break;
    }
    case 'DangKy':{
        if(isset($_POST['DK'])){
            $taikhoan=$_POST['taikhoan'];
            $matkhau=$_POST['matkhau'];
            $matkhaulan2=$_POST['matkhaulan2'];
            $email=$_POST['email'];
            $db->DangKy($taikhoan,$matkhau,$matkhaulan2,$email);
            break;
        }
        require_once('views/DK.php');
        break;
    }
    case 'DangNhap':{
        if(isset($_POST['DN'])){
            $taikhoan=$_POST['taikhoan'];
            $matkhau=$_POST['matkhau'];
            $db->DangNhap($taikhoan,$matkhau);
            break;
        }
        require_once('views/DN.php');

        break;
    }
    case 'TaiKhoan':{
        $data=$db->TTTK();
        require_once('views/TTTK.php');
        break;
    }
    case 'DangXuat':{
        $db->DangXuat();
        break;
    }
    case 'ThemSP':{
        $thuonghieu=$db->ThuongHieu();
        if(isset($_POST['themsp'])){
            $loai=$_POST['loai'];
            $xuatxu=$_POST['xuatxu'];
            $hinhanh=$_POST['hinhanh'];
            $phai=$_POST['phai'];
            $tensp=$_POST['tensp'];
            if(empty($_POST['gia1']) || empty($_POST['dungtich1'])){
                $gia1="";
                $dungtich1="";
            }else{
                $gia1=$_POST['gia1'];
                $dungtich1=$_POST['dungtich1'];
            }
            if(empty($_POST['gia2']) || empty($_POST['dungtich2'])){
                $gia2="";
                $dungtich2="";
            }else{
                $gia2=$_POST['gia2'];
                $dungtich2=$_POST['dungtich2'];
            }
            if(empty($_POST['gia3']) || empty($_POST['dungtich3'])){
                $gia3="";
                $dungtich3="";
            }else{
                $gia3=$_POST['gia3'];
                $dungtich3=$_POST['dungtich3'];
            }
            $huong1=$_POST['huong1'];
            $huong2=$_POST['huong2'];
            $huong3=$_POST['huong3'];
            $mota=$_POST['mota'];
            $db->ThemSP($loai,$xuatxu,$hinhanh,$phai,$tensp,$gia1,$gia2,$gia3,$dungtich1,$dungtich2,$dungtich3,$huong1,$huong2,$huong3,$mota);
        }
        require_once('views/themsp.php');
      
        break;
    }
    case 'CNSP':{
        $thuonghieu=$db->ThuongHieu();
        $id=$_GET['id'];
        $ingiatri=$db->InGiatriSanPham($id);
        if(isset($_POST['capnhatsp'])){
            $loai=$_POST['loai'];
            $xuatxu=$_POST['xuatxu'];
            $hinhanh=$_POST['hinhanh'];
            $phai=$_POST['phai'];
            $tensp=$_POST['tensp'];
            if(empty($_POST['gia1']) || empty($_POST['dungtich1'])){
                $gia1="";
                $dungtich1="";
            }else{
                $gia1=$_POST['gia1'];
                $dungtich1=$_POST['dungtich1'];
            }
            if(empty($_POST['gia2']) || empty($_POST['dungtich2'])){
                $gia2="";
                $dungtich2="";
            }else{
                $gia2=$_POST['gia2'];
                $dungtich2=$_POST['dungtich2'];
            }
            if(empty($_POST['gia3']) || empty($_POST['dungtich3'])){
                $gia3="";
                $dungtich3="";
            }else{
                $gia3=$_POST['gia3'];
                $dungtich3=$_POST['dungtich3'];
            }
            $huong1=$_POST['huong1'];
            $huong2=$_POST['huong2'];
            $huong3=$_POST['huong3'];
            $mota=$_POST['mota'];
            $db->CapnhatSP($id,$loai,$xuatxu,$hinhanh,$phai,$tensp,$gia1,$gia2,$gia3,$dungtich1,$dungtich2,$dungtich3,$huong1,$huong2,$huong3,$mota);
        }
        require_once('views/capnhatsp.php');
        break;
    }
    case 'CNTK':{
        $data=$db->TTTK();
        if(isset($_POST['capnhat'])){
            $hoten=$_POST['hoten'];
            $sdt=$_POST['sdt'];
            $diachi=$_POST['diachi'];
            $db->CapnhatTK($hoten,$sdt,$diachi);
        }
        require_once('views/CNTK.php');
        break;
    }
    case 'QuanTri':{
        require_once('views/qt.php');
        break;
    }
    case 'DoiMatKhau':{
        if(isset($_POST['capnhat'])){
            $matkhau=$_POST['matkhau'];
            $matkhaumoi=$_POST['matkhaumoi'];
            $nhaplaimatkhaumoi=$_POST['nhaplaimatkhaumoi'];
            $db->DoiMatKhau($matkhau,$matkhaumoi,$nhaplaimatkhaumoi);
        }
        require_once('views/DMK.php');
        break;
    }
    case 'HoaDon':{
        $data=$db->TTTK();
        $product = !empty($_SESSION['cart']) ? $_SESSION['cart'] : [];
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }else{
            $id="";
        }
        $ship=$db->VanChuyen($id);
        if(isset($_GET['vanchuyen'])){
            $vanchuyen=$_GET['vanchuyen'];
        }else{
            $vanchuyen="";
        }
        $giaship=$db->GiaVanChuyen($vanchuyen);
        require_once('views/HD.php');
        break;
    }
    case 'CNDC':{
        $product = !empty($_SESSION['cart']) ? $_SESSION['cart'] : [];
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }else{
            $id="";
        }
        $ship=$db->VanChuyen($id);
        if(isset($_GET['vanchuyen'])){
            $vanchuyen=$_GET['vanchuyen'];
        }else{
            $vanchuyen="";
        }
        $giaship=$db->GiaVanChuyen($vanchuyen);
        require_once('views/DC.php');
        break;
    }
    case 'KQTK':{
        $key=$_POST['searchkey'];
        $sp=$db->TimKiem($key);
        require_once('views/kqtk.php');
        break;
    }
    case 'TBADDSP':{
        require_once('views/Thongbao/Add.php');
        break;
    }   
    case 'TBKoHL':{
        require_once('views/Thongbao/DN_KoHL.php');
        break;
    }
    case 'TBSTK':{
        require_once('views/Thongbao/DN_SaiTK.php');
        break;
    }
    case 'TBSMK':{
        require_once('views/Thongbao/DN_SaiMK.php');
        break;
    }
    case 'TBTC':{
        require_once('views/Thongbao/DN_TC.php');
        break;
    }
    case 'DX':{
        require_once('views/Thongbao/thongbao.php');
        break;
    }
    case 'QLKH':{
        $tbltable = "taikhoan";
        $data = $db->getalldata($tbltable);
        require_once('views/qlkh.php');
        break;
    }
    case 'CNTC':{
        require_once('views/Thongbao/CNTC.php');
        break;
    }
    case 'DMK':{
        require_once('views/Thongbao/DMK.php');
        break;
    }
    case 'TBDX':{
        require_once('views/Thongbao/DX.php');
        break;
    }
    case 'TBDX1':{
        require_once('views/Thongbao/DX1.php');
        break;
    }
    case 'DKTC':{
        require_once('views/Thongbao/Dk_TC.php');
        break;
    }
    case 'CNTKTC':{
        require_once('views/Thongbao/CNTK.php');
        break;
    }
    case 'TT':{
        require_once('views/Thongbao/ThanhToan.php');
        break;
    }
}
?>