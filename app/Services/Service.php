<?php

namespace App\Services;

class Service
{
    protected $model;

    public function all($filter = null)
    {
        if($filter){
            return $this->model->where($filter)->paginate();
        }
        return $this->model->paginate();
    }

    public function save($data)
    {
        //dd($data);
        return $this->model->updateOrCreate($data);
    }
}
