<?php

namespace App\Http\Controllers;

use App\Models\FormData;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show()
    {
        return view("Form");
    }
    public function store(Request $request)

    {
        $request->validate([
            "Name" => "alpha|required",
            "Email" => "email|required|",
            "Password" => "required|"
        ]);
        $data = new FormData;
        $data->Email = $request["Email"];
        $data->Name = $request["Name"];
        $data->Password = $request["Password"];
        $data->save();
        return redirect("/form");
    }
}
