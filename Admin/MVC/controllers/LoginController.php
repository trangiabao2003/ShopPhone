<?php 
    require_once("MVC/Models/login.php");
    class LoginController {
        var $login_model;
        public function __construct()
        {
            $this->login_model = new login();
        }
        // public function login()
        // {
        //     require_once("MVC/Views/login/login.php");
        // }
        // public function login_action()
        // {
        //     $this->login_model->login_action();
        // }
        public function admin()
        {
            $data_tksp1 = $this->login_model->tk_sanpham(1);
            $data_tksp2 = $this->login_model->tk_sanpham(2);
            $data_tksp3 = $this->login_model->tk_sanpham(3);

            $data_hd = $this->login_model->tk_thongbao();

            $m = date("m");

            $data_countM = $this->login_model->tk_dtthang($m);

            $y = "20".date("y");

            $data_countY = $this->login_model->tk_dtnam($y);

            $data_nguoidung = $this->login_model->tk_nguoidung(1);

            $data_nhanvien = $this->login_model->tk_nguoidung(3);
            require_once("MVC/Views/Admin/index.php");
        }
        // public function logout()
        // {
        //     $this->login_model->logout();
        // }
    }
?>