<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Thanh Toán</h2>
					<ul class="text-left">
						<li><a href="index.php?act=home">Trang chủ</a></li>
						<li><span> // </span>Thanh Toán</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- Checkout content section start -->
<section class="pages checkout section-padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="main-input single-cart-form padding60">
					<div class="log-title">
						<h3><strong>Chi tiết hóa đơn</strong></h3>
					</div>
					<div class="custom-input">
						<form action="?act=checkout&xuli=save" method="post">
							<input type="text" name="NguoiNhan" placeholder="Người nhận" required value="<?php echo $_SESSION['login']['Ho']." ".$_SESSION['login']['Ten']  ?>"/>
							<input type="email" name="Email" placeholder="Địa chỉ Email.." required  value="<?=$_SESSION['login']['Email']?>"/>
							<input type="text" name="SDT" placeholder="Số điện thoại.." required pattern="[0-9]+" minlength="10"  value="<?=$_SESSION['login']['SDT']?>"/>
							<input type="text" name="DiaChi" placeholder="Đại chỉ giao hàng" required  value="<?=$_SESSION['login']['DiaChi']?>"/>
							</br>
							<div class="submit-text">
								<button type="submit">Thanh toán</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="padding60">
					<div class="log-title">
						<h3><strong>Hóa đơn</strong></h3>
					</div>
					<div class="cart-form-text pay-details table-responsive">
						<table>
							<thead>
								<tr>
									<th>Sản phẩm</th>
									<td>Thành Tiền</td>
								</tr>
							</thead>
							<tbody>
								<?php if (isset($_SESSION['sanpham'])) {
									foreach ($_SESSION['sanpham'] as $value) { ?>
								<tr>
									<th><?=$value['TenSP']?></th>
									<td><?=number_format($value['ThanhTien'])?> VNĐ</td>
								</tr>
						<?php }
								} ?>
						<tr>
							<th>Giảm Giá</th>
							<td>0%</td>
						</tr>
						<tr>
							<th>Vận Chuyển</th>
							<td>15,000 VNĐ</td>
						</tr>
						<tr>
							<th>Vat</th>
							<td>0</td>
						</tr>
							</tbody>
							<tfoot>
								<tr>
									<th>Tổng</th>
									<td><?= number_format($count + 15000) ?> VNĐ</td>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Checkout content section end -->