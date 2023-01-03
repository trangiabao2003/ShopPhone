<a href="?mod=banner&act=add" type="button" class="btn btn-primary">Thêm mới</a>
<?php if (isset($_COOKIE['msg'])) { ?>
  <div class="alert alert-success">
    <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
  </div>
<?php } ?>
<hr>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Hình Ảnh</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data as $row) { ?>
      <tr>
        <td><?= $row['Id'] ?></td>
        <td><?= $row['HinhAnh'] ?></td>
        <td>
          <a href="?mod=banner&act=detail&id=<?= $row['Id'] ?>" class="btn btn-success">Xem</a>
          <?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
          <a href="?mod=banner&act=edit&id=<?= $row['Id'] ?>" class="btn btn-warning">Sửa</a>
          <a href="?mod=banner&act=delete&id=<?= $row['Id'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger">Xóa</a>
          <?php }?>
        </td>
      </tr>
    <?php } ?>
</table>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>