<?php
require_once("model.php");
class loaisanpham extends Model
{
    var $table = "loaisanpham";
    var $contens = "MaLSP";
    function danhmuc(){
        $query = "select * from danhmuc ";
        require("result.php");
        return $data;
    }
}