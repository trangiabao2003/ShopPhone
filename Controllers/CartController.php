<?php
require_once("Models/cart.php");
class CartController
{
    var $cart_model;
    public function __construct()
    {
        $this->cart_model = new Cart();
    }
    function list_cart()
    {
        $data_danhmuc = $this->cart_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->cart_model->chitietdanhmuc($i);
        }

        $count = 0;
        if (isset($_SESSION['sanpham'])) {
            foreach ($_SESSION['sanpham'] as $value) {
                $count += $value['ThanhTien'];
            }
        }
        require_once('Views/index.php');
    }
    function add_cart()
    {
        $id = $_GET['id'];
        $data = $this->cart_model->detail_sp($id);
        $count = 0;
        if (isset($_SESSION['sanpham'][$id])) {
            $arr = $_SESSION['sanpham'][$id];
            $arr['SoLuong'] = $arr['soluong'] + 1;
            $arr['ThanhTien'] = $arr['soluong'] * $arr["DonGia"];
            $_SESSION['sanpham'][$id] = $arr;
        } else {
            $arr['MaSP'] = $data['MaSP'];
            $arr['TenSP'] = $data['TenSP'];
            $arr['DonGia'] = $data['DonGia'];
            $arr['SoLuong'] = 1;
            $arr['ThanhTien'] = $data['DonGia'];
            $arr['HinhAnh1'] = $data['HinhAnh1'];
            $_SESSION['sanpham'][$id] = $arr;
        }

        foreach ($_SESSION['sanpham'] as $value) {
            $count += $value['ThanhTien'];
        }

        header('Location:?act=cart#dxd');
    }
    function update_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        $arr['SoLuong'] = $arr['SoLuong'] + 1;
        $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
        $_SESSION['sanpham'][$_GET['id']] = $arr;
        header('Location: ?act=cart#dxd');
    }
    function delete_cart()
    {
        $arr = $_SESSION['sanpham'][$_GET['id']];
        if ($arr['SoLuong'] == 1) {
            unset($_SESSION['sanpham'][$_GET['id']]);
        } else {
            $arr = $_SESSION['sanpham'][$_GET['id']];
            $arr['SoLuong'] = $arr['SoLuong'] - 1;
            $arr['ThanhTien'] = $arr['SoLuong'] * $arr["DonGia"];
            $_SESSION['sanpham'][$_GET['id']] = $arr;
        }
        header('Location: ?act=cart#dxd');
    }
    function deleteall_cart()
    {
        unset($_SESSION['sanpham'][$_GET['id']]);
        header('Location: ?act=cart#dxd');
    }
}
