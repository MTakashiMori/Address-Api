<?php

namespace App\Services;

class Service
{
    protected $model;

    public function __construct()
    {
        
    }

    public function all($filter = null)
    {
        if($filter){
            return $this->model->where($filter)->get();
        }
        return $this->model->all();
    }

    public function save($data)
    {
        $this->model->fill($data)->updateOrCreate();
    }
}
