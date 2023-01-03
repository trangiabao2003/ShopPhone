<?php
require_once("MVC/Models/loaisanpham.php");
class LoaisanphamController
{
	var $loaisanpham_model;
	function __construct()
	{
		$this->loaisanpham_model = new loaisanpham();
	}

	public function list()
	{
		$data = array();
		$data = $this->loaisanpham_model->All(); 
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/list.php');
	}

	public function add()
	{
		$data = $this->loaisanpham_model->danhmuc();
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/add.php');
	}
	public function store()
	{
		$target_dir = "../public/img/company/";  // thư mục chứa file upload

        $HinhAnh = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh =  basename($_FILES["HinhAnh"]["name"]);
		}

		$data = array(
			'TenLSP' => $_POST['TenLSP'],
			'HinhAnh' => $HinhAnh,
			'MoTa' => $_POST['MoTa'],
			'MaDM' => $_POST['MaDM']
		);
		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
		}	
		$this->loaisanpham_model->store($data);
	}
	public function detail()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data = $this->loaisanpham_model->find($id);
		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/detail.php');
	}
	public function delete()
	{
		if (isset($_GET['id'])) {
			$this->loaisanpham_model->delete($_GET['id']);
		}
	}
	public function edit()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : 5;
		$data_detail = $this->loaisanpham_model->find($id);

		$data = $this->loaisanpham_model->danhmuc();

		require_once("MVC/Views/Admin/index.php");
		//require_once('MVC/views/categories/edit.php');
	}
	public function update()
	{
		$target_dir = "../public/img/company/";  // thư mục chứa file upload

        $HinhAnh = "";
        $target_file = $target_dir . basename($_FILES["HinhAnh"]["name"]); // link sẽ upload file lên

        $status_upload = move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);

        if ($status_upload) { // nếu upload file không có lỗi 
            $HinhAnh =  basename($_FILES["HinhAnh"]["name"]);
		}

		$data = array(
			'MaLSP' => $_POST['MaLSP'],
			'TenLSP' => $_POST['TenLSP'],
			'HinhAnh' => $HinhAnh,
			'MoTa' => $_POST['MoTa'],
			'MaDM' => $_POST['MaDM']
		);

		foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
		}
		if ($HinhAnh == "") {
            unset($data['HinhAnh']);
        }
		$this->loaisanpham_model->update($data);
	}
}
