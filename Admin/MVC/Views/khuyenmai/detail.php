<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<?php if(isset($data) and $data != null) { ?>
    <h2>Mã khuyến mãi: <?= $data['MaKM'] ?></h2>
    <h2>Tên khuyến mãi: <?= $data['TenKM'] ?></h2>
    <h2>Loại khuyến mãi: <?= $data['LoaiKM'] ?></h2>
    <h2>Giá trị khuyến mãi: <?= $data['GiaTriKM'] ?></h2>
    <h2>Ngày bắt đầu: <?= $data['NgayBD'] ?></h2>
    <h2>Trạng thái: <?= $data['TrangThai'] ?></h2>
<?php } ?>
</table>