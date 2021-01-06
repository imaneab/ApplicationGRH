<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FonctionnaireRequest;
use App\Fonctionnaire;

class FonctionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fonctionnaires = Fonctionnaire::all();
        return view('fonctionnaires.index',compact('fonctionnaires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fonctionnaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FonctionnaireRequest $request)
    {
        Fonctionnaire::create($request->all());
        //dd(Employee);
       return redirect()->route('fonctionnaire.index')->with('message','Félicitation c est bien ajouté!');
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
    public function edit(Fonctionnaire $fonctionnaire)
    {
        return view('fonctionnaires.edit',compact('fonctionnaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FonctionnaireRequest $request, Fonctionnaire $fonctionnaire)
    {
        $fonctionnaire->update($request->all());
        return redirect()->route('fonctionnaire.index')->with('message','le message est bien modifier!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fonctionnaire $fonctionnaire)
    {
        $fonctionnaire->delete();
        return redirect()->route('fonctionnaire.index')->with('message','Le fonctionnaire est bien supprimé!');
    }

    public function searchcontent(){
        $searchkey = \Request::get('badgenumber');
        $fonctionnaires =  Fonctionnaire::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('fonctionnaires.index', ['fonctionnaires' => $fonctionnaires]);
    }

    public function search(){
        $searchkey = \Request::get('badgenumber');
        $fonctionnaires =  Fonctionnaire::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('fonctionnaires.mod', ['fonctionnaires' => $fonctionnaires]);
    }


    public function searchsup(){
        $searchkey = \Request::get('badgenumber');
        $fonctionnaires =  Fonctionnaire::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('fonctionnaires.supp', ['fonctionnaires' => $fonctionnaires]);
    }
    public function searchcon(){
        $searchkey = \Request::get('badgenumber');
        $fonctionnaires =  Fonctionnaire::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('fonctionnaires.fonc', ['fonctionnaires' => $fonctionnaires]);
    }
    public function searchaut(){
        $searchkey = \Request::get('badgenumber');
        $fonctionnaires =  Fonctionnaire::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('fonctionnaires.aut', ['fonctionnaires' => $fonctionnaires]);
    }
    public function searchatt(){
        $searchkey = \Request::get('badgenumber');
        $fonctionnaires =  Fonctionnaire::where('badgenumber', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('download.don', ['fonctionnaires' => $fonctionnaires]);
    }
  
    public function chercher(){
        $searchkey = \Request::get('nom');
        $fonctionnaires =  Fonctionnaire::where('nom', 'like', '%' .$searchkey. '%')->orderBy('id')->paginate(5);
        return view('fonctionnaires.test', ['fonctionnaires' => $fonctionnaires]);
    }


}
