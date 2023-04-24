<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Etudiant;
use App\Models\Soutenir;
use App\Models\Organisme;
use App\Models\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SoutenirController extends Controller
{

    public function index()
    {
        // $soutenances = Soutenir::join('etudiants', 'soutenirs.matricule', '=', 'etudiants.matricule')
        //     ->join('organismes', 'soutenirs.idorg', '=', 'organismes.idorg')
        //     ->orderBy('soutenirs.created_at', 'desc')
        //     ->select('soutenirs.*', 'etudiants.nom')
        //     ->paginate(10);

        // return view('soutenir.index', compact('soutenances'));

    $soutenances = Soutenir::with(['etudiants', 'presidents', 'examinateurs', 'rapporteur_ints', 'rapporteur_exts'])
                            ->orderBy('created_at', 'desc')
                            ->paginate(3);
    return view('soutenir.index', compact('soutenances'));


    }



    public function show(Soutenir $soutenir){

    }

    // Méthode pour afficher le formulaire d'ajout
    public function create()
    {
        // Récupérer tous les étudiants enregistrés
        $etudiants = Etudiant::pluck('nom', 'matricule')->toArray();

        // Récupérer tous les professeurs enregistrés
        $professeurs = Professeur::pluck('nom', 'id_prof')->toArray();

        // Récupérer tous les organismes enregistrés
        $organismes = Organisme::pluck('design', 'idorg')->toArray();

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

    public function edit($id)
    {
        // $soutenances = Soutenir::orderBy('created_at', 'desc')->paginate(10);
        $soutenance = Soutenir::find($id);
                // Récupérer tous les étudiants enregistrés
                // $etudiants = Etudiant::select(DB::raw("CONCAT(nom, ' ', prenom) AS full_name"), 'matricule')
                // ->pluck('full_name', 'matricule')
                // ->toArray();

                $etudiants = Etudiant::select(DB::raw("CONCAT(nom, ' ', prenom) AS nom_complet"), 'matricule')
                ->pluck('nom_complet', 'matricule')
                ->toArray();

                // Récupérer tous les professeurs enregistrés
                $professeurs = Professeur::select(DB::raw("CONCAT(nom, ' ', prenoms) AS full_name"), 'id_prof')
                          ->pluck('full_name', 'id_prof')
                          ->toArray();

                // Récupérer tous les organismes enregistrés
                $organismes = Organisme::select(DB::raw("design"), 'idorg')
                ->pluck('design', 'idorg')
                ->toArray();

                $organisme=Organisme::find($soutenance->idorg);



            //    $soutenance->with(['etudiants', 'presidents', 'examinateurs', 'rapporteur_ints', 'rapporteur_exts']);

                // var_dump(Organisme::find($soutenance->idorg));return;
                return view('soutenir.edit', compact('soutenance','organisme','etudiants', 'professeurs', 'organismes'));

    }


    public function update(Request $request, Soutenir $soutenance)
{
    // $soutenance = Soutenir::findOrFail($id); // Récupération de la soutenance à mettre à jour

    $soutenance->matricule = $request->input('etudiant');
    $soutenance->idorg = $request->input('organisme');
    $soutenance->Annee_univ = $request->input('annee_univ');
    $soutenance->note = $request->input('note');
    $soutenance->president = $request->input('president');
    $soutenance->examinateur = $request->input('examinateur');
    $soutenance->rapporteur_int = $request->input('rapp_int');
    $soutenance->rapporteur_ext = $request->input('rapp_ext');

    $soutenance->save(); // Enregistrement de la soutenance mise à jour

    return redirect()->route('soutenir.index');
}

public function destroy($id)
{
    $soutenance = Soutenir::find($id);

    if (!$soutenance) {
        return redirect()->back()->with('error', 'Soutenance non trouvée.');
    }

    $soutenance->delete();

    return redirect()->back()->with('success', 'Soutenance supprimée avec succès.');
}


    public function soutenancesEntreAnnees(Request $request)
{
    $anneeDebut = $request->input('annee_debut');
    $anneeFin = $request->input('annee_fin');
    $soutenances=DB::table('soutenirs')
    ->join('etudiants', 'soutenirs.matricule', '=', 'etudiants.matricule')
    ->join('organismes', 'soutenirs.idorg', '=', 'organismes.idorg')
    ->whereRaw("SUBSTR(soutenirs.annee_univ, 1, 4) BETWEEN ? AND ?", [$anneeDebut ,  $anneeFin])
    ->select('etudiants.nom', 'etudiants.prenom', 'organismes.design', 'soutenirs.annee_univ', 'soutenirs.note')
    ->get();
    return view('soutenir.note', compact('soutenances'));
}


    public function getPdf(Soutenir $soutenance)
    {

        $pdf = PDF::loadView('soutenir.pdf',compact('soutenance'));
        return $pdf->download('soutenance.pdf');
    }
}
