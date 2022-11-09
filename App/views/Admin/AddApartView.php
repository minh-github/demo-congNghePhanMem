<?php
    if(!isset($_SESSION['adminLogin'])){
        header('location:'.WEB_ROOT.'/'.'admin/');
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
                    <form action="<?php echo WEB_ROOT;?>/admin/insertApart/" method="post"  enctype="multipart/form-data" id="formAdd">
                    <input type="text" name="ad_id" hidden value ="<?php echo $_SESSION['ad_id']?>">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="liton_tab_3_1">
                                <div class="ltn__apartments-tab-content-inner">
                                    <h6>Tên chung cư</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="title" placeholder="*tiêu đề" value="">
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
                                    <h6>Chi tiết</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="floor" placeholder="Số tầng" value="">
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

                                    <h6  style="margin-top:30px;">Ảnh bìa</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="file" name="thumb[]" multiple placeholder="*thumb" accept="image/*" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <h6>Dịa chỉ</h6>
                                    <div class="row">
                                    <div class="flex">
                                        <select class="province" name="tinh" form="formAdd">
                                        </select>
                                        <select class="wards" name="huyen" form="formAdd">
                                        </select>
                                    </div>
                                    </div>
                                    <div class="btn-wrapper text-center--- mt-0">
                                        <button href="" style="margin-top: 50px;" class="btn theme-btn-1 btn-effect-1 text-uppercase">Bước tiếp</button>
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
