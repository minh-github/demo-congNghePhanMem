<?php

class Product extends BaseController{
    public function index()
    {
        if(isset($_GET['page'])){$n = $_GET['page'];}else{$n = 1;}
        if(isset($_POST['sort'])){
            if ($_POST['sort'] == 'lth') {
                $sort = 'ORDER BY house.price';
            }
            if ($_POST['sort'] == 'htl') {
                $sort = 'ORDER BY house.price DESC';
            }
            if ($_POST['sort'] == 'timeUp' || $_POST['sort'] == 'default') {
                $sort = 'ORDER BY house.timePost DESC';
            }
            
        }else{$sort = 'ORDER BY house.timePost DESC';}
        $product = $this->model('ProductModel');

        $this->data['sub_content']['lenght'] = ceil($product->getLenght()->num_rows / 12);
        $this->data['sub_content']['list'] = $product->index($n,$sort);
        $this->data['content'] = 'Product/ProductListView';
        $this->render('layouts/client_layout',$this->data);
    }

    public function detail()
    {
        $product = $this->model('ProductModel');
            $h_id = $_GET['h_id'];

        $this->data['sub_content']['detail'] = $product->detail($h_id);
        $this->data['sub_content']['listNew'] = $product->getByTime();
        $this->data['sub_content']['News'] = $product->getNews();
        $this->data['content'] = 'Product/ProductDetailView';

        $this->render('layouts/client_layout',$this->data);
    }

    public function search()
    {
        $product = $this->model('ProductModel');
        if(isset($_GET['wards'])){
            if($_GET['wards'] == "Tất cả"){
                $keyWord = $_GET['search'];
            }else {
                $keyWord = $_GET['wards'];
            }
        }
        else{
            $keyWord = $_GET['search'];
        }

        $this->data['sub_content']['lenght'] = ceil($product->getLenght()->num_rows / 12);
        $this->data['sub_content']['list'] = $product->getItem($keyWord);
        $this->data['content'] = 'Product/ProductListView';

        $this->render('layouts/client_layout',$this->data);
    }
}
