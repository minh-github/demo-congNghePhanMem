<?php

class Apart extends BaseController{
    public function index()
    {
        if(isset($_GET['page'])){$n = $_GET['page'];}else{$n = 1;}
        // if(isset($_POST['sort'])){
        //     if ($_POST['sort'] == 'lth') {
        //         $sort = 'ORDER BY apartment.price';
        //     }
        //     if ($_POST['sort'] == 'htl') {
        //         $sort = 'ORDER BY apartment.price DESC';
        //     }
        //     if ($_POST['sort'] == 'timeUp' || $_POST['sort'] == 'default') {
        //         $sort = 'ORDER BY apartment.timePost DESC';
        //     }
            
        // }else{$sort = 'ORDER BY apartment.timepost DESC';}
        $apart = $this->model('ApartModel');

        $this->data['sub_content']['lenght'] = ceil($apart->getLenght()->num_rows / 12);
        $this->data['sub_content']['list'] = $apart->getListApart($n);
        // $this->data['sub_content']['list'] = $product->index($n,$sort);
        $this->data['content'] = 'Apart/ApartListView';
        $this->render('layouts/client_layout',$this->data);
    }

    public function apartDetail()
    {
        $apart = $this->model('ApartModel');
        $a_id = $_GET['a_id'];

        $this->data['sub_content']['apart'] = $apart->getApart($a_id);
        $floors = $apart->getFloor($a_id);
        $this->data['sub_content']['cactang'] = [];

        foreach($floors as $key => $floor){
            $room = $apart->getAllRoom($floor['f_id']);    
                $temp = [
                    'floor' =>$floor,
                    'room' =>$room,
                ];
                array_push($this->data['sub_content']['cactang'],$temp);
        }
        
        $this->data['content'] = 'Apart/ApartDetailView';
        $this->render('layouts/client_layout',$this->data);
    }

    public function room()
    {
        $apart = $this->model('ApartModel');
        $r_id = $_GET['r_id'];

        $this->data['sub_content']['room'] = $apart->getRoom($r_id);
        $this->data['content'] = 'Apart/RoomView';
        $this->render('layouts/client_layout',$this->data);
    }

    public function search()
    {
        $apart = $this->model('ApartModel');
        $keyWord = $_GET['search'];
        // $this->data['sub_content']['lenght'] = ceil($product->getLenght()->num_rows / 12);
        $this->data['sub_content']['list'] = $apart->getItem($keyWord);
        $this->data['content'] = 'Apart/ApartListView';
        $this->render('layouts/client_layout',$this->data);
    }

    public function saleRoom()
    {
        $apart = $this->model('ApartModel');
        $r_id = $_GET['r_id'];
        $apart->activeRoom($r_id);
    }
}
