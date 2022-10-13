<?php

class BaseController{
    function model($model)
    {
        if(file_exists(_DIR_ROOT.'/App/models/'.$model.'.php')){
            require_once  _DIR_ROOT.'/App/models/'.$model.'.php';
        }
        if(class_exists($model)){
            return $model = new $model;
        }

        return false;
    }

    public function render($view, $data=[])
    {
        extract($data);
        if(file_exists(_DIR_ROOT.'/App/views/'.$view.'.php')){
            require_once  _DIR_ROOT.'/App/views/'.$view.'.php';
        }
    }

}