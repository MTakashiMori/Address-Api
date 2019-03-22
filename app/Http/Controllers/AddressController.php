<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function store(AddressRequest $request)
    {
        $this->service->save($request->all());
        return response()->json(['message' => __('message.created')], 201);
    }

    public function update($id, AddressRequest $request)
    {
        $this->service->update($request->all(), $id);
        return response()->json(['message' => __('message.updated')], 201);
    }
}
