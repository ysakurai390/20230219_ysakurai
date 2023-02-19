<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function post(Request $request)
    {
        return view('thanks');
    }
}
