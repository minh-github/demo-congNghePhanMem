<?php
    class Admin extends BaseController {
        public function index()
        {
            if (isset($_SESSION['adminLogin'])) {
                if($_SESSION['role'] == '1'){
                    $admin = $this->model('AdminModel');

                    $this->data['sub_content']['list'] = $admin->getAllWithId();
                    $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id'],'house');
                    $this->render('Admin/AdminLandPage',$this->data);
                }
                if($_SESSION['role'] == '2'){
                    $admin = $this->model('AdminModel');
                    $this->data['sub_content']['list'] = $admin->getAllByUser($_SESSION['ad_id'],'house');
                    $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);
                    $this->render('Admin/AdminLandPage',$this->data);
                }
            }
            if(empty($_SESSION['adminLogin'])){
                $this->render('Admin/AdminLogin');
            }
        }

        public function check()
        {
            if(($_POST['username']!= '' && $_POST['password']!= '')){    
                $admin = $this->model('AdminModel');
                $data = [
                    'ad_username' => $_POST['username'],
                    'ad_password' => $_POST['password'],
                ];

                $res = $admin->index($data);
                if ($res) {
                    foreach($res as $key => $value){
                        $_SESSION['adminLogin'] = $value['ad_username'];
                        $_SESSION['ad_id'] = $value['ad_id'];
                        $_SESSION['role'] = $value['role'];
                    }
                    header('location:'.WEB_ROOT.'/'.'admin/');
                }
                else{
                    header('location:'.WEB_ROOT.'/'.'admin/index/?message=Đăng Nhập Thất Bại !');
                }
            }else{
                header('location:'.WEB_ROOT.'/'.'admin/index/?message=BẠN ĐÃ NHẬP THIẾU THÔNG TIN RỒI !');
            }
        }

        public function registerAdmin()
        {
            $admin = $this->model('AdminModel');
            // $data = $admin->;
            $this->data['sub_content']['info'] = '';
            $this->data['content'] = 'Admin/RegisterAdminView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function logout()
        {
            $_SESSION['adminLogin'] = false;
            $_SESSION['role'] = false;
            $_SESSION['ad_id'] = false;
            header('location:'.WEB_ROOT.'/'.'admin/');
        }

        public function deleteAdmin()
        {
            $admin = $this->model('AdminModel');
            $ad_id = $_GET['ad_id'];
            $admin->deleteAdmin($ad_id);
            header('location:'.WEB_ROOT.'/'.'admin/listUser/');
        }

        public function create()
        {
            if((
                $_POST['username']!= '' && $_POST['name']!= '' && $_POST['phone']!= '' 
                && $_POST['email']!= '' && $_POST['password']!= '' && $_POST['tinh']!= '' && $_POST['huyen']!= '' && $_FILES['image']['size'] > 1
            )){    
                $file_tmp = $_FILES['image']['tmp_name'];
                $dirRoot = getcwd()."/public/upload"."/";
                $targetDir = "/public/upload"."/";
                $fileName = md5(date("h:i:sa")).basename($_FILES['image']['name']);

                move_uploaded_file($file_tmp, $dirRoot.$fileName);
                $targetThumbPath = $targetDir . $fileName;

                $register = $this->model('AdminModel');
                $data = [
                    'ad_username' => $_POST['username'],
                    'ad_name' => $_POST['name'],
                    'ad_phonenum' => $_POST['phone'],
                    'ad_email' => $_POST['email'],
                    'ad_password' => $_POST['password'],
                    'ad_province' => $_POST['tinh'],
                    'ad_district' => $_POST['huyen'],
                    'ad_image' => $targetThumbPath,
                    'role' => $_POST['role'],
                ];
                $res = $register->check($_POST['username']);
                if($res->num_rows > 0){
                    header('location:'.WEB_ROOT.'/'.'admin/registerAdmin/?message=TÊN ĐĂNG NHẬP ĐÃ TỒN TẠI !');
                }
                else{
                    $register->create($data);
                    header('Location:'.WEB_ROOT."/"."admin/");
                }
            }else{
                header('location:'.WEB_ROOT.'/'.'admin/registerAdmin/?message=BẠN ĐÃ NHẬP THIẾU THÔNG TIN RỒI !');
            }
        }

        public function active()
        {
            $product = $this->model('AdminModel');

            if(isset($_GET['h_id'])){
                $product->accept($_GET['h_id'],'house','h_id');
            }

            if(isset($_GET['a_id'])){
                $product->accept($_GET['a_id'],'apartment','a_id');
            }

            header('location:'.WEB_ROOT.'/'.'admin/WaitList/');
        }

        public function addUser()
        {
            $this->data['sub_content']['info'] = '';
            $this->data['content'] = 'Admin/RegisterAdminView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function listUser()
        {
            $admin = $this->model('AdminModel');
            $this->data['sub_content']['list'] = $admin->getListUser();
            $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);

            $this->renderNoExtract('Admin/ListUserView',$this->data);
        }

        public function account()
        {
            $admin = $this->model('AdminModel');
            $ad_id = $_SESSION['ad_id'];
            $this->data['sub_content']['admin'] = $admin->getAdmin($ad_id);
            $this->data['sub_content']['list'] = $admin->getAllByUser($_SESSION['ad_id'],'admin');

            $this->renderNoExtract('Admin/AdminAccountView',$this->data);
        }

        public function updateAccount()
        {
            
            $admin = $this->model('AdminModel');
            $ad_id = $_SESSION['ad_id'];

            $this->data = [
                'ad_name' => $_POST['name'],
                'ad_username' => $_POST['username'],
                'ad_password' => $_POST['password'],
                'ad_email' => $_POST['email'],

            ];
            $res = $admin->updateAccount($this->data,$ad_id);
            if ($res) {
                header('location:'.WEB_ROOT.'/'.'admin/account/');
            }
        }

        public function addProduct()
        {
            $this->data['sub_content']['info'] = '';
            $this->data['content'] = 'Admin/AddProductView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function insertProduct()
        {
            if((
                $_POST['title']!= '' && $_POST['description']!= '' 
                && $_POST['tinh']!= '' && $_POST['huyen']!= '' && $_POST['floor']!= '' && $_POST['rooms']!= ''
                && $_POST['area']!= '' && $_POST['baths']!= '' 
                && $_POST['beds']!= '' && $_POST['content']!= '' && $_POST['price']!= '' 
                // && ($_FILES['thumb']['size']) > 1 && ($_FILES['image']['size']) > 1
            )){ 
                $admin = $this->model('AdminModel');
                $thumb = $_FILES['thumb'];
                $image = $_FILES['image'];
                $targetThumbPath ='';
                $targetImagesPath ='';
                
                $targetDir = "/public/upload"."/";
                
                $dirRoot = getcwd()."/public/upload"."/";
                
                foreach($_FILES['thumb']['name'] as $key=>$val){
                    $file_tmp = $_FILES['thumb']['tmp_name'][$key]; 
                    $fileName = md5(date("h:i:sa")). basename($_FILES['thumb']['name'][$key]); 
                    $targetThumbPath .= $targetDir . $fileName ." | "; 
                    
                    move_uploaded_file($file_tmp, $dirRoot.$fileName);
                }

                foreach($_FILES['image']['name'] as $key=>$val){
                    $file_tmp = $_FILES['image']['tmp_name'][$key]; 
                    $fileName = md5(date("h:i:sa")). basename($_FILES['image']['name'][$key]); 
                    $targetImagesPath .= $targetDir . $fileName ." | "; 

                    move_uploaded_file($file_tmp, $dirRoot.$fileName);
                }

                $this->data = [
                    'title' => $_POST['title'],
                    'description' => $_POST['description'],
                    'thumb' => trim($targetThumbPath," | "),
                    'images' => trim($targetImagesPath," | "),
                    'province' => $_POST['tinh'],
                    'district' => $_POST['huyen'],
                    'floor' => $_POST['floor'],
                    'rooms' => $_POST['rooms'],
                    'area' => $_POST['area'],
                    'baths' => $_POST['baths'],
                    'beds' => $_POST['beds'],
                    'content' => $_POST['content'],
                    'ad_id' => $_POST['ad_id'],
                    'price' => $_POST['price'],
                    'active' => '0',
                ];
                $res = $admin->insertProduct($this->data);
                if ($res) {
                    header('location:'.WEB_ROOT.'/'.'admin/');
                }
            }else{
                header('location:'.WEB_ROOT.'/'.'admin/addProduct/?message=BẠN ĐÃ NHẬP THIẾU THÔNG TIN RỒI !');
            }
        }

        public function detail()
        {
            $admin = $this->model('AdminModel');

            $res = [
                'h_id' => $_GET['h_id'],
            ];

            $this->data['sub_content']['product'] = $admin->getProduct($res);
            $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);
            $this->data['content'] = 'Admin/ProductDetailView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function editProduct()
        {
            if(isset($_GET['h_id'])){
                $getList = $this->model('AdminModel');
                $res = [
                    'h_id' => $_GET['h_id'],
                ];
                $this->data['sub_content']['dataForm'] = $getList->getProduct($res);
                $this->data['content'] = 'Admin/UpdateProductView';
                $this->render('layouts/client_layout',$this->data);
            }
            else{
                $this->data['sub_content']['info'] = '';
                $this->data['content'] = 'Admin/AddProductView';
                $this->render('layouts/client_layout',$this->data);
            }
        }

        public function updateProduct()
        {
            $admin = $this->model('AdminModel');
            $thumb = $_FILES['thumb']; 
            $image = $_FILES['image'];
            $targetThumbPath ='';
            $targetImagesPath ='';

            $targetDir = "/public/upload"."/";

            $dirRoot = getcwd()."/public/upload"."/";

            foreach($_FILES['thumb']['name'] as $key=>$val){
                $file_tmp = $_FILES['thumb']['tmp_name'][$key]; 
                $fileName = md5(date("h:i:sa")). basename($_FILES['thumb']['name'][$key]); 
                $targetThumbPath .= $targetDir . $fileName ." | "; 

                move_uploaded_file($file_tmp, $dirRoot.$fileName);
            }

            foreach($_FILES['image']['name'] as $key=>$val){
                $file_tmp = $_FILES['image']['tmp_name'][$key]; 
                $fileName = md5(date("h:i:s")). basename($_FILES['image']['name'][$key]); 
                $targetImagesPath .= $targetDir . $fileName ." | "; 

                move_uploaded_file($file_tmp, $dirRoot.$fileName);
            }

            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'thumb' => $targetThumbPath,
                'images' => $targetImagesPath,
                'province' => $_POST['tinh'],
                'district' => $_POST['huyen'],
                'floor' => $_POST['floor'],
                'rooms' => $_POST['rooms'],
                'area' => $_POST['area'],
                'baths' => $_POST['baths'],
                'beds' => $_POST['beds'],
                'content' => $_POST['content'],
                'ad_id' => $_POST['ad_id'],
                'price' => $_POST['price'],
            ];
            $condition = $_POST['h_id'];
            
            $res = $admin->updateProduct($data,$condition);
            if ($res > 0) {
                header('location:'.WEB_ROOT.'/'.'admin/');
            }
        }

        public function deleteProduct()
        {
            $admin = $this->model('AdminModel');
                $h_id = $_GET['h_id'];
            $admin->delProduct($h_id);
            header('location:'.WEB_ROOT.'/'.'admin/');
        }

        public function waitList()
        {
            $admin = $this->model('AdminModel');
            $this->data['sub_content']['listHouse'] = $admin->getHouseWaitList();
            $this->data['sub_content']['listApart'] = $admin->getApartWaitList();
            $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);

            $this->renderNoExtract('Admin/WaitListView',$this->data);
        }

        public function addNews()
        {
            $this->data['sub_content']['info'] = '';
            $this->data['content'] = 'admin/addNewsView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function insertNews()
        {
            $admin = $this->model('AdminModel');
            $targetDir = "/public/upload"."/";
            $pattern = "/'/i";
            $dirRoot = getcwd()."/public/upload"."/";

                $file_tmp = $_FILES['thumb']['tmp_name']; 
                $fileName = md5(date("h:i:sa")).basename($_FILES['thumb']['name']); 
                $targetThumbPath = $targetDir . $fileName; 
                move_uploaded_file($file_tmp, $dirRoot.$fileName);

            $data = [
                'title' => $_POST['title'],
                'description' => preg_replace($pattern, '"', $_POST['description']),
                'thumb' => $targetThumbPath,
                'content' => preg_replace($pattern, '"', $_POST['content']),
                'ad_id' => $_POST['ad_id'],
            ];
            $res = $admin->insertNews($data);
            if ($res) {
                header('location:'.WEB_ROOT.'/'.'Admin/listNews/');
            }
        }

        public function editNews()
        {
            if(isset($_GET['n_id'])){
                $getList = $this->model('AdminModel');
                    $n_id = $_GET['n_id'];
                $this->data['sub_content']['dataForm'] = $getList->getNews($n_id);
                $this->data['content'] = 'Admin/UpdateNewsView';
                $this->render('layouts/client_layout',$this->data);
            }
            else{
                $this->data['sub_content']['info'] = '';
                $this->data['content'] = 'Admin/AddNewsView';
                $this->render('layouts/client_layout',$this->data);
            }
        }

        public function updateNews()
        {
            $admin = $this->model('AdminModel');

            $targetDir = "/public/upload"."/";
            $dirRoot = getcwd()."/public/upload"."/";
            $pattern = "/'/i";

                $file_tmp = $_FILES['thumb']['tmp_name']; 
                $fileName = md5(date("h:i:sa")).basename($_FILES['thumb']['name']); 
                $targetThumbPath = $targetDir . $fileName; 

                move_uploaded_file($file_tmp, $dirRoot.$fileName);

            $data = [
                'title' => $_POST['title'],
                'description' => preg_replace($pattern, '"', $_POST['description']),
                'thumb' => $targetThumbPath,
                'content' => preg_replace($pattern, '"', $_POST['content']),
                'ad_id' => $_POST['ad_id'],
            ];
            $condition = $_REQUEST['n_id'];
            
            $res = $admin->updateNews($data,$condition);
            if ($res > 0) {
                header('location:'.WEB_ROOT.'/'.'admin/listNews');
            }
        }

        public function deleteNews()
        {
            $admin = $this->model('AdminModel');
                $n_id = $_GET['n_id'];
            $admin->delNews($n_id);
            header('location:'.WEB_ROOT.'/'.'admin/listNews/');
        }

        public function listNews()
        {
            $admin = $this->model('AdminModel');
            $this->data['sub_content']['list'] = $admin->getListNews();
            $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);

            $this->renderNoExtract('admin/listNewsView',$this->data);
        }

        public function detailNews()
        {
            $getList = $this->model('AdminModel');

            $n_id = $_GET['n_id'];

            $this->data['sub_content']['product'] = $getList->getNews($n_id);
            $this->data['content'] = 'Admin/NewsDetailView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function getListApart()
        {
            if($_SESSION['role'] == '1'){
                $admin = $this->model('AdminModel');

                $this->data['sub_content']['list'] = $admin->getListApart();
                $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['fad_id']);
                $this->render('Admin/ListApartView',$this->data);
            }
            if($_SESSION['role'] == '2'){
                $admin = $this->model('AdminModel');
                $this->data['sub_content']['list'] = $admin->getAllByUser($_SESSION['ad_id'],'apartment');
                $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);
                $this->render('Admin/ListApartView',$this->data);
            }
        }

        public function apartDetail()
        {
            $admin = $this->model('AdminModel');
            $a_id = $_GET['a_id'];

            $this->data['sub_content']['apart'] = $admin->getApart($a_id);
            $floors = $admin->getFloor($a_id);
            $this->data['sub_content']['cactang'] = [];

            foreach($floors as $key => $floor){
                $room = $admin->getAllRoom($floor['f_id']);    
                    $temp = [
                        'floor' =>$floor,
                        'room' =>$room,
                    ];
                    array_push($this->data['sub_content']['cactang'],$temp);
            }
            $this->data['content'] = 'Admin/ApartView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function editApart()
        {
            if(isset($_GET['a_id'])){
                $admin = $this->model('AdminModel');
                $res = [
                    'a_id' => $_GET['a_id'],
                ];
                $this->data['sub_content']['dataForm'] = $admin->getDataApart($res);
                $this->data['content'] = 'Admin/UpdateApartView';
                $this->render('layouts/client_layout',$this->data);
            }
            else{
                $this->data['sub_content']['info'] = '';
                $this->data['content'] = 'Admin/AddApartView';
                $this->render('layouts/client_layout',$this->data);
            }
        }

        public function updateApart()
        {
            $admin = $this->model('AdminModel');
            $thumb = $_FILES['thumb']; 
            $targetThumbPath ='';

            $targetDir = "/public/upload"."/";

            $dirRoot = getcwd()."/public/upload"."/";

            foreach($_FILES['thumb']['name'] as $key=>$val){
                $file_tmp = $_FILES['thumb']['tmp_name'][$key]; 
                $fileName = md5(date("h:i:sa")). basename($_FILES['thumb']['name'][$key]); 
                $targetThumbPath .= $targetDir . $fileName ." | "; 

                move_uploaded_file($file_tmp, $dirRoot.$fileName);
            }

            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'thumb' => $targetThumbPath,
                'province' => $_POST['tinh'],
                'district' => $_POST['huyen'],
                'floor' => $_POST['floor'],
                'area' => $_POST['area'],
                'content' => $_POST['content'],
                'ad_id' => $_POST['ad_id'],
            ];
            $condition = $_POST['a_id'];
            
            $res = $admin->updateApart($data,$condition);
            if ($res > 0) {
                header('location:'.WEB_ROOT.'/'.'admin/getListApart/');
            }
        }

        public function deleteApart()
        {
            $admin = $this->model('AdminModel');
            $a_id = $_GET['a_id'];
            $admin->delApart($a_id);
            header('location:'.WEB_ROOT.'/'.'admin/getListApart/');
        }

        public function room()
        {
            $admin = $this->model('AdminModel');
            $r_id = $_GET['r_id'];

            $this->data['sub_content']['room'] = $admin->getRoom($r_id);
            $this->data['content'] = 'Admin/RoomView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function addApart()
        {
            $this->data['sub_content']['info'] = '';
            $this->data['content'] = 'Admin/AddApartView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function insertApart()
        {
            if((
                $_POST['title']!= '' && $_POST['description']!= '' 
                && $_POST['tinh']!= '' && $_POST['huyen']!= '' && $_POST['floor']!= ''
                && $_POST['area']!= '' && $_POST['content']!= ''
                && ($_FILES['thumb']['size']) > 1
            )){ 
                $admin = $this->model('AdminModel');
                $thumb = $_FILES['thumb'];
                $targetThumbPath ='';
                
                $targetDir = "/public/upload"."/";
                
                $dirRoot = getcwd()."/public/upload"."/";
                
                foreach($_FILES['thumb']['name'] as $key=>$val){
                    $file_tmp = $_FILES['thumb']['tmp_name'][$key]; 
                    $fileName = md5(date("h:i:sa")). basename($_FILES['thumb']['name'][$key]); 
                    $targetThumbPath .= $targetDir . $fileName ." | "; 
                    
                    move_uploaded_file($file_tmp, $dirRoot.$fileName);
                }

                $this->data = [
                    'title' => $_POST['title'],
                    'description' => $_POST['description'],
                    'thumb' => trim($targetThumbPath," | "),
                    'province' => $_POST['tinh'],
                    'district' => $_POST['huyen'],
                    'content' => $_POST['content'],
                    'ad_id' => $_POST['ad_id'],
                    'active' => '0',
                    'floor' => $_POST['floor'],
                    'area' => $_POST['area'],
                ];

                $res = $admin->insertApart($this->data);
                if ($res) {
                    foreach($admin->getIdApart($this->data['title'],$this->data['ad_id']) as $id){
                        $a_id = $id['a_id'];
                    }
                    for ($i=1; $i < $this->data['floor']+1; $i++) { 
                        $admin->insertFloor($a_id,$i);
                    }
                    header('location:'.WEB_ROOT.'/'.'admin/addRoom/?a_id='.$a_id);
                }
            }else{
                header('location:'.WEB_ROOT.'/'.'admin/addApart/?message=BẠN ĐÃ NHẬP THIẾU THÔNG TIN RỒI !');
            }
        }

        public function addRoom()
        {
            $a_id = $_GET['a_id'];
            if(isset($_GET['f_id'])){
                $f_id = $_GET['f_id'];
            }
            $admin = $this->model('AdminModel');
            $this->data['sub_content']['apart'] = $admin->getApart($a_id);
            $this->data['content'] = 'Admin/AddRoomView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function insertRoom()
        {
            // if((
            //     $_POST['type']!= '' && $_POST['title']!= '' && $_POST['description']!= '' 
            //     && $_POST['tinh']!= '' && $_POST['huyen']!= '' && $_POST['floor']!= '' && $_POST['rooms']!= ''
            //     && $_POST['area']!= '' && $_POST['baths']!= '' 
            //     && $_POST['beds']!= '' && $_POST['content']!= '' && $_POST['price']!= '' 
            //     // && ($_FILES['thumb']['size']) > 1 && ($_FILES['image']['size']) > 1
            // )){ 
                $admin = $this->model('AdminModel');
                $image = $_FILES['image'];
                $targetThumbPath ='';
                $targetImagesPath ='';

                foreach($admin->getIdFloor($_POST['a_id'],$_POST['floor']) as $value){
                    $f_id = $value['f_id'];
                }
                
                $targetDir = "/public/upload"."/";
                
                $dirRoot = getcwd()."/public/upload"."/";
                
                foreach($_FILES['image']['name'] as $key=>$val){
                    $file_tmp = $_FILES['image']['tmp_name'][$key]; 
                    $fileName = md5(date("h:i:sa")). basename($_FILES['image']['name'][$key]); 
                    $targetImagesPath .= $targetDir . $fileName ." | "; 

                    move_uploaded_file($file_tmp, $dirRoot.$fileName);
                }

                $this->data = [
                    'f_id' => $f_id,
                    'nameroom' => $_POST['nameroom'],
                    'images' => trim($targetImagesPath," | "),
                    'description' => $_POST['description'],
                    'content' => $_POST['content'],
                    'price' => $_POST['price'],
                    'status' => '0',
                    'room' => $_POST['rooms'],
                    'area' => $_POST['area'],
                    'baths' => $_POST['baths'],
                    'beds' => $_POST['beds'],
                ];
                $res = $admin->insertRoom($this->data);
                if ($res) {
                    header('location:'.WEB_ROOT.'/'.'admin/addRoom/?a_id='.$_POST['a_id']);
                }
            // }else{
            //     header('location:'.WEB_ROOT.'/'.'admin/addProduct/?message=BẠN ĐÃ NHẬP THIẾU THÔNG TIN RỒI !');
            // }
        }
    }
