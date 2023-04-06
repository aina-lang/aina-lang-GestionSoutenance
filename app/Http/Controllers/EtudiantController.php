<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use PDF;


class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::orderBy('matricule','desc')->paginate(2);
        return view('etudiant.studentIndex', compact('etudiants'));
    }

    public function recherche(Request $request)
    {
        $query = $request->input('query');

        $etudiants = Etudiant::where('nom', 'like', '%' . $query . '%')
                              ->orWhere('prenom', 'like', '%' . $query . '%')
                              ->orWhere('niveau', 'like', '%' . $query . '%')
                              ->orWhere('parcours', 'like', '%' . $query . '%')
                              ->orWhere('email', 'like', '%' . $query . '%')
                              ->get();

        return view('etudiant.recherche', compact('etudiants', 'query'));
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
        $request->validate([
            'matricule' => 'required|integer|unique:etudiants',
            'nom' => 'required',
            'prenoms' => 'required',
            'niveau' => 'required',
            'parcours' => 'required',
            'adr_email' => 'required|email',
        ]);

        // Création de l'étudiant
        $etudiant = new Etudiant([
            'matricule' => $request->get('matricule'),
            'nom' => $request->get('nom'),
            'prenoms' => $request->get('prenoms'),
            'niveau' => $request->get('niveau'),
            'parcours' => $request->get('parcours'),
            'adr_email' => $request->get('adr_email')
        ]);
        $etudiant->save();

        return redirect('/etudiants')->with('success', 'Etudiant ajouté avec succès!');
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



    public function getPdf(Etudiant $etudiants)
    {
        // $etudiants = Etudiant::orderBy('matricule','desc')->paginate(2);
        // L'instance PDF avec la vue resources/views/posts/show.blade.php
        $pdf = PDF::loadView('etudiant.pdf', compact('etudiants'));
        return $pdf->download('etudiants.pdf');
    }

}
