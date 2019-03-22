<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class Service
{
    protected $model;

    public function all($filter = null)
    {
        if ($filter) {
            return $this->model->where($filter)->paginate();
        }

        return $this->model->paginate();
    }

    public function save($data)
    {
        DB::transaction(function () use ($data) {
            $this->model->create($data);
        });

        return;
    }

    public function update($data, $id)
    {
        DB::transaction(function () use ($data, $id) {
            $model = $this->model->find($id);
            $model->fill($data)->save();
        });

        return;
    }

    public function delete($id)
    {
        DB::transaction(function () use ($id) {
            $this->model->find($id)->delete();
        });

        return;
    }
}
