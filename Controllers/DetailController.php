<?php
require_once("Models/Detail.php");
class DetailController
{
    var $detail_model;
    public function __construct()
    {
       $this->detail_model = new Detail();
    }
    
    function list()
    {

        $data_danhmuc = $this->detail_model->danhmuc();

        $data_chitietDM = array();

        for($i=1; $i <=count($data_danhmuc);$i++){
            $data_chitietDM[$i] = $this->detail_model->chitietdanhmuc($i);
        }

        $id = $_GET['id'];

        $data = $this->detail_model->detail_sp($id);

        if($data!=null){
        $data_lq = $this->detail_model->sanpham_danhmuc(0,4,$data['MaDM']);
        }
        require_once('Views/index.php');
    }
}