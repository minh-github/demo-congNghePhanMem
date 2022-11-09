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
            $news = $this->model('NewsModel');
    
            $n_id = $_GET['n_id'];

            $this->data['sub_content']['product'] = $news->detail($n_id);
            $this->data['sub_content']['listNew'] = $news->getByTime();
            $this->data['sub_content']['News'] = $news->getNews();
            $this->data['content'] = 'News/NewsDetailView';
            $this->render('layouts/client_layout',$this->data);
    
            $this->render('layouts/client_layout',$this->data);
        }

        public function search()
        {
            $news = $this->model('NewsModel');
                $keyWord = $_POST['search'];
    
            $this->data['sub_content']['lenght'] = ceil($news->getLenght()->num_rows / 12);
            $this->data['sub_content']['list'] = $news->getItem($keyWord);
            $this->data['content'] = 'News/NewsView';
    
            $this->render('layouts/client_layout',$this->data);
        }
    }
?>