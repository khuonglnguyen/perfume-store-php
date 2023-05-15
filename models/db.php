<?php
class database{
    private $hostname= "localhost";
    private $username="root";
    private $password="";
    private $dbname="da2";

    private $conn = null;
    private $result = null;

    public function connect(){
        $this->conn = new mysqli($this->hostname, $this->username,$this->password,$this->dbname);
        if(!$this->conn){
            echo "Ket noi that bai";
            exit();
        }else{
            mysqli_set_charset($this->conn, 'utf-8');
        }
        return $this->conn;
    }
    //thuc thi cau tri van
    public function execute($sql)
    {
       $this->result = $this->conn->query($sql);
       return $this->result;
    }
    //lay du lieu
    public function getdata()
    {
        if($this->result){
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }
    //lay all du lieu
    public function getalldata($table)
    {
        $sql = "SELECT * FROM $table";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
           while($datas = $this->getdata()){
               $data[] = $datas;
           }
        }
        return $data;
    }
    public function num_rows()
    {
        if($this->result){
            $num = mysqli_num_rows($this->result);
        }else{
            $num = 0;
        }
        return $num;
    }
    //lay so lieu can sua theo id
    public function getdataid($table, $id){
        $sql = "SELECT * FROM $table WHERE id= '$id'";
        $this->execute($sql);
        if($this->num_rows()!=0){
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    } 
    public function Chitietsp($id){
        $sql = "SELECT * FROM sanpham as sp, thuonghieu as th WHERE masp = '$id' AND (sp.math=th.math)";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
           while($datas = $this->getdata()){
               $data[] = $datas;
           }
        }
        return $data;
    }
    public function Sanphamth($math)
    {
        $sql = "SELECT * FROM sanpham WHERE math='$math'";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
           while($datas = $this->getdata()){
               $data[] = $datas;
           }
        }
        return $data;
    }
    public function DangKy($taikhoan, $matkhau, $matkhaulan2, $email)
    {
        $sql = "SELECT * FROM taikhoan WHERE taikhoan='$taikhoan'";
        $this->execute($sql);
        if($this->num_rows()==0){
            if($matkhau==$matkhaulan2){
                $sql = "INSERT INTO taikhoan(taikhoan,matkhau,email,phanquyen) VALUES ('$taikhoan','$matkhau','$email','1')";
                $this->execute($sql);
                // echo '<script>alert("Đăng ký thành công!")</script>;';
                echo '<script>window.location="?view=DKTC"</script>';
            }else{
                echo '<script>alert("Mật khẩu và nhập lại mật khẩu không khớp!")</script>;';
                echo '<script>window.location="?view=DangKy"</script>';
            }
        }else{
            echo '<script>alert("Tài khoản đã tồn tại!")</script>;';
            echo '<script>window.location="?view=DangKy"</script>';
        }
    }
    public function DangNhap($taikhoan,$matkhau)
    {
        $sql = "SELECT * FROM taikhoan WHERE taikhoan='$taikhoan'";
        $this->execute($sql);
        if($this->num_rows()==0){
            // echo '<script>alert("Tài khoản không tồn tại!")</script>;';
            echo '<script>window.location="?view=TBKoHL"</script>';
        }else{
            $data = mysqli_fetch_array($this->result);
            if($taikhoan==$data['taikhoan'] && $matkhau==$data['matkhau']){
                $_SESSION['user'] = ['id'=>$data['id'], 'taikhoan'=>$taikhoan, 'phanquyen'=>$data['phanquyen']];
                // echo '<script>alert("Đăng nhập thành công!")</script>;';
                echo '<script>window.location="?view=TBTC"</script>';
            }else{
                // echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác!")</script>;';
                echo '<script>window.location="?view=TBSMK"</script>';
            }
        }
    }
    public function TTTK(){
        if(isset($_SESSION['user'])){
            $id=$_SESSION['user']['id'];
            $sql = "SELECT * FROM taikhoan WHERE id='$id'";
            $this->execute($sql);
            $data = mysqli_fetch_array($this->result);
        }else{
            echo '<script>alert("Bạn chưa đăng nhập!")</script>;';
            echo '<script>window.location="?view=DangNhap"</script>';
        }
        return $data;
    }
    public function CapnhatTK($hoten,$sdt,$diachi){
        if(isset($_SESSION['user'])){
            $id=$_SESSION['user']['id'];
            $sql = "UPDATE taikhoan SET hoten='$hoten', sdt='$sdt', diachi='$diachi' WHERE id='$id'";
            $this->execute($sql);
            echo '<script>window.location="?view=CNTKTC"</script>';
        }else{
            echo '<script>alert("Bạn chưa đăng nhập!")</script>;';
        }
    }
    public function DoiMatKhau($matkhau,$matkhaumoi,$nhaplaimatkhaumoi){
        if(isset($_SESSION['user'])){
            $id=$_SESSION['user']['id'];
            $sql = "SELECT * FROM taikhoan WHERE id='$id'";
            $this->execute($sql);
            $data = mysqli_fetch_array($this->result);
            if($nhaplaimatkhaumoi!=$matkhaumoi){
                echo '<script>alert("Mật khẩu mới và nhập lại mật khẩu mới không khớp!")</script>;';
            }else if($data['matkhau']==$matkhau){
                $sql = "UPDATE taikhoan SET matkhau='$matkhaumoi' WHERE id='$id'";
                $this->execute($sql);
                echo '<script>window.location="?view=DMK"</script>';
            }else{
                
                echo '<script>window.location="?view=SDMK"</script>';
            }
        }else{
            echo '<script>alert("Bạn chưa đăng nhập!")</script>;';
        }
    }
    public function DangXuat(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            
            echo '<script>window.location="?view=TBDX"</script>';
        }else{
          
            echo '<script>window.location="?view=TBDX1"</script>';
        }
    }
    public function ThuongHieu(){
        $sql = "SELECT * FROM thuonghieu";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
           while($datas = $this->getdata()){
               $data[] = $datas;
           }
        }
        return $data;
    }
    public function ThemSP($loai,$xuatxu,$hinhanh,$phai,$tensp,$gia1,$gia2,$gia3,$dungtich1,$dungtich2,$dungtich3,$huong1,$huong2,$huong3,$mota){
        $sql = "INSERT INTO sanpham (tensp,hinh,xuatxu,phai,gia1,gia2,gia3,dungtich1,dungtich2,dungtich3,mota,huongdau,huonggiua,huongcuoi,math) VALUES ('$tensp','$hinhanh','$xuatxu','$phai','$gia1','$gia2','$gia3','$dungtich1','$dungtich2','$dungtich3','$mota','$huong1','$huong2','$huong3','$loai')";
        $this->execute($sql);
        echo '<script>window.location="?view=TBADDSP"</script>;';
        // printf($sql);
    }
    public function CapnhatSP($id,$loai,$xuatxu,$hinhanh,$phai,$tensp,$gia1,$gia2,$gia3,$dungtich1,$dungtich2,$dungtich3,$huong1,$huong2,$huong3,$mota){
        $sql = "UPDATE sanpham SET tensp='$tensp', hinh='$hinhanh', xuatxu='$xuatxu', phai='$phai', gia1='$gia1', gia2='$gia2', gia3='$gia3', dungtich1='$dungtich1', dungtich2='$dungtich2', dungtich3='$dungtich3', mota='$mota', huongdau='$huong1', huonggiua='$huong2', huongcuoi='$huong3', math='$loai' WHERE masp='$id'";
        $this->execute($sql);
        echo '<script>alert("Cập nhật sản phẩm thành công!")</script>;';
        // printf($sql);
    }
    public function InGiatriSanPham($id){
        $sql = "SELECT * FROM sanpham WHERE masp='$id'";
        $this->execute($sql);
        if($this->num_rows()!=0){
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }
    public function TimKiem($key){
        $sql="SELECT * FROM sanpham WHERE tensp LIKE '%$key%'";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
           while($datas = $this->getdata()){
               $data[] = $datas;
           }
        }
        return $data;
    }
    public function VanChuyen($id){
        $sql="SELECT * FROM ship";
        $this->execute($sql);
        if($this->num_rows()==0){
            $data = 0;
        }else{
           while($datas = $this->getdata()){
               $data[] = $datas;
           }
        }
        return $data;
    }
    public function GiaVanChuyen($vanchuyen){
        $sql="SELECT * FROM ship WHERE id='$vanchuyen'";
        $this->execute($sql);
        if($this->num_rows()!=0){
            $data = mysqli_fetch_array($this->result);
        }else{
            $data = 0;
        }
        return $data;
    }
}
?>