<?php
    class Admin extends BaseController {
        public function index()
        {
            if (isset($_SESSION['adminLogin'])) {
                if($_SESSION['role'] == '1'){
                    $admin = $this->model('AdminModel');

                    $this->data['sub_content']['list'] = $admin->getAllWithId();
                    $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);
                    $this->render('Admin/AdminLandPage',$this->data);
                }
                if($_SESSION['role'] == '2'){
                    $admin = $this->model('AdminModel');
                    $this->data['sub_content']['list'] = $admin->getAllByUser($_SESSION['ad_id']);
                    $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);
                    $this->render('Admin/AdminLandPage',$this->data);
                }
            }
            if(empty($_SESSION['adminLogin'])){
                $this->render('Admin/AdminLogin');
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

        public function create()
        {
            if((
                $_POST['username']!= '' && $_POST['name']!= '' && $_POST['phone']!= '' 
                && $_POST['email']!= '' && $_POST['password']!= '' && $_POST['tinh']!= '' && $_POST['huyen']!= ''
            )){    
                $file_tmp = $_FILES['image']['tmp_name'];
                $dirRoot = getcwd()."/public/upload"."/";
                $targetDir = WEB_ROOT."/public/upload"."/";
                $fileName = basename($_FILES['image']['name']);
                $targetThumbPath ='';

                move_uploaded_file($file_tmp, $dirRoot.$fileName);
                $targetThumbPath .= $targetDir . $fileName;

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
                $register->create($data);
                header('Location:'.WEB_ROOT."/"."admin/");
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
            }
        }

        public function addProduct()
        {
            $this->data['sub_content']['info'] = '';
            $this->data['content'] = 'Admin/AddProductView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function addUser()
        {
            $this->data['sub_content']['info'] = '';
            $this->data['content'] = 'Admin/RegisterAdminView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function waitList()
        {
            $admin = $this->model('AdminModel');
            $this->data['sub_content']['list'] = $admin->getWaitList();
            $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);

            $this->renderNoExtract('Admin/WaitListView',$this->data);
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

        public function deleteProduct()
        {
            $getList = $this->model('AdminModel');
                $h_id = $_GET['h_id'];
            $getList->delProduct($h_id);
            header('location:'.WEB_ROOT.'/'.'admin/');
        }

        public function insertProduct()
        {
            $admin = $this->model('AdminModel');
            $thumb = $_FILES['thumb']; 
            $image = $_FILES['image'];
            $targetThumbPath ='';
            $targetImagesPath ='';

            $targetDir = WEB_ROOT."/public/upload"."/";

            $dirRoot = getcwd()."/public/upload"."/";

            foreach($_FILES['thumb']['name'] as $key=>$val){
                $file_tmp = $_FILES['thumb']['tmp_name'][$key]; 
                $fileName = basename($_FILES['thumb']['name'][$key]); 
                $targetThumbPath .= $targetDir . $fileName ." | "; 

                move_uploaded_file($file_tmp, $dirRoot.$fileName);
            }

            foreach($_FILES['image']['name'] as $key=>$val){
                $file_tmp = $_FILES['image']['tmp_name'][$key]; 
                $fileName = basename($_FILES['image']['name'][$key]); 
                $targetImagesPath .= $targetDir . $fileName ." | "; 

                move_uploaded_file($file_tmp, $dirRoot.$fileName);
            }

            $data = [
                'type' => $_POST['type'],
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
            $res = $admin->insertProduct($data);
            echo $res;
            if ($res) {
                header('location:'.WEB_ROOT.'/'.'admin/');
            }
        }

        public function updateProduct()
        {
            $admin = $this->model('AdminModel');
            $thumb = $_FILES['thumb']; 
            $image = $_FILES['image'];
            $targetThumbPath ='';
            $targetImagesPath ='';

            $targetDir = WEB_ROOT."/public/upload"."/";

            $dirRoot = getcwd()."/public/upload"."/";

            foreach($_FILES['thumb']['name'] as $key=>$val){
                $file_tmp = $_FILES['thumb']['tmp_name'][$key]; 
                $fileName = basename($_FILES['thumb']['name'][$key]); 
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
                'type' => $_POST['type'],
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
            $condition = $_GET['h_id'];
            
            $res = $admin->updateProduct($data,$condition);
            if ($res > 0) {
                header('location:'.WEB_ROOT.'/'.'admin/');
            }
        }

        public function logout()
        {
            $_SESSION['adminLogin'] = false;
            $_SESSION['role'] = false;
            $_SESSION['ad_id'] = false;
            header('location:'.WEB_ROOT.'/'.'admin/');
        }

        public function detail()
        {
            $getList = $this->model('AdminModel');

            $res = [
                'h_id' => $_GET['h_id'],
            ];

            $this->data['sub_content']['product'] = $getList->getProduct($res);
            $this->data['content'] = 'Admin/ProductDetailView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function active()
        {
            $product = $this->model('AdminModel');

            $product->accept($_GET['h_id']);
            header('location:'.WEB_ROOT.'/'.'admin/WaitList/');
        }

        public function listUser()
        {
            $admin = $this->model('AdminModel');
            $this->data['sub_content']['list'] = $admin->getListUser();
            $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);

            $this->renderNoExtract('Admin/ListUserView',$this->data);
        }

        public function listNews()
        {
            $admin = $this->model('AdminModel');
            $this->data['sub_content']['list'] = $admin->getListNews();
            $this->data['sub_content']['admin'] = $admin->getAdmin($_SESSION['ad_id']);

            $this->renderNoExtract('admin/listNewsView',$this->data);
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
            $thumb = $_FILES['thumb']; 
            $image = $_FILES['image'];
            $targetThumbPath ='';
            $targetImagesPath ='';

            $targetDir = WEB_ROOT."/public/upload"."/";

            $dirRoot = getcwd()."/public/upload"."/";

            foreach($_FILES['thumb']['name'] as $key=>$val){
                $file_tmp = $_FILES['thumb']['tmp_name'][$key]; 
                $fileName = basename($_FILES['thumb']['name'][$key]); 
                $targetThumbPath .= $targetDir . $fileName ." | "; 

                move_uploaded_file($file_tmp, $dirRoot.$fileName);
            }

            foreach($_FILES['image']['name'] as $key=>$val){
                $file_tmp = $_FILES['image']['tmp_name'][$key]; 
                $fileName = basename($_FILES['image']['name'][$key]); 
                $targetImagesPath .= $targetDir . $fileName ." | "; 

                move_uploaded_file($file_tmp, $dirRoot.$fileName);
            }

            $data = [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'thumb' => trim($targetThumbPath," | "),
                'images' => trim($targetImagesPath," | "),
                'content' => $_POST['content'],
                'ad_id' => $_POST['ad_id'],
            ];
            $res = $admin->insertNews($data);
            if ($res) {
                header('location:'.WEB_ROOT.'/'.'admin/');
            }
        }

        public function detailNews()
        {
            $getList = $this->model('AdminModel');

            $n_id = $_GET['n_id'];

            $this->data['sub_content']['product'] = $getList->getNews($n_id);
            $this->data['content'] = 'Admin/NewsDetailView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function account()
        {
            $admin = $this->model('AdminModel');
            $ad_id = $_SESSION['ad_id'];
            $this->data['sub_content']['admin'] = $admin->getAdmin($ad_id);
            $this->data['sub_content']['list'] = $admin->getAllByUser($_SESSION['ad_id']);

            $this->renderNoExtract('Admin/AdminAccountView',$this->data);
        }
    }
