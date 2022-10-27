<?php
    if(!isset($_SESSION['adminLogin'])){
        header('location:'.WEB_ROOT.'/'.'admin/');
    }

    foreach($data['sub_content']['admin'] as $key => $value){
        $avarta = $value['ad_image'];
    }
?>

<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/panel-page-dashboard4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 03:24:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo WEB_ROOT;?>/public/admin/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo WEB_ROOT;?>/public/admin/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas shadow bg-primary text-white no-b theme-dark">
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="<?php echo WEB_ROOT;?>/public/admin/img/basic/logo-white.png" alt="">
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>MAIN NAVIGATION</strong></li>
            <li class="treeview">
                <a href="<?php echo WEB_ROOT;?>">
                    <i class="icon icon-sailing-boat-water purple-text s-18"></i> <span>View Page</span>
                </a>
            </li>
            <li class="treeview"><a href="#">
                <i class="icon icon icon-package blue-text s-18"></i>
                <span>Products</span>
            </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo WEB_ROOT;?>/admin/"><i class="icon icon-circle-o"></i>All Products</a>
                    </li>
                    <li><a href="<?php echo WEB_ROOT;?>/admin/addProduct/"><i class="icon icon-add"></i>Add New </a>
                    </li>
                </ul>
            </li>

            <?php
                if($_SESSION['role'] == '1'){
                    echo '
                        <li class="treeview"><a href="#"><i class="icon icon-account_box light-green-text s-18"></i>Users<i
                        class="icon icon-angle-left s-18 pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="'.WEB_ROOT.'/admin/listUser/"><i class="icon icon-circle-o"></i>All Users</a>
                                </li>
                                <li><a href="'.WEB_ROOT.'/admin/addUser/"><i class="icon icon-add"></i>Add User</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="treeview no-b"><a href="'.WEB_ROOT.'/admin/waitList/">
                            <i class="icon icon-package light-green-text s-18"></i>
                            <span>Chờ duyệt</span>
                        </a>

                        <li class="treeview"><a href="#"><i class="icon icon-documents3 light-green-text s-18"></i>News<i
                        class="icon icon-angle-left s-18 pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="'.WEB_ROOT.'/admin/listNews/"><i class="icon icon-circle-o"></i>All News</a>
                                </li>
                                <li><a href="'.WEB_ROOT.'/admin/addNews/"><i class="icon icon-add"></i>Add News</a>
                                </li>
                            </ul>
                        </li>
                    ';
                }
            ?>
        </ul>
    </section>
</aside>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
            <div class="search-bar">
                <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                       placeholder="start typing...">
            </div>
            <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
               aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
        </div>
    </div>
</div>
    <div class="sticky">
        <div class="navbar navbar-expand d-flex justify-content-between bd-navbar white shadow">
            <div class="relative">
                <div class="d-flex">
                    <div>
                        <a href="<?php echo WEB_ROOT;?>/admin/"  data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                            <i></i>
                        </a>
                    </div>
                    <div class="d-none d-md-block">
                        <h1 class="nav-title text-white">Dashboard</h1>
                    </div>
                </div>
            </div>
            <!--Top Menu Start -->
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- Messages-->
        <li class="dropdown custom-dropdown messages-menu">
            <a href="#" class="nav-link" data-toggle="dropdown">
                   <i class="icon-message "></i>
                   <span class="badge badge-success badge-mini rounded-circle">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu pl-2 pr-2">
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="<?php echo WEB_ROOT;?>/public/admin/img/dummy/u4.png" alt="">
                                    <span class="avatar-badge busy"></span>
                                </div>
                                <h4>
                                    Support Team
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <!-- end message -->
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="<?php echo WEB_ROOT;?>/public/admin/img/dummy/u1.png" alt="">
                                    <span class="avatar-badge online"></span>
                                </div>
                                <h4>
                                    Support Team
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <!-- end message -->
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="<?php echo WEB_ROOT;?>/public/admin/img/dummy/u2.png" alt="">
                                    <span class="avatar-badge idle"></span>
                                </div>
                                <h4>
                                    Support Team
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <!-- end message -->
                        <!-- start message -->
                        <li>
                            <a href="#">
                                <div class="avatar float-left">
                                    <img src="<?php echo WEB_ROOT;?>/public/admin/img/dummy/u3.png" alt="">
                                    <span class="avatar-badge busy"></span>
                                </div>
                                <h4>
                                    Support Team
                                    <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                </h4>
                                <p>Why not buy a new awesome theme?</p>
                            </a>
                        </li>
                        <!-- end message -->
                    </ul>
                </li>
                <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
            </ul>
        </li>
        <!-- Notifications -->
        <li class="dropdown custom-dropdown notifications-menu">
            <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                <i class="icon-notifications "></i>
                <span class="badge badge-danger badge-mini rounded-circle">4</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li class="header">You have 10 notifications</li>
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="footer p-2 text-center"><a href="#">View all</a></li>
            </ul>
        </li>
        <li>
            <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
               aria-controls="navbarToggleExternalContent"
               aria-expanded="false" aria-label="Toggle navigation">
                <i class=" icon-search3 "></i>
            </a>
        </li>
        <!-- Right Sidebar Toggle Button -->
        <li>
            <a class="nav-link ml-2" data-toggle="control-sidebar">
                <i class="icon-tasks "></i>
            </a>
        </li>
        <!-- User Account-->
        <li class="dropdown custom-dropdown user user-menu ">
            <a href="<?php echo WEB_ROOT;?>/admin/account/" class="nav-link">
                <img src="<?php echo $avarta;?>" class="user-image" style="object-fit: cover;" alt="User Image">
                <i class="icon-more_vert "></i>
            </a>
        </li>
        <a href="<?php echo WEB_ROOT;?>/admin/logout/" style="margin: auto;">logout</a>
    </ul>
