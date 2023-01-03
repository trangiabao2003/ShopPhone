<?php
require_once("connection.php");
class model
{
    var $conn;
    function __construct()
    {
        $conn_obj = new connection();
        $this->conn = $conn_obj->conn;
    }
    function limit($a, $b)
    {
        $query =  "SELECT * from sanpham WHERE TrangThai = 1  ORDER BY ThoiGian DESC limit $a,$b";

        require("result.php");

        return $data;
    }
    function danhmuc()
    {
        $query =  "SELECT * from DanhMuc ";

        require("result.php");
        
        return $data;
    }
    function chitietdanhmuc($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

        require("result.php");
        
        return $data;
    }

    function loaisanpham($id)
    {
        $query =  "SELECT d.TenDM as Ten, l.* FROM danhmuc as d, loaisanpham as l WHERE d.MaDM = l.MaDM and d.MaDM = $id";

        require("result.php");
        
        return $data;
    }

    function random($id)
    {
        $query = "SELECT * FROM SanPham WHERE TrangThai = 1 ORDER BY RAND () LIMIT $id";
        require("result.php");
        
        return $data;
    }
    function banner($a,$b)
    {
        $query =  "SELECT * from Banner  limit $a,$b";

        require("result.php");
        
        return $data;
    }
    function sanpham_danhmuc($a, $b, $danhmuc)
    {
        $query =   "SELECT * from sanpham WHERE TrangThai = 1  and MaDM = $danhmuc ORDER BY ThoiGian DESC limit $a,$b";

        require("result.php");
        
        return $data;
    }
}
