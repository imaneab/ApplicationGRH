<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AutorisationRequest;
use\App\Autorisation;

class AutorisationController extends Controller
{
    public function index()
    {
        $autorisations = Autorisation::all();
        return view('autorisations.autorisation',compact('autorisations'));
    }
    public function create()
    {
        return view('autorisations.create');
    }

    public function store(AutorisationRequest $request)
    {
        Autorisation::create($request->all());
       return redirect()->route('autorisation.index')->with('message','l autorisation est bien ajoutée!');
    }
    public function show($id)
    {
        //
    }
    public function mod()
    {
        $autorisations = Autorisation::all();
        return view('autorisations.mod',compact('autorisations'));
    }
    public function help(Request $req)
    {
        $autorisations = Autorisation::all();
        $autorisation = Autorisation::find($req->id);
        $autorisation->situation=1;
        $autorisation->save();
        return view('autorisations.autorisation',compact('autorisations'));
    }

    public function edit(Autorisation $autorisation)
    {
        return view('autorisations.edit',compact('autorisation'));
    }

    public function update(AutorisationRequest $request, Autorisation $autorisation)
    {
        $autorisation->update($request->all());
        return redirect()->route('autorisation.index')->with('message','l autorisation est bien modifiée!');
    }

    public function destroy(Autorisation $autorisation)
    {
        $autorisation->delete();
        return redirect()->route('autorisation.index')->with('message','L autorisation est bien supprimée!');
    }

    public function searchautorisation(){
        $searchkey = \Request::get('badgenumber');
        $autorisations =  Autorisation::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('autorisations.autorisation', ['autorisations' => $autorisations]);
    }
    public function searchyesaut(){
        $searchkey = \Request::get('badgenumber');
        $autorisations =  Autorisation::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('autorisations.yesaut', ['autorisations' => $autorisations]);
    }
}
