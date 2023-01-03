<!-- pages-title-start -->
<div class="pages-title section-padding">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="pages-title-text text-center">
					<h2>Cửa hàng</h2>
					<ul class="text-left">
						<li><a href="?act=home">Trang chủ</a></li>
						<li><span> // </span>Cửa hàng</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- pages-title-end -->
<!-- products-view content section start -->
<section class="pages products-page section-padding-bottom">
	<div class="container">
		<div class="row">
			<!-- Category-left -->
			<div class="col-xs-12 col-sm-4 col-md-3">
				<?php require_once("category.php") ?>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-9">
				<div class="right-products">
					<div class="row">
						<div class="col-xs-12">
							<div class="section-title clearfix">
								<ul>
									<li class="sort-by floatright">
										Số sản phẩm <?= $data_tong ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<?php require_once("list-products.php") ?>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="pagnation-ul">
								<ul class="clearfix">
									<?php if ($data_tong > 9 and isset($test)) {
										for ($i = 1; $i <= $data_tong / 9; $i++) { ?>
											<li><a href="?act=shop&trang=<?= $i ?>"><?= $i ?></a></li>
									<?php }
									}
									?>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- products-view content section end -->
<!-- quick view start -->
<?php
include_once("Views/quickview.php");
?>
<!-- quick view end -->