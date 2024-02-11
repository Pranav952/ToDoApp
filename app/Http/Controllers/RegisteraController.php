<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisteraController extends Controller
{
    public function index()
    {
        return view("form");
    }
    public function register(Request $request)
    {
        $request->validate([
            'Email' => 'required|email',
            "Password" => "required|max:4"
        ]);
        echo "<pre>";
        print_r($request->all());
    }
}