</div>
</div>
</div>
    <div class="container-fluid animatedParent animateOnce my-3">
        <div class="animated fadeInUpShort">
            <div class="white my-3">
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="card no-b">
                            <div class="table-responsive">
                                <form>
                                    <table class="table table-striped table-hover r-0">
                                        <thead>
                                        <tr class="no-b">
                                            <th>BẤT ĐỘNG SẢN</th>
                                            <th>THỂ LOẠI</th>
                                            <th>TÊN</th>
                                            <th>GIÁ</th>
                                            <th>PHONE</th>
                                            <th>EMAIL</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>TỈNH</th>
                                            <th>HUYỆN</th>
                                            <th>ROLE</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php                             
                                            foreach ($data['sub_content']['list'] as $key => $value) {
                                                $thumb = explode(" | ", $value['thumb']);
                                                echo '
                                            <tr>
                                            <td class="title">
                                                <div class="thumb mr-3 mt-1">
                                                    <img src="'.$thumb[0].'" alt="">
                                                </div>
                                                <div>
                                                    <div >
                                                        <strong>'.$value['title'].'</strong>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>'.$value['type'].'</td>
                                            <td>205</td>
                                            <td>'.$value['price'].'$</td>
                                            <td>'.$value['ad_phonenum'].'</td>
                                            <td><span class="s-12">'.$value['ad_email'].'</span></td>
                                            <td><span class="r-3 badge badge-success">Chưa bán</span></td>
                                            <td>'.$value['province'].'</td>
                                            <td>'.$value['district'].'</td>
                                            <td>
                                                <a href="'.WEB_ROOT.'/admin/detail/?h_id='.$value['h_id'].'"><span class="r-3 badge badge-success">Xem</span></a>
                                                <a href="'.WEB_ROOT.'/admin/editProduct/?h_id='.$value['h_id'].'"><span class="r-3 badge badge-warning">Sửa</span></a>
                                                <a href="'.WEB_ROOT.'/admin/deleteProduct/?h_id='.$value['h_id'].'"><span class="r-3 badge badge-danger">xóa</span></a>
                                            </td>
                                        </tr>
                                        ';
                                        }                                  
                                        ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Right Sidebar -->
<!-- /.right-sidebar -->
<!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
<div class="control-sidebar-bg shadow white fixed"></div>
</div>
<!--/#app -->
<script src="<?php echo WEB_ROOT;?>/public/admin/js/app.js"></script>

<!--
--- Footer Part - Use Jquery anywhere at page.
--- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
-->
<script>(function($,d){$.each(readyQ,function(i,f){$(f)});$.each(bindReadyQ,function(i,f){$(d).bind("ready",f)})})(jQuery,document)</script>
</body>

<!-- Mirrored from xvelopers.com/demos/html/paper-panel/panel-page-dashboard4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Oct 2022 03:24:14 GMT -->
</html>
