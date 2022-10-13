<?php

class Register extends BaseController{
    public function index()
    {
        $this->data['content'] = 'Register/RegisterView';
        $this->render('layouts/client_layout',$this->data);
    }
    public function create()
    {
        if((
            $_POST['username']!= '' && $_POST['name']!= '' && $_POST['phone']!= '' 
            && $_POST['email']!= '' && $_POST['password']!= '' && $_POST['tinh']!= '' && $_POST['huyen']!= ''
        )){    
            $register = $this->model('RegisterModel');
            $data = [
                'UserName' => $_POST['username'],
                'HoTen' => $_POST['name'],
                'SDT' => $_POST['phone'],
                'Email' => $_POST['email'],
                'PassWord' => $_POST['password'],
                'Tinh' => $_POST['tinh'],
                'Huyen' => $_POST['huyen'],
            ]; 
            $register->index($data);
            header('Location:'.WEB_ROOT."/"."login/");
        }
    }
}