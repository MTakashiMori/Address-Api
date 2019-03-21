<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeopleRequest;
use App\Services\PeopleService;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function __construct(PeopleService $service)
    {
        $this->service = $service;
    }

    public function store(PeopleRequest $request){
        $this->service->save($request->all());
    }
    //TODO make method update
    public function update(PeopleRequest $request){

    }
}
