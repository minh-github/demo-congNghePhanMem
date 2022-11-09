<?php
    foreach($product as $key => $value){
        $title = $value['title'];
        $description = $value['description'];
        $thumbs = explode(" | ", $value['thumb']);
        $content = $value['content'];
        $timePost = $value['posttime'];
        $author = $value['ad_name'];
    }
?>

<body>
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
                                        <li><a href="<?php echo WEB_ROOT;?>/contact/">Liên Hệ</a></li>
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
                    <li><a href="<?php echo WEB_ROOT;?>/contact/">Liên Hệ</a></li>
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

    <!-- PAGE DETAILS AREA START (blog-details) -->
    <div class="ltn__page-details-area ltn__blog-details-area mb-120" style="margin-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__blog-details-wrap">
                        <div class="ltn__page-details-inner ltn__blog-details-inner">
                            <div class="ltn__blog-meta">
                            </div>
                            <h2 class="ltn__blog-title"><?php echo $title;?>
                            </h2>
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-author">
                                        <a href="#"><?php echo $author;?></a>
                                    </li>
                                    <li class="ltn__blog-date">
                                        <i class="far fa-calendar-alt"></i><?php echo substr($value['posttime'],0,10);?>
                                    </li>
                                </ul>
                            </div>
                            <p><?php echo $description;?></p>
                            <img src="<?php echo $thumbs[0];?>" alt="Image">

                            <?php echo $content;?>
                        </div>
                        <!-- blog-tags-social-media -->
                        <div class="ltn__blog-tags-social-media mt-80 row">
                            <div class="ltn__social-media text-right text-end col-lg-12">
                                <h4>Social Share</h4>
                                <ul>
                                    <li data-href="https://developers.facebook.com/docs/plugins/"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" title="Facebook" style="transform: translateY(5px);">facebook</a></li>
                                    <li><a target="_blank" class="twitter-share-button" href="https://twitter.com" title="Twitter"></a></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
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
                            <hr>
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
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- FOOTER AREA END -->
</div>