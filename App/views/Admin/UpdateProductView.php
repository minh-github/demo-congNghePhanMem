<?php
    if(!isset($_SESSION['adminLogin'])){
        header('location:'.WEB_ROOT.'/'.'admin/');
    }
    
    if (!empty($dataForm)) {
        foreach($dataForm as $key => $value){
            $title = $value['title'];
            $description = $value['description'];
            $thumb = $value['thumb'];
            $images = $value['images'];
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
                    <form action="<?php echo WEB_ROOT;?>/admin/updateProduct/" method="post" id="formAdd" enctype="multipart/form-data">
                        <div class="tab-content">
                            <input type="text" name="ad_id" hidden value ="<?php echo $_SESSION['ad_id']?>">
                            <input type="text" hidden name="h_id" value="<?php echo $_GET['h_id']; ?>">
                            <div class="tab-pane fade active show" id="liton_tab_3_1">
                                <div class="ltn__apartments-tab-content-inner">
                                    <h6>Tiêu đề</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="title" placeholder="*Title (mandatory)" value="<?php echo $title;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <h6>Mô tả ngắn</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <textarea class="testArea" name="description" cols="30" rows="10"><?php echo $description;?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <h6>Chi tiết nhà</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="floor" placeholder="Floors" value="<?php echo $floor;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="rooms" placeholder="Rooms" value="<?php echo $rooms;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="area" placeholder="Home Area (ex: 120 sqft)" value="<?php echo $area;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="baths" placeholder="Baths" value="<?php echo $baths;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="text" name="beds" placeholder="Beds" value="<?php echo $beds;?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item  input-item-textarea ltn__custom-icon">
                                                <input type="text" name="price" placeholder="Price in $ (only numbers)" value="<?php echo $price;?>">
                                            </div>
                                        </div>
                                    </div>

                                    <h6>Nội dung</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <textarea class="testArea" name="content" cols="30" rows="40"><?php echo $description;?></textarea>
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

                                    <h6  style="margin-top:30px;">Ảnh mô tả</h6>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-item input-item-textarea ltn__custom-icon">
                                                <input type="file" name="image[]" multiple placeholder="*image" accept="image/*" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <h6>Vị trí</h6>
                                    <div class="row">
                                    <div class="flex">
                                        <select class="province" name="tinh" form="formAdd">
                                        </select>
                                        <select class="wards" name="huyen" form="formAdd">
                                            <option>Thành Phố Uông Bí</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="btn-wrapper text-center--- mt-0">
                                        <button href="" class="btn theme-btn-1 btn-effect-1 text-uppercase" >Submit</button>
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
