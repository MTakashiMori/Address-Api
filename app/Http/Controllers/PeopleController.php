<?php

namespace App\Http\Controllers;

use App\Services\PeopleService;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function __construct(PeopleService $service)
    {
        $this->service = $service;
    }
}
