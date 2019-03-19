<?php

namespace App\Services;

class Service
{
    protected $model;

    public function all($filter = null)
    {
        return $this->model->where($filter)->get();
    }

    public function save($data)
    {
        $this->model->fill($data)->updateOrCreate();
    }
}
