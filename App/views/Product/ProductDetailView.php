<?php
    foreach($detail as $key => $value){
        $title = $value['title'];
        $description = $value['description'];
        $thumb = explode(" | ", $value['thumb']);
        $images = explode(" | ", $value['images']);
        $province = $value['province'];
        $district = $value['district'];
        $floor = $value['floor'];
        $rooms = $value['rooms'];
        $area = $value['area'];
        $baths = $value['baths'];
        $beds = $value['beds'];
        $content = $value['content'];
        $timePost = $value['timePost'];
        $price = number_format($value['price']);

        $ad_image = $value['ad_image'];
        $ad_name = $value['ad_name'];
        $ad_email = $value['ad_email'];
        $ad_phonenum = $value['ad_phonenum'];
    }
?>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-5) -->
    <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
        <!-- ltn__header-top-area start -->
        <div class="ltn__header-top-area top-area-color-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ltn__top-bar-menu">
                            <ul>
                                <li><a href="mailto:minhphamquang028@gmail.com?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> minhphamquang028@gmail.com</a></li>
                                <li><a target="_blank" href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+%C4%90%E1%BA%A1i+h%E1%BB%8Dc+C%C3%B4ng+ngh%E1%BB%87+Th%C3%B4ng+tin+v%C3%A0+Truy%E1%BB%81n+th%C3%B4ng/@21.585045,105.804187,17z/data=!3m1!4b1!4m5!3m4!1s0x31352738b1bf08a3:0x515f4860ede9e108!8m2!3d21.58504!4d105.806381"><i class="icon-placeholder"></i> Đại học Công Nghệ Thông Tin & Truyền Thông Thái Nguyên</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="top-bar-right text-end">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li>
                                        <!-- ltn__social-media -->
                                        <div class="ltn__social-media">
                                            <ul>
                                                <li><a target="_blank" href="https://www.facebook.com/ictu.vn" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a target="_blank" href="https://www.instagram.com/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-top-area end -->
        
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area">
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="<?php echo WEB_ROOT;?>"><img src="<?php echo WEB_ROOT;?>/public/assets/img/logo.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix d-none">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu black">
                                    <ul>
                                        <li class=""><a href="<?php echo WEB_ROOT;?>">Trang Chủ</a></li>
                                        <li class=""><a href="<?php echo WEB_ROOT;?>/product/">Mua Nhà</a></li>
                                        <li class=""><a href="<?php echo WEB_ROOT;?>/apart/">Chung Cư</a></li>
                                        <li class=""><a href="<?php echo WEB_ROOT;?>/news/">Tin Tức</a></li>
                                        <li><a href="<?php echo WEB_ROOT;?>">Liên Hệ</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="col--- ltn__header-options ltn__header-options-2 ">
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <!-- Utilize Mobile Menu Start -->
    <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
        <div class="ltn__utilize-menu-inner ltn__scrollbar">
            <div class="ltn__utilize-menu-head">
                <div class="site-logo">
                    <a href="<?php echo WEB_ROOT;?>"><img src="<?php echo WEB_ROOT;?>/public/assets/img/logo.png" alt="Logo"></a>
                </div>
                <button class="ltn__utilize-close">×</button>
            </div>
            <div class="ltn__utilize-menu-search-form">
                <form action="#">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="ltn__utilize-menu">
                <ul>
                    <li><a href="<?php echo WEB_ROOT;?>">Trang Chủ</a></li>
                    <li><a href="<?php echo WEB_ROOT;?>/product/">Mua Nhà</a></li>
                    <li><a href="<?php echo WEB_ROOT;?>/apart/">Chung Cư</a></li>
                    <li><a href="<?php echo WEB_ROOT;?>/news/">Tin Tức</a></li>
                    <li><a href="<?php echo WEB_ROOT;?>">Liên Hệ</a></li>
                </ul>
            </div>
            <div class="ltn__social-media-2">
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/ictu.vn" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Utilize Mobile Menu End -->

    <div class="ltn__utilize-overlay"></div>

        <!-- IMAGE SLIDER AREA START (img-slider-3) -->
    <div class="ltn__img-slider-area mb-90">
        <div class="container-fluid">
        <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">
                <?php
                    foreach($thumb as $key => $image){
                        echo'
                            <div class="col-lg-12">
                                <div class="ltn__img-slide-item-4">
                                    <img src="'.$image.'" alt="Image">
                                </div>
                            </div>                     
                        ';
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
                <div class="col-lg-12 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i><?php echo substr($timePost,0,10);?>
                                </li>
                            </ul>
                        </div>
                        <h1><?php echo $title;?></h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span><?php echo $district;?>, <?php echo $province;?></label>
                        <h4 class="title-2">Mô tả ngắn</h4>
                        <?php echo $description;?>
                        <h4 class="title-2">Chi tiết</h4>  
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">                          
                            <ul>
                                <li><label>Diện tích: </label> <span><?php echo $area;?></span></li>
                                <li><label>Số phòng: </label> <span><?php echo $rooms;?></span></li>
                            </ul>
                            <ul>
                                <li><label>Số phòng tắm: </label> <span><?php echo $baths;?></span></li>
                                <li><label>Số phòng ngủ: </label> <span><?php echo $beds;?><span></li>
                                <li><label>Giá: </label> <span><?php echo $price;?></span></li>
                            </ul>
                        </div>
                                        
                        <h4 class="title-2">Một số ảnh khác</h4>
                        <div class="ltn__property-details-gallery mb-30">
                        <div class="row">
                                <?php 
                                        foreach($images as $key => $value){
                                            echo'
                                            <div class="col-md-6 flex">
                                                <a href="img/others/14.jpg" data-rel="lightcase:myCollection">
                                                    <img class="mb-30" src="'.$value.'" alt="Image">
                                                </a>
                                                </div>
                                            ';
                                        }
                                    ?>
                            </div>
                        </div>

                        <h4 class="title-2">Vị trí trên bản đồ</h4>
                        
                        <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=652&amp;height=392&amp;hl=en&amp;q=<?php echo $district;?>&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://proxysite.pro">proxysite</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:392px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:392px;}.gmap_iframe {height:392px!important;}</style></div>

                        <h4 class="title-2">Nội dung</h4>
                        <?php echo $content;?>

                        <h4 class="title-2">Video mô tả</h4>
                        <div class="ltn__video-bg-img ltn__video-popup-height-500 bg-overlay-black-50 bg-image mb-60" data-bg="img/others/5.jpg">
                            <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/eWUxqVFBq74?autoplay=1&amp;showinfo=0" data-rel="lightcase:myCollection">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12">
                <h4 class="title-2">Người Bán</h4>
                    <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar---">
                        <!-- Author Widget -->
                        <div class="widget ltn__author-widget">
                            <div class="ltn__author-widget-inner text-center">
                                <img class="avatar" src="<?php echo $ad_image;?>" alt="Image">
                                <h5><?php echo $ad_name;?></h5>
                                <p><?php echo $ad_phonenum;?></p>
                                <p><?php echo $ad_email;?></p>
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
                        
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget d-none">
                            <a href="shop.html"><img src="<?php echo WEB_ROOT;?>/public/assets/img/banner/2.jpg" alt="#"></a>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="row">
                <h4>Các Bài Đăng Gần Mới Đây</h4>
                <?php 
                foreach( $listNew as $key => $value ){
                    $thumb = explode(" | ", $value['thumb']);
                    echo '
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                <div class="product-img">
                                    <a href="'.WEB_ROOT.'/product/detail/?h_id='.$value['h_id'].'" class="thumb-warp"><img src="'.$thumb[0].'" alt="#"></a>
                                </div>
                                <div class="product-info">
                                    <h2 class="product-title"><a href="'.WEB_ROOT.'/product/detail/?h_id='.$value['h_id'].'">'.$value['title'].'</a></h2>
                                    <div class="product-img-location">
                                        <ul>
                                            <li>
                                                <a href="'.WEB_ROOT.'/product/detail/?h_id='.$value['h_id'].'"><i class="flaticon-pin"></i>'.$value['province'].', '.$value['district'].'</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                        <li><span>'.$value['beds'].' </span>
                                            Phòng ngủ
                                        </li>
                                        <li><span>'.$value['baths'].' </span>
                                            Phòng tắm
                                        </li>
                                        <li><span>'.$value['area'].' </span>
                                            Mét vuông
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-info-bottom">
                                    <div class="product-price">
                                        <span>$ '.number_format($value['price']).'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                    ?>
            </div>

            <div class="row">
                <h4>Tin Tức</h4>
                <?php 
                    foreach($News as $key => $value){
                        $thumb = explode(" | ", $value['thumb']);
                        echo '
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                <div class="product-img">
                                    <a href="'.WEB_ROOT.'/news/detail/?n_id='.$value['n_id'].'" class="thumb-warp"><img src="'.$thumb[0].'" alt="#"></a>
                                </div>
                                <div class="ltn__blog-brief product-info" style="padding-bottom: 30px;">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                            <li class="ltn__blog-author">
                                                <a href="#"><i class="far fa-user"></i>Tác giả: '.$value['ad_name'].'</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="product-title"><a href="'.WEB_ROOT.'/news/detail/?n_id='.$value['n_id'].'">'.$value['title'].'</a></h3>
                                    <div class="ltn__blog-meta-btn">
                                        <div class="ltn__blog-meta">
                                            <ul>
                                                <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>'.substr($value['posttime'],0,10).'</li>
                                            </ul>
                                        </div>
                                        <div class="ltn__blog-btn">
                                            <a href="blog-details.html">Đọc Thêm</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- SHOP DETAILS AREA END -->

    <!-- FOOTER AREA START -->
    <footer class="ltn__footer-area  ">
        <div class="footer-top-area  section-bg-2 plr--5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget footer-about-widget">
                            <div class="footer-logo">
                                <div class="site-logo">
                                    <img src="<?php echo WEB_ROOT;?>/public/assets/img/logo-2.png" alt="Logo">
                                </div>
                            </div>
                            <p>Bán nhà đất online là sàn thương mại điện tử hỗ trợ khách hàng đăng tin bán hoặc cho thuê bất động sản toàn quốc tại Việt Nam. Đăng tin bán đất, bán nhà, bán biệt thự, bán căn hộ chung cư, cho thuê bất động sản tốc hành và cung cấp thông tin mới nhất về thị trường.</p>
                            <div class="footer-address">
                                <ul>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p>Tân Thịnh, TP.Thái Nguyên, Thái Nguyên</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-call"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="tel:+84789338359">0789338359</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-address-icon">
                                            <i class="icon-mail"></i>
                                        </div>
                                        <div class="footer-address-info">
                                            <p><a href="mailto:minhphamquang028@gmail.com">minhphamquang028@gmail.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__social-media mt-20">
                                <ul>
                                    <li><a href="https://www.facebook.com/ictu.vn" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.youtube.com/" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://www.instagram.com/" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-3 col-sm-3 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Công Ty</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="blog.html">Tin Tức</a></li>
                                    <li><a href="shop.html">Nhà</a></li>
                                    <li><a href="locations.html">Địa Chỉ</a></li>
                                    <li><a href="contact.html">Liên Hệ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-3 col-sm-3 col-12">
                        <div class="footer-widget footer-menu-widget clearfix">
                            <h4 class="footer-title">Dịch Vụ</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="order-tracking.html">Mua Nhà</a></li>
                                    <li><a href="wishlist.html">Bán Nhà</a></li>
                                    <li><a href="login.html">Đăng Nhập</a></li>
                                    <li><a href="about.html">Quản Lý Nhà</a></li>
                                    <li><a href="about.html">Chat</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
            <div class="container-fluid ltn__border-top-2">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="ltn__copyright-design clearfix">
                            <p>All Rights Reserved @ Company <span class="current-year"></span></p>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 align-self-center">
                        <div class="ltn__copyright-menu text-end">
                            <ul>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Claim</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->
