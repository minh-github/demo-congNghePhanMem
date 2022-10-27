<?php
    if(!isset($_SESSION['adminLogin'])){
        header('location:'.WEB_ROOT.'/'.'admin/');
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <!-- Mirrored from tunatheme.com/tf/html/quarter-preview/quarter-rtl/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Oct 2022 03:53:19 GMT -->
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quarter - Real Estate HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo WEB_ROOT;?>/public/assets/img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>/public/assets/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>/public/assets/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>/public/assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>/public/assets/css/responsive.css">




<script src="<?php echo WEB_ROOT;?>/public/assets/js/plugins.js"></script>
<script src="<?php echo WEB_ROOT;?>/public/assets/js/main.js"></script>

</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->

<?php
    foreach($product as $key => $value){
        $type = $value['type'];
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
        $price = $value['price'];
    }
?>

<div class="body-wrapper">

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
                <div class="col-lg-8 col-md-12">
                    <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-category">
                                    <a href="#">Featured</a>
                                </li>
                                <li class="ltn__blog-category">
                                    <a class="bg-orange" href="#">For Rent</a>
                                </li>
                                <li class="ltn__blog-date">
                                    <i class="far fa-calendar-alt"></i>May 19, 2021
                                </li>
                                <li>
                                    <a href="#"><i class="far fa-comments"></i>35 Comments</a>
                                </li>
                            </ul>
                        </div>
                        <h1><?php echo $title;?></h1>
                        <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> Belmont Gardens, Chicago</label>
                        <h4 class="title-2">Description</h4>
                        <?php echo $description;?>
                        <h4 class="title-2">Property Detail</h4>  
                        <div class="property-detail-info-list section-bg-1 clearfix mb-60">                          
                            <ul>
                                <li><label>Type</label> <span><?php echo $type;?></span></li>
                                <li><label>Home Area: </label> <span><?php echo $area;?></span></li>
                                <li><label>Rooms:</label> <span><?php echo $rooms;?></span></li>
                                <li><label>Baths:</label> <span><?php echo $baths;?></span></li>
                                <li><label>Year built:</label> <span>1992</span></li>
                            </ul>
                            <ul>
                                <li><label>Beds:</label> <span><?php echo $beds;?><span></li>
                                <li><label>Price:</label> <span><?php echo $price;?></span></li>
                                <li><label>Property Status:</label> <span>For Sale</span></li>
                            </ul>
                        </div>
     
                        <h4 class="title-2">From Our Gallery</h4>
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

                        <h4 class="title-2">Maps</h4>
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
                        <h4 class="title-2">Nội dung</h4>
                        <?php echo $content;?>

                        <h4 class="title-2">Property Video</h4>
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
                                <img src="<?php echo WEB_ROOT;?>/public/assets/img/team/4.jpg" alt="Image">
                                <h5>Rosalina D. Willaimson</h5>
                                <small>Traveller/Photographer</small>
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( 1 Reviews )</a></li>
                                    </ul>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis distinctio, odio, eligendi suscipit reprehenderit atque.</p>
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


</body>
</html>