<?php

class Product extends BaseController{
    public function index()
    {
        if(isset($_GET['page'])){$n = $_GET['page'];}else{$n = 1;}
        if(isset($_GET['sort'])){
            if ($_GET['sort'] == 'lth') {
                $sort = 'ORDER BY house.price';
            }
            if ($_GET['sort'] == 'htl') {
                $sort = 'ORDER BY house.price DESC';
            }
            if ($_GET['sort'] == 'timeUp' || $_GET['sort'] == 'default') {
                $sort = 'ORDER BY house.timePost DESC';
            }
            if ($_GET['sort'] == 'timeDown') {
                $sort = 'ORDER BY house.timePost';
            }
            
        }else{$sort = 'ORDER BY house.timePost DESC';}
        $productList = $this->model('ProductModel');

        $this->data['sub_content']['lenght'] = ceil($productList->getLenght()->num_rows / 12);
        $this->data['sub_content']['list'] = $productList->index($n,$sort);
        $this->data['content'] = 'Product/ProductListView';
        $this->render('layouts/client_layout',$this->data);
    }

    public function detail()
    {
        $getList = $this->model('ProductModel');
            $h_id = $_GET['h_id'];

        $this->data['sub_content']['detail'] = $getList->detail($h_id);
        $this->data['content'] = 'Product/ProductDetailView';

        $this->render('layouts/client_layout',$this->data);
    }

    public function search()
    {
        $product = $this->model('ProductModel');
            $keyWord = $_GET['search'];

        $this->data['sub_content']['lenght'] = ceil($product->getLenght()->num_rows / 12);
        $this->data['sub_content']['list'] = $product->getItem($keyWord);
        $this->data['content'] = 'Product/ProductListView';

        $this->render('layouts/client_layout',$this->data);
    }
}
