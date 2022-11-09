<?php
    if(!isset($_SESSION['adminLogin'])){
        header('location:'.WEB_ROOT.'/'.'admin/');
    }

    foreach($room as $key => $value){
        $r_id = $value['r_id'];
        $nameroom = $value['nameroom'];
        $isfloor = $value['isfloor'];
        $title = $value['title'];
        $description = $value['description'];
        $thumb = explode(" | ", $value['thumb']);
        $images = explode(" | ", $value['images']);
        $province = $value['province'];
        $district = $value['district'];
        $isfloor = $value['isfloor'];
        $area = $value['area'];
        $timePost = $value['timepost'];
        $active = $value['active'];
        $content = $value['content'];
        $name = $value['ad_name'];
        $phone = $value['ad_phonenum'];
        $email = $value['ad_email'];
        $avarta = $value['ad_image'];
        $rooms = $value['room'];
        $baths = $value['baths'];
        $beds = $value['beds'];
        $price = number_format($value['price']);
    }
?>

<div class="body-wrapper">

    <div class="ltn__utilize-overlay"></div>

    <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area mb-90">
        <div class="container-fluid">
            <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
                <?php
                if(count($thumb) > 2){
                    foreach($thumb as $key => $image){
                        echo'
                            <div class="col-lg-12">
                                <div class="ltn__img-slide-item-4">
                                    <img src="'.$image.'" alt="Image">
                                </div>
                            </div>                     
                        ';
                    }
                }else{
                    foreach($thumb as $key => $image){
                        echo'
                            <div class="col-lg-12">
                                <div class="ltn__img-slide-item-4">
                                    <img src="'.$image.'" alt="Image">
                                </div>
                            </div>                     
                        ';
                        echo'
                        <div class="col-lg-12">
                            <div class="ltn__img-slide-item-4">
                                <img src="'.$image.'" alt="Image">
                            </div>
                        </div>                     
                        ';
                        echo'
                        <div class="col-lg-12">
                            <div class="ltn__img-slide-item-4">
                                <img src="'.$image.'" alt="Image">
                            </div>
                        </div>                     
                        ';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- IMAGE SLIDER AREA END -->

    <!-- SHOP DETAILS AREA START -->
    <div class="ltn__shop-details-area pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <div class="btn-wrapper text-center--- mt-0">
                                <button href="<?=WEB_ROOT;?>/Admin/saleRoom/?r_id='<?=$r_id?>'" style="margin-bottom: 50px;" class="btn theme-btn-1 succses text-uppercase">Bán</button>
                            </div>
                            <ul>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i><?php echo substr($timePost,0,10);?>
                                </li>
                            </ul>
                        </div>
                        <h1>Phòng <?php echo $nameroom;?></h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> <?php echo $district.', '. $province;?></label>
                        <h4 class="title-2">Mô tả ngắn</h4>
                        <?php echo $description;?>
                        <h4 class="title-2">Chi tiết</h4>  
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">                          
                            <ul>
                                <li><label>Số phòng:</label> <span><?= $rooms;?></span></li>
                                <li><label>Diện tích: </label> <span><?= $area;?> mét vuông</span></li>
                                <li><label>Giá: </label> <span><?= $price;?> VND</span></li>
                            </ul>
                            <ul>
                                <li><label>Số phòng ngủ: </label> <span><?= $beds;?></span></li>
                                <li><label>Số phòng tắm:</label> <span><?= $baths;?></span></li>
                            </ul>
                        </div>

                        <h4 class="title-2">Nội dung</h4>
                        <?php echo $content;?>
     
                        <h4 class="title-2">Những bức ảnh khác</h4>
                        <div class="ltn__property-details-gallery mb-30">
                            <div class="row">
                                <?php 
                                        foreach($images as $key => $value){
                                            echo'
                                            <div class="col-md-6 flex">
                                                <a href="#" data-rel="lightcase:myCollection">
                                                    <img class="mb-30" src="'.$value.'" alt="Image">
                                                </a>
                                                </div>
                                            ';
                                        }
                                    ?>
                            </div>
                        </div>

                        <h4 class="title-2">Vị trí trên bản đồ</h4>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=652&amp;height=392&amp;hl=en&amp;q=<?php echo $district;?>&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                </iframe>
                            </div>
                            <style>
                            .mapouter{
                                position:relative;
                                text-align:right;
                                width:100%;
                                height:392px;
                            }
                            .gmap_canvas {
                                overflow:hidden;
                                background:none!important;
                                width:100%;
                                height:392px;
                            }
                            .gmap_iframe {
                                height:392px!important;
                            }

                        </style>
                        </div>
                        <h4 class="title-2">Video mô tả</h4>
                        <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60" data-bg="img/others/5.jpg">
                            <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&amp;showinfo=0" data-rel="lightcase:myCollection">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                        <!-- Author Widget -->
                        <div class="widget ltn__author-widget">
                            <div class="ltn__author-widget-inner text-center">
                                <img class="avatar" src="<?= $thumb[0]?>" alt="Image">
                                <h5><?=$title?></h5>
                                <h5>Tầng <?= $isfloor?> - Tòa <?= $title?></h5>
                            </div>
                        </div>
                        <!-- Popular Product Widget -->
                        
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src="<?php echo WEB_ROOT;?>/public/assets/img/banner/2.jpg" alt="#"></a>
                        </div>
                    </aside>

                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                        <!-- Author Widget -->
                        <div class="widget ltn__author-widget">
                            <div class="ltn__author-widget-inner text-center">
                                <img class="avatar" src="<?php echo WEB_ROOT.$avarta;?>" alt="Image">
                                <h5><?php echo $name;?></h5>
                                <small><?php echo $phone;?></small>
                                <p><?php echo $email;?></p>
                                <div class="ltn__social-media">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        
                                        <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Popular Product Widget -->
                        
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src="<?php echo WEB_ROOT;?>/public/assets/img/banner/2.jpg" alt="#"></a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Body main wrapper end -->

