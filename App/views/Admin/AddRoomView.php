<?php
    if(!isset($_SESSION['adminLogin'])){
        header('location:'.WEB_ROOT.'/'.'admin/');
    }

    foreach($apart as $value){
        $floors = $value['floor'];
    }
?>
<link rel="stylesheet" href="<?php echo WEB_ROOT;?>/public/assets/css/substyle.css">
<script src="https://cdn.tiny.cloud/1/1vaung1y0h5vcq7ul3hoxiqdisbfqfpaldjuvakxonqaudms/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<body style="padding-top: 30px;">
<div class="body-wrapper">
    <div class="ltn__utilize-overlay"></div>

    <!-- APPOINTMENT AREA START -->
    <div class="ltn__appointment-area pt-115--- pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"> 
                    <?php
                        if(isset($_GET['message'])){
                            echo '<div style="text-align:center; color:red;">'.$_GET['message'].'</div>';
                        }
                    ?>                   
                    <form action="<?= WEB_ROOT;?>/admin/insertRoom/" method="post"  enctype="multipart/form-data" id="formAdd">
                    <input type="text" name="ad_id" hidden value ="<?php echo $_SESSION['ad_id']?>">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_3_1">
                                <div class="ltn__apartments-tab-content-inner">
                                    <h6>Chọn Tầng</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="sort">
                                            <select class="nice-select" name="floor">
                                                <?php
                                                    if(!isset($_GET['f_id'])){
                                                        for ($i=1; $i < $floors+1; $i++) { 
                                                            echo'
                                                                <option value="'.$i.'">Tầng '.$i.'</option>
                                                            ';
                                                        }
                                                    }else{
                                                        echo'
                                                                <option value="'.$_GET['isfloor'].'">Tầng '.$_GET['isfloor'].'</option>
                                                            ';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        </div>
                                    </div>
                                    <h6 style="margin-top: 30px;">Tên Phòng</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="nameroom" placeholder="*tên phòng" value="">
                                                <input hidden type="text" name="a_id" value="<?=$_GET['a_id']?>">
                                            </div>
                                        </div>
                                    </div>

                                    <h6>Mô tả ngắn</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <textarea class="testArea" name="description" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 style="margin-top: 30px;">Chi tiết</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="rooms" placeholder="Số phòng" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="beds" placeholder="Số phòng ngủ" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="baths" placeholder="Số phòng tắm" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="price" placeholder="Giá" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="area" placeholder="Diện tích (vd: 120)" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <h6>Nội dung</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="testArea" name="content" cols="30" rows="40"></textarea>
                                        </div>
                                    </div>

                                    <h6  style="margin-top:30px;">Ảnh mô tả</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="file" name="image[]" multiple placeholder="*image" accept="image/*" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-wrapper text-center--- mt-0">
                                        <button href="" style="margin-top: 50px;" class="btn theme-btn-1 btn-effect-1 text-uppercase">Đăng</button>
                                        <a href="<?=WEB_ROOT?>/admin/getListApart/" style="margin-top: 50px;" class="btn theme-btn-1 btn-effect-1 text-uppercase">Hủy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- APPOINTMENT AREA END -->

</div>
<!-- Body main wrapper end -->

<script>
    tinymce.init({
      selector: 'textarea.testArea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
</script>

<script src="<?php echo WEB_ROOT;?>/public/assets/js/province.js"></script>
