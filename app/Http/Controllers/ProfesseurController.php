<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $professeurs=new Professeur;
        $professeurs=Professeur::orderBy('id_prof','desc')->paginate(2);
        return view('professeur.professeurIndex',compact('professeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professeur.addProfesseur');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $professeur=new Professeur;
        // $professeur->matricule=$request->get('matricule');
        $professeur->nom=$request->get('nom');
        $professeur->prenoms=$request->get('prenom');
        $professeur->civilites=$request->get('civilites');
        $professeur->grade=$request->get('grade');
        // $professeur->email=$request->get('email');
        $professeur->save();
        return redirect('professeur');
    }

    /**
     * Display the specified resource.
     */
    public function show(Professeur $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professeur $professeur)
    {
        return view('professeur.editProfesseur', compact('professeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Professeur $professeur)
    {
        $professeur->nom=$request->get('nom');
        $professeur->prenoms=$request->get('prenom');
        $professeur->civilites=$request->get('civilites');
        $professeur->grade=$request->get('grade');
        $professeur->save();
        return redirect('professeur')->with('success', 'L\'étudiant a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Professeur $professeur)
    {

        $professeur->delete();
        return redirect('professeur')->with('success', 'L\'étudiant a été supprimé avec succès.');
    }
}
