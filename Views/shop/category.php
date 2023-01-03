<div class="sidebar left-sidebar">
    <div class="s-side-text">
        <div class="sidebar-title clearfix">
            <h4 class="floatleft">Danh mục</h4>
        </div>
        <div class="categories left-right-p">
            <ul id="accordion" class="panel-group clearfix">
                <?php    $i = 1; foreach ($data_chitietDM as $row) { ?>
                    <li class="panel">
                        <div data-toggle="collapse" data-parent="#accordion" data-target="#collapse<?=$i?>">
                            <div class="medium-a">
                                <b><?= $data_danhmuc[$i-1]['TenDM'] ?></b>
                            </div>
                        </div>
                        <div class="paypal-dsc panel-collapse collapse" id="collapse<?=$i?>">
                            <div class="normal-a">
                                <?php foreach ($row as $value) { ?>
                                    <a href="?act=shop&sp=<?= $value['MaDM'] ?>&loai=<?= $value['TenLSP'] ?>"><?= $value['TenLSP'] ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </li>
                <?php $i++;
             } ?>
            </ul>
        </div>
    </div>
    <div class="s-side-text">
        <div class="sidebar-title">
            <h4>Giá</h4>
        </div>
        <div class="range-slider clearfix">
            <form action="index.php?act=shop" method="post">
                <label><span>Giá: </span> <input type="text" id="amount" readonly  /></label>
                <input type="hidden" id="amount2" name="shop" />
                <div id="slider-range"></div></br>
                <button type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>
    <div class="s-side-text">
        <div class="sidebar-title clearfix">
            <h5 class="floatleft">Thương Hiệu Điện Thoại</h5>
        </div>
        <div class="brands-select clearfix">
            <ul>
                <li>
                    <?php for($i=0;$i<4;$i++) {?>
                    <a href="?act=shop&sp=1&loai=<?=$data_loaisp[$i]['TenLSP']?>"><?=$data_loaisp[$i]['TenLSP']?></a>
                    <?php } ?>
                </li>
                <li>
                <?php for($i=4;$i<8;$i++) { ?>
                    <a href="?act=shop&sp=1&loai=<?=$data_loaisp[$i]['TenLSP']?>"><?=$data_loaisp[$i]['TenLSP']?></a>
                <?php  }?>
                </li>
            </ul>
        </div>
    </div>
    <div class="s-side-text">
        <div class="banner clearfix">
            <a href="?act=detail&id=<?=$data_noibat['MaSP']?>"><img src="./public/<?=$data_noibat['HinhAnh1']?>" alt="" /></a>
            <div class="banner-text">
                <h2>Sản phẩm</h2> <br />
                <h2 class="banner-brand">Quan tâm</h2>
            </div>
        </div>
    </div>
</div>