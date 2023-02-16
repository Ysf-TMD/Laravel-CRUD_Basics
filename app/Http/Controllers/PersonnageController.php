<?php

namespace App\Http\Controllers;
use App\Models\Personnage;
use Illuminate\Http\Request;

class PersonnageController extends Controller
{
    public function home()
    {   $personnages = Personnage::all();
        return View("personnage.index",compact("personnages"));
    }
    public function index()
    {
        $personnages = Personnage::all();
        return View('personnage.index', compact('personnages'));
    }
    public function create()
    {
        return View("personnage.create");
    }
    public function  store(Request $request)
    {
        $request->validate([
            'nom'=>"required",
            'detail'=>"required",
            'company'=>"required",
            'fortune'=>'required'
        ]);
        $personnages =new Personnage([
            "nom"=>$request->get("nom"),
            "detail"=>$request->get("detail"),
            "company"=>$request->get("company"),
            "fortune"=>$request->get("fortune")
        ]);
        $personnages->save();
        return redirect("/")->with("success","Personnage Ajouter Avec succes");
    }
    public function show($id)
    {
        $personnages =Personnage::findOrFail($id);
        return view("personnage.show",compact("personnages"));
    }
    public function edit($id)
    {
        $personnages = Personnage::findOrFail($id);
        return view('personnage.edit',compact("personnages"));
    }
    public function update(Request  $request , $id )
    {
        $request->validate([
            "nom"=>"required",
            "detail"=>"required",
            "company"=>"required",
            "fortune"=>"required"
        ]);
        $personnages=Personnage::findOrFail($id);
        $personnages->nom=$request->get("nom");
        $personnages->company=$request->get("company");
        $personnages->detail=$request->get("detail");
        $personnages->fortune=$request->get("fortune");
        $personnages->update();
        return redirect("/")->with("success","Personnages modifier avec success");
    }
    public function destroy($id)
    {
        $personnages = Personnage::findOrFail($id);
        $personnages->delete($id);
        return redirect("/")->with("success","destroy avec success");
    }
}
