<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UtilisateurRequest;
use App\utilisateur;

class UtilisateurController extends Controller
{
    public function index()
    {
        $utilisateurs = utilisateur::all();
        return view('utilisateurs.index',compact('utilisateurs'));
    }
    public function mod()
    {
        $utilisateurs = utilisateur::all();
        return view('utilisateurs.mod',compact('utilisateurs'));
    }
    public function create()
    {
        return view('utilisateurs.create');
    }
    public function store(UtilisateurRequest $request)
    {
        utilisateur::create($request->all());
       return redirect()->route('utilisateur.index')->with('message','Félicitation c est bien ajouté!');
    }
   
    public function edit(utilisateur $utilisateur)
    {
        return view('utilisateurs.edit',compact('utilisateur'));
    }

    public function update(UtilisateurRequest $request, utilisateur $utilisateur)
    {
        $utilisateur->update($request->all());
        return redirect()->route('utilisateur.index')->with('message','les données sont bien modifier!');
    }

    public function destroy(utilisateur $utilisateur)
    {
        $utilisateur->delete();
        return redirect()->route('utilisateur.index')->with('message','L utilisateur est bien supprimé!');
    }


}
