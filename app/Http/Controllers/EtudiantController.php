<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        // orderBy('matricule','desc')->paginate(15)
        return view('etudiant.studentIndex', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiant.addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $etudiant=new Etudiant;
        $etudiant->matricule=$request->get('matricule');
        $etudiant->nom=$request->get('nom');
        $etudiant->prenom=$request->get('prenom');
        $etudiant->niveau=$request->get('niveau');
        $etudiant->parcours=$request->get('parcours');
        $etudiant->email=$request->get('email');
        $etudiant->save();
        return redirect('etudiant');
    }

    /**
     * Display the specified resource.
     */
    public function show(Etudiant $etudiant)
    {
        return view('etudiant.editStudent', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Etudiant $etudiant)
    {
        return view('etudiant.editStudent', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->matricule = $request->get('matricule');
        $etudiant->nom = $request->get('nom');
        $etudiant->prenom = $request->get('prenom');
        $etudiant->niveau = $request->get('niveau');
        $etudiant->parcours = $request->get('parcours');
        $etudiant->email = $request->get('email');
        $etudiant->save();
        return redirect('etudiant')->with('success', 'L\'étudiant a été modifié avec succès.');
    }


    /**
     * Remove the specified resource from storage.
     */


/**
 * Remove the specified resource from storage.
 */
public function destroy(Etudiant $etudiant)
{
    $etudiant->delete();
    return redirect('etudiant')->with('success', 'L\'étudiant a été supprimé avec succès.');
}



}
