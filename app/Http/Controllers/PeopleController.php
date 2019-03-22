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
        return response()->json(['message' => __('message.created')], 201);
    }

    public function update($id, PeopleRequest $request)
    {
        $this->service->update($request->all(), $id);
        return response()->json(['message' => __('message.updated')], 201);
    }
}
