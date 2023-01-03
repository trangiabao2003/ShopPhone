<?php
require_once("model.php");
class Login extends Model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new Connection();
        $this->conn = $conn_obj->conn;
    }
    function login_action($data)
    {
        $query = "SELECT * from nguoidung  WHERE taikhoan = '" . $data['taikhoan'] . "' AND matkhau = '" . $data['matkhau'] . "' AND trangthai = 1";

        $login = $this->conn->query($query)->fetch_assoc();
        if ($login !== NULL) {
            if($login['MaQuyen'] == 2){
                $_SESSION['isLogin_Admin'] = true;
                $_SESSION['login'] = $login;
            }else{
                if($login['MaQuyen'] == 3){
                $_SESSION['isLogin_Nhanvien'] = true;
                $_SESSION['login'] = $login;
                }else{
                    $_SESSION['isLogin'] = true;
                    $_SESSION['login'] = $login;
                }
            }
            header('Location: ?mod=login');
        } else {
            setcookie('msg1', 'Đăng nhập không thành công', time() + 5);
            header('Location: ?act=taikhoan#dangnhap');
        }
        
    }
    function logout()
    {
        if(isset($_SESSION['isLogin_Admin'])){
            unset($_SESSION['isLogin_Admin']);
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['isLogin_Nhanvien'])){
            unset($_SESSION['isLogin_Nhanvien']);
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['isLogin'])){
            unset($_SESSION['isLogin']);
            unset($_SESSION['login']);
        }
        header('location: ?act=home');
    }
    function check_account()
    {
        $query =  "SELECT * from NguoiDung";

        require("result.php");

        return $data;
    }
    function dangky_action($data, $check1, $check2)
    {
        if ($check1 == 0) {
            if ($check2 == 0) {
                $f = "";
                $v = "";
                foreach ($data as $key => $value) {
                    $f .= $key . ",";
                    $v .= "'" . $value . "',";
                }
                $f = trim($f, ",");
                $v = trim($v, ",");
                $query = "INSERT INTO NguoiDung($f) VALUES ($v);";

                $status = $this->conn->query($query);
                if ($status == true) {
                    setcookie('msg', 'Đăng ký thành công', time() + 2);
                } else {
                    setcookie('msg', 'Đăng ký không thành công', time() + 2);
                }
            } else {
                setcookie('msg', 'Mật khẩu không trùng nhau', time() + 2);
            }
        } else {
            setcookie('msg', 'Tên tài khoản hoặc Email  đã tồn tại', time() + 2);
        }
        header('Location: ?act=taikhoan#dangky');
    }
    function account()
    {
        $id = $_SESSION['login']['MaND'];
        return $this->conn->query("SELECT * from NguoiDung where MaND = $id")->fetch_assoc();
    }
    function update_account($data)
    {
        $v = "";
        foreach ($data as $key => $value) {
            $v .= $key . "='" . $value . "',";
        }
        $v = trim($v, ",");

        $query = "UPDATE NguoiDung SET  $v   WHERE  MaND = " . $_SESSION['login']['MaND'];

        $result = $this->conn->query($query);
        
        if ($result == true) {
            setcookie('doimk', 'Cập nhật tài khoản thành công', time() + 2);
            header('Location: ?act=taikhoan&xuli=account#doitk');
        } else {
            setcookie('doimk', 'Mật khẩu xác nhận không đúng', time() + 2);
            header('Location: ?act=taikhoan&xuli=account#doitk');
        }
    }
    function error()
    {
        header('location: ?act=errors');
    }
}
