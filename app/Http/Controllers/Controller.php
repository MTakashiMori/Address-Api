<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $service;

    protected function index(Request $request)
    {
        return $this->service->all($request->all());
    }

    protected function show(Request $request)
    {
        return $this->service->all([$request->all()]);
    }

    protected function delete()
    {
        
    }

    protected function update(){}
}
