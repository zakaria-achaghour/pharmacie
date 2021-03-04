<?php

namespace App\Http\Controllers;

use App\Pharmacie;
use App\User;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pharmacie.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacie.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->except(['_token','prenom','nom_pharmacien',
                                    'fichier_cin','fichier_diplome',
                                    'fichier_autorisation','fichier_rc_patent',
                                    'fichier_if_ice']);
        $data['fichier_cin']=(int)$request->input('fichier_cin');
        $data['fichier_diplome']=(int)$request->input('fichier_diplome');
        $data['fichier_autorisation']=(int)$request->input('fichier_autorisation');
        $data['fichier_rc_patent']=(int)$request->input('fichier_rc_patent');
        $data['fichier_if_ice']=(int)$request->input('fichier_if_ice');
        $data['nom_pharmacien'] = $request->input('nom_pharmacien').' '. $request->input('prenom');
        $data['user_id']=1;
        $pharmacie=Pharmacie::create($data);
       
        return redirect()->route('pharmacies.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('pharmacie.show');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pharmacie.edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
