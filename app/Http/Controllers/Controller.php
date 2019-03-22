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
        return response()->json([
            'message' => __('messages.list'),
            'data' => $this->service->all($request->all()
            )],
            200);
    }

    protected function show(Request $request)
    {
        return response()->json([
            'message' => __('messages.list'),
            'data' => $this->service->all($request->all()
            )],
            200);
    }

    protected function destroy($id)
    {
        $this->service->delete($id);
        return response()->json([
            'message' => __('messages.deleted')
        ], 204);
    }
}
