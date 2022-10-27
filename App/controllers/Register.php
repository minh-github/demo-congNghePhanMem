<?php

class Register extends BaseController{
    public function index()
    {
        $this->data['sub_content']['info'] = '';
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
                'username' => $_POST['username'],
                'name' => $_POST['name'],
                'phonenum' => $_POST['phone'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'province' => $_POST['tinh'],
                'district' => $_POST['huyen'],
                'image' => 'https://media.istockphoto.com/photos/close-up-young-smiling-man-in-casual-clothes-posing-isolated-on-blue-picture-id1270987867?k=20&m=1270987867&s=612x612&w=0&h=lX9Y1qUxtWOa0W0Mc-SvNta00UH0-sgJQItkxfwE4uU=',
            ]; 
            $register->index($data);
            header('Location:'.WEB_ROOT."/"."login/");
        }
    }
}