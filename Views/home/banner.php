<div class="main-slider-one main-slider-two slider-area">
    <div id="wrapper">
        <div class="slider-wrapper">
            <div id="mainSlider" class="nivoSlider">
                <?php $i=2; foreach ($data_banner as  $value) {  ?>
                <img src="public/<?=$value['HinhAnh']?>" alt="main slider" title="#htmlcaption"/>
                <?php } ?>
            </div>
            <div id="htmlcaption" class="nivo-html-caption slider-caption">
                <div class="container">
                    <div class="slider-left slider-right">
                        <div class="slide-text animated zoomInUp">
                            <h3>điện thoại mới</h3>
                            <hr>
                            <h1>Công nghệ 2020</h1>
                        </div>
                        <div class="animated slider-btn fadeInUpBig">
                            <a class="shop-btn" href="index.php?act=shop">Mua ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>							
    </div>
</div>