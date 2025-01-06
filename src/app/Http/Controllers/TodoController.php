<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function app()
    {
        return view('/layouts/app');
    }


}
