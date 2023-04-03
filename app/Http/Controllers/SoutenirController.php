<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soutenir;

class SoutenirController extends Controller
{

    public function index()
    {
        // $soutenances = Soutenir::join('etudiants', 'soutenirs.matricule', '=', 'etudiants.matricule')
        // ->join('organismes', 'soutenirs.idorg', '=', 'organismes.idorg')
        // ->orderBy('soutenirs.created_at', 'desc')
        // ->paginate(10);
        $soutenances = Soutenir::with(['etudiants', 'organismes', 'professeur'])
        ->orderBy('created_at', 'desc')
        ->paginate(10);
        return view('soutenir.index', compact('soutenances'));
    }


    public function show(Soutenir $soutenir){

    }
    // Méthode pour afficher le formulaire d'ajout
    public function create()
    {
        // Récupérer tous les étudiants enregistrés
        $etudiants = \App\Models\Etudiant::pluck('nom', 'matricule')->toArray();

        // Récupérer tous les professeurs enregistrés
        $professeurs = \App\Models\Professeur::pluck('nom', 'id_prof')->toArray();

        // Récupérer tous les organismes enregistrés
        $organismes = \App\Models\Organisme::pluck('design', 'idorg')->toArray();

        return view('soutenir.create', compact('etudiants', 'professeurs', 'organismes'));
    }

    // Méthode pour sauvegarder les données
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     // 'etudiant' => 'required|string|exists:etudiants,matricule',
        //     'organisme' => 'required|integer|exists:organismes,idorg',
        //     'annee_univ' => 'required|string',
        //     'note' => 'required|numeric|min:0|max:20',
        //     // 'president' => 'required|integer|exists:professeurs,id_prof',
        //     // 'examinateur' => 'required|integer|exists:professeurs,id_prof',
        //     // 'rapporteur_int' => 'required|integer|exists:professeurs,id_prof',
        //     // 'rapporteur_ext' => 'required|integer|exists:professeurs,id_prof',
        // ]);

        // if ($validated->fails()) {
        //     return redirect('register')
        //         ->withErrors($validator)
        //         ->withInput();
        // }else{
        //     echo "yes ";
        //     return;
        // }
        // $soutenir = new Soutenir;
        // // $soutenir->matricule = $validated['etudiant'];
        // // $soutenir->idorg = $validated['organisme'];
        // $soutenir->annee_univ = $validated['annee_univ'];
        // $soutenir->note = $validated['note'];
        // // $soutenir->president = $validated['president'];
        // // $soutenir->examinateur = $validated['examinateur'];
        // // $soutenir->rapporteur_int = $validated['rapporteur_int'];
        // // $soutenir->rapporteur_ext = $validated['rapporteur_ext'];
        // $soutenir->save();

        // return redirect()->route('soutenir.index')
        //     ->with('success', 'Soutenance enregistrée avec succès.');

        $soutenir = new Soutenir;
        $soutenir->matricule = $request->input('etudiant');
        $soutenir->idorg = $request->input('organisme');
        $soutenir->annee_univ = $request->input('annee_univ');
        $soutenir->note = $request->input('note');
        $soutenir->president = $request->input('president');
        $soutenir->examinateur = $request->input('examinateur');
        $soutenir->rapporteur_ext = $request->input('rapporteur_ext');
        $soutenir->rapporteur_int = $request->input('rapporteur_int');
        $soutenir->save();

        return redirect()->route('soutenir.index')
            ->with('success', 'Soutenance enregistrée avec succès.');
    }

    public function edit()
    {
        $soutenances = Soutenir::orderBy('created_at', 'desc')->paginate(10);
        return view('soutenir.index', compact('soutenances'));
    }
}
