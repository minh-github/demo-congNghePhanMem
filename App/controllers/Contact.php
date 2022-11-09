<?php
    class Contact extends BaseController {
        public function index()
        {
            // $contact = $this->model('ContactModel');

            // $this->data['sub_content']['listLocation'] = $home->getByLocation();
            // $this->data['sub_content']['listNew'] = $home->getByTime();
            // $this->data['sub_content']['News'] = $home->getNews();
            $this->data['sub_content']['info'] = '';
            $this->data['content'] = 'Contact/ContactView';

            $this->render('layouts/client_layout',$this->data);
        }
    }
?>