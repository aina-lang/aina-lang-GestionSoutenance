<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    // liste de tous les etduiant enregistrer
    public function index()
    {
        $modeles = NomDuModele::all();
        return view('student', compact('modeles'));
    }

    public function create()
    {
        return view('chemin.vers.vue.create');
    }

    public function store(Request $request)
    {
        $modele = new Etudiant;
        $modele->champ1 = $request->input('champ1');
        $modele->champ2 = $request->input('champ2');
        // et ainsi de suite pour tous les champs de votre modèle

        $modele->save();

        return redirect()->route('nom_du_route_pour_index');
    }
    public function show($id)
    {
        $modele = Etudiant::findOrFail($id);
        return view('chemin.vers.vue.show', compact('modele'));
    }

    public function edit($id)
    {
        $modele = Etudiant::findOrFail($id);
        return view('chemin.vers.vue.edit', compact('modele'));
    }


    public function update(Request $request, $id)
    {
        $modele = Etudiant::findOrFail($id);
        $modele->champ1 = $request->input('champ1');
        $modele->champ2 = $request->input('champ2');
        // et ainsi de suite pour tous les champs de votre modèle

        $modele->save();

        return redirect()->route('nom_du_route_pour_index');
    }


}
