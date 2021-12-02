<?php

namespace App\Http\Controllers;

use App\Models\Etudiants;
use Illuminate\Http\Request;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $etudiants = Etudiants::all();
        return view('index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $storeData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'dateNaissance' => 'required|max:10',
            'email' => 'required|max:255',
            'numero' => 'required|numeric',
            'profession' => 'required|max:255',
            
        ]);

        $etudiants = Etudiants::create($storeData);
        return redirect('/etudiant')->with('completed', 'etudiant ajouté avec succès');

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
    public function edit($id)
    {
        //
        $etudiants = Etudiants::findOrFail($id);
        return view('edit', compact('etudiants'));
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
        $updateData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'dateNaissance' => 'required|max:10',
            'email' => 'required|max:255',
            'profession' => 'required|max:255',
            'numero' => 'required|numeric',
            
        ]);

        Etudiants::whereId($id)->update($updateData);
        return redirect('/etudiant')->with('completed', 'etudiant modifié avec succès');
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
        $etudiants = Etudiants::findOrFail($id);
        $etudiants->delete();
        return redirect('/etudiant')->with('completed', 'etudiant supprimé avec succès');

    }
}
