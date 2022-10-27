<?php
    class News extends BaseController {
        public function index()
        {
            if(isset($_GET['page'])){
                $n = $_GET['page'];
            }
            else{$n = 1;}
            $news = $this->model('NewsModel');
    
            $this->data['sub_content']['lenght'] = ceil($news->getLenght()->num_rows / 12);
            $this->data['sub_content']['list'] = $news->index($n);
            $this->data['content'] = 'News/NewsView';
            $this->render('layouts/client_layout',$this->data);
        }

        public function detail()
        {
            $getList = $this->model('NewsModel');
    
            $n_id = $_GET['n_id'];

            $this->data['sub_content']['product'] = $getList->detail($n_id);
            $this->data['content'] = 'News/NewsDetailView';
            $this->render('layouts/client_layout',$this->data);
    
            $this->render('layouts/client_layout',$this->data);
        }
    }
?>