<?php

namespace App\Http\Controllers;

use App\Models\Coustomer;
use Illuminate\Http\Request;
use App\Models\HomeBills;
use GuzzleHttp\Exception\TooManyRedirectsException;

class HomeBill extends Controller
{
    public function index()
    {

        $title = "First page";
        return view('HomeBill')->with(compact('title'));
    }
    public function store(Request $request)
    {

        $request->validate([
            "Month" => "required|alpha",
            "HomeRent" => "required|integer",
            "Waste" => "required|integer",
            "Water" => "required|integer",
            "Internet" => "required|integer",
            "PreviousElecRead" => "required|integer",
            "PreviousElecRead" => "required|integer",
            "CurrentElecRead" => "required|integer",
            "UnitConsumed" => "required|integer",
            "Amount" => "required|integer",
            "TotalAmount" => "required|integer"
        ]);


        $homeBill = new HomeBills;
        $homeBill->id = $request["id"];
        $homeBill->Month = $request["Month"];
        $homeBill->HomeRent = $request['HomeRent'];
        $homeBill->Waste = $request["Waste"];
        $homeBill->Water = $request["Water"];
        $homeBill->Internet = $request["Internet"];
        $homeBill->PreviousElecRead = $request["PreviousElecRead"];
        $homeBill->CurrentElecRead = $request["CurrentElecRead"];
        $homeBill->UnitConsumed = $request["UnitConsumed"];
        $homeBill->Amount = $request["Amount"];
        $homeBill->TotalAmount = $request["TotalAmount"];
        $homeBill->save();
        return redirect('/homebill/view');
    }
    public function view()
    {
        $homeBills = HomeBills::all();
        $url = "homebill/view";
        $data = compact("homeBills,url");
        return view("HomeBill-view")->with($data);
    }


    public function delete($id)
    {
        HomeBills::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $homeBills = HomeBills::find($id);
        if (is_null($homeBills)) {
            return redirect("/homebill/view");
        } else {
            $url = url("/homebill/update") . "/" . $id;
            $title = "update homebill";
            $data = compact('homeBills', 'url', 'title');
            return view("HomeBill")->with($data);
        }
    }
    public function create()
    {
        $url = url("/homebill");
        $title = "create homebill";
        $data = compact('url', "title");
        return view('homebill')->with($data);
    }
    public function update($id, Request $request)
    {
        $homeBill = HomeBills::find($id);
        $homeBill->Month = $request["Month"];
        $homeBill->HomeRent = $request['HomeRent'];
        $homeBill->Waste = $request["Waste"];
        $homeBill->Water = $request["Water"];
        $homeBill->Internet = $request["Internet"];
        $homeBill->PreviousElecRead = $request["PreviousElecRead"];
        $homeBill->CurrentElecRead = $request["CurrentElecRead"];
        $homeBill->UnitConsumed = $request["UnitConsumed"];
        $homeBill->Amount = $request["Amount"];
        $homeBill->TotalAmount = $request["TotalAmount"];
        $homeBill->save();
        return redirect("homebill/view");
    }
    public function trash()
    {
        $homeBills = HomeBills::onlyTrashed()->get();
        $data = compact("homeBills");
        return view("HomeBill-Trash")->with($data);
    }
    public function pdelete($id)
    {
        $homeBill = HomeBills::withTrashed()->find($id);
        $homeBill->forceDelete();
        return redirect()->back();
    }
    public function restore($id)
    {
        $homeBill = HomeBills::withTrashed()->find($id)->restore();
        return redirect('homebill/view');
    }
}
