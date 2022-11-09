<?php
    class Home extends BaseController {
        public function index()
        {
            $home = $this->model('HomeModel');

            $this->data['sub_content']['listLocation'] = $home->getByLocation();
            $this->data['sub_content']['listNew'] = $home->getByTime();
            $this->data['sub_content']['News'] = $home->getNews();
            $this->data['content'] = 'Home/HomeView';

            $this->render('layouts/client_layout',$this->data);
        }
    }
?>