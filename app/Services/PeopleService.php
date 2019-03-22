<?php

namespace App\Services;

use App\People;

class PeopleService extends Service
{
    public function __construct(People $model)
    {
        $this->model = $model->with('address');
    }
}
