<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CongeRequest;
use\App\Conge;

class CongeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conges = Conge::all();
        return view('conges.conge',compact('conges'));
    }
    public function mod()
    {
        $conges = Conge::all();
        return view('conges.mod',compact('conges'));
    }
    public function aide(Request $req)
    {
        $conges = Conge::all();
        $conge = Conge::find($req->id);
        $conge->situation=1;
        $conge->save();
        return view('conges.conge',compact('conges'));
    }
   public function valider()
    {
        $conges = Conge::all();
        return view('conges.valider',compact('conges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conges.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CongeRequest $request)
    {
        Conge::create($request->all());
       return redirect()->route('conge.index')->with('message','le congé est bien ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Conge $conge)
    {
        return view('conges.edit',compact('conge'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CongeRequest $request, Conge $conge)
    {
        $conge->update($request->all());
        return redirect()->route('conge.index')->with('message','le congé est bien modifier!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conge $conge)
    {
        $conge->delete();
        return redirect()->route('conge.index')->with('message','Le congé est bien supprimé!');
    }
    public function searchconge(){
        $searchkey = \Request::get('badgenumber');
        $conges =  Conge::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('conges.conge', ['conges' => $conges]);
    }
    public function searchyes(){
        $searchkey = \Request::get('badgenumber');
        $conges =  Conge::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('conges.yes', ['conges' => $conges]);
    }
}
