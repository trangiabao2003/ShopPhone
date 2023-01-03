<div class="tab-content grid-content">
	<div class="tab-pane fade in active text-center" id="grid">
		<?php 
			if(isset($data) and $data != NULL){
				foreach ($data as  $value) {		
		?>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="single-product">
				<div class="product-f">
					<a href="?act=detail&id=<?=$value['MaSP']?>"><img src="public/<?=$value['HinhAnh1']?>" alt="Product Title" class="img-products"/></a>
					<div class="actions-btn">
						<a href="?act=detail&id=<?=$value['MaSP']?>"><i class="mdi mdi-cart"></i></a>
						<a href="?act=detail&id=<?=$value['MaSP']?>" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>		
					</div>
				</div>
				<div class="product-dsc">
					<p><a href="?act=detail&id=<?=$value['MaSP']?>"><?=$value['TenSP']?></a></p>
					<div class="ratting">
						<i class="mdi mdi-star"></i>
						<i class="mdi mdi-star"></i>
						<i class="mdi mdi-star"></i>
						<i class="mdi mdi-star-half"></i>
						<i class="mdi mdi-star-outline"></i>
					</div>
					<span><?=number_format($value['DonGia'])?> VNĐ</span>
				</div>
			</div>
		</div>
		<?php }}else{
			echo '<p> KHÔNG CÓ DỮ LIỆU </p>';}?>
		<!-- single product end -->
	</div>
</div>