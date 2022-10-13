<?php

class Product extends BaseController{
    public function index()
    {
        $this->data['content'] = 'Product/ProductListView';
        $this->render('layouts/client_layout',$this->data);
    }
    public function detail()
    {
        $this->data['content'] = 'Product/ProductDetailView';
        $this->render('layouts/client_layout',$this->data);
    }
    public function add()
    {
        $this->data['content'] = 'Product/addProductView';
        $this->render('layouts/client_layout',$this->data);
    }
}
