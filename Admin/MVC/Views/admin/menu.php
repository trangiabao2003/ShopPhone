 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">DTP<sup>Shop</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Chức năng
</div>

<!-- Nav Item - Pages Collapse Menu -->
<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
<li class="nav-item">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Trang chủ</span></a>
</li>
<?php } ?>
<!-- Nav Item - Charts -->
<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
<li class="nav-item">
  <a class="nav-link" href="?mod=nguoidung">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý Tài khoản</span></a>
</li>
<?php } ?>
<!-- Nav Item - Tables -->
<li class="nav-item">
  <a class="nav-link" href="?mod=sanpham">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý Sản phẩm</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="?mod=loaisanpham">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý Loại sản phẩm</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="?mod=hoadon">
    <i class="fas fa-fw fa-table"></i>
    <span>Xét duyệt hóa đơn</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="?mod=danhmuc">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý danh mục sản phẩm</span></a>
</li>
<?php if (isset($_SESSION['isLogin_Admin']) && $_SESSION['isLogin_Admin'] == true) { ?>
<li class="nav-item">
  <a class="nav-link" href="?mod=banner">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý Banner</span></a>
</li>
<?php }?>


<li class="nav-item">
  <a class="nav-link" href="?mod=khuyenmai">
    <i class="fas fa-fw fa-table"></i>
    <span>Quản lý khuyến mãi</span></a>
</li>
<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->