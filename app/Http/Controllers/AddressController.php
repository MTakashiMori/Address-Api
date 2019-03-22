<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Services\AddressService;
use Symfony\Component\HttpFoundation\Request;

class AddressController extends Controller
{
    public function __construct(AddressService $service)
    {
        $this->service = $service;
    }

    public function store(AddressRequest $request)
    {
        $this->service->save($request->all());

        return response()->json(['message' => __('message.created')], 201);
    }

    public function update($id, Request $request)
    {
        $this->service->update($request->all(), $id);

        return response()->json(['message' => __('message.updated')], 201);
    }
}
