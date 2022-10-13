<?php
    class Home extends BaseController {
        public function index()
        {
            $home = $this->model('HomeModel');
            $this->data['sub_content']['homeData'] = $home->getList();
            $this->data['content'] = 'home/HomeView';

            $this->render('layouts/client_layout',$this->data);
        }
    }
?>