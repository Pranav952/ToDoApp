<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


use App\Models\TaskTable;
use App\Models\register;
use Faker\Provider\bg_BG\PhoneNumber;
use GuzzleHttp\Exception\TooManyRedirectsException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class TaskController extends Controller
{
    public function create()
    {
        $url = url('task/create');
        $title = "Create NewTask";
        $title1 = "Create Task";
        $data = compact('url', 'title', 'title1');
        session()->put('user_id', 1);
        return view('create')->with($data);
    }
    public function store(Request $request)
    {
        $request->validate(["Task" => "required"]);
        $table1 = new TaskTable;
        $table1->Task = $request['Task'];
        $table1->id = $request["id"];
        $table1->save();
        return redirect('task/alltask');
    }
    public function show(Request $request)
    {
        $search = $request['search'] ?? '';
        if ($search != '') {
            $table1 = TaskTable::where('Task', 'LIKE', "%$search%")->get();
        } else {
            $table1 = TaskTable::all();
        }
        $data = compact('table1', 'search');
        return view("index")->with($data);
    }
    public function erase($id)
    {
        $table1 = TaskTable::find($id);
        $table1->delete();
        return redirect()->back();
    }
    public function edit($id)
    {


        $table1 = TaskTable::find($id);
        $url = url('task/update') . '/' . $id;
        $title = "Update Task";
        $title1 = "Submit Task";
        $data = compact('url', 'title', 'title1', 'table1');
        return view('create')->with($data);
    }
    public function update($id, Request $request)
    {
        $table1 = TaskTable::find($id);
        $table1->Task = $request['Task'];
        $table1->save();
        return redirect('task/alltask');
    }
    public function trash()
    {
        $table1 = TaskTable::onlyTrashed()->get();
        $data = compact('table1');
        return view("Trash")->with($data);
    }
    public function restore($id)
    {
        $table1 = TaskTable::withTrashed()->find($id)->restore();

        return redirect()->back();
    }
    public function pdelete($id)
    {
        $table1 = TaskTable::withTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }
    public function register()
    {
        return view("register");
    }
    public function StoreRegister(Request $request)
    {
        $table = new register;
        $table->Name = $request->Name;
        $table->Email = $request->Email;
        $table->Password = Crypt::encrypt($request->Password);
        $table->Address1 = $request->Address1;
        $table->Address2 = $request->Address2;
        $table->City = $request->City;
        $table->State = $request->State;
        $table->Zip = $request->Zip;
        $table->save();

        return redirect('task/register')->with(['success' => 'sucessfully registered']);
    }
    public function login(Request $request)
    {
        $request->validate([
            'Email' => "required|email",
            'Password' => 'required'
        ], [
            'required' => "This Field Can't Be Empty",
            'email' => 'Only Email Is Accepted'
        ]);
        $data = register::where('Email', '=', $request->Email)->get();
        if (Crypt::decrypt($data[0]->Password) == $request->Password) {
            $name = ucwords($data[0]->Name);
            session()->put('user', $name);
            return redirect('task/alltask');
        } else {
            return redirect('task/login')->withErrors(['Password' => 'Password didnot watch', 'Email' => "Email didnot match"]);
        }
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'Email' => "required|email",
    //         'Password' => 'required'
    //     ], [
    //         'required' => "This Field Can't Be Empty",
    //         'email' => 'Only Email Is Accepted'
    //     ]);

    //     $data = $request->only('Email', 'Password');
    //     $table = register::where('Email', $request->Email)->get();
    //     if (Auth::attempt($data)) {
    //         session()->put('user', $table[0]->Name);
    //         return redirect()->intended('task/alltask');
    //     } else {
    //         return redirect('task/login')->withErrors(['Password' => "Password did'nt match", 'Email' => 'Email did"nt match']);
    //     }
    // }
    public function logout()
    {
        session()->forget('user');
        session()->flash('message', 'Sucessfully logged out');
        return redirect('task/login');
    }
}
