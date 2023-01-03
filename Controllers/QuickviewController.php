<?php
require_once("Models/quickview.php");
class QuickviewController
{
    var $quickview_model;
    public function __construct()
    {
       $this->quickview_model = new Quickview();
    }
    
    function list()
    {
        // $id = $_GET['id'];

        // $data = $this->quickview_model->detail_sp($id);

        require_once('Views/quickview.php');
    }
}