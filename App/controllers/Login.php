<?php

class Login extends BaseController{
    public function index()
    {
        $this->data['sub_content']['info'] = '';
        $this->data['content'] = 'Login/LoginView';
        $this->render('layouts/client_layout',$this->data);
    }

    public function check()
    {
        if(($_POST['username']!= '' && $_POST['password']!= '')){    
            $login = $this->model('LoginModel');
            $data = [
                'UserName' => $_POST['username'],
                'PassWord' => $_POST['password'],
            ];

            $res = $login->index($data);
            if ($res > 0) {
                header('location:'.WEB_ROOT);
                $_SESSION['login'] = $data['UserName'];
            }
            else{
                header('location:'.WEB_ROOT.'/'.'login/index/?message=Đăng Nhập Thất Bại !');
            }
        }
    }
    public function logout()
    {
        $_SESSION['login'] = false;
        header('location:'.WEB_ROOT);
    }
}