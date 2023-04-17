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
        return view('professeur.index',compact('professeurs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professeur.create');
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


    public function recherche(){
    $output='';
    foreach ($etudiants as $etudiant) {
        $output.="
        <tr class='bg-white dark:bg-gray-800'>
            <th scope='row'
                class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
                $etudiant->matricule
            </th>
            <td class='px-6 py-4'>
                $etudiant->nom
            </td>
            <td class='px-6 py-4'>
                $etudiant->prenom
            <td class='px-6 py-4'>
                $etudiant->niveau
            </td>
            <td class='px-6 py-4'>
                $etudiant->parcours
            </td>
            <td class='px-6 py-4'>
                $etudiant->email
            </td>
            <td class='px-6 py-4 text-right'>
            <a href='{{ route('etudiant.edit', $etudiant) }}'
                class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Edit</a>
        </td>
        <td class='px-6 py-4 text-right'>


            <button data-modal-target='popup-modal' data-modal-toggle='popup-modal'
                class='block text-red-600 hover:text-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center'
                type='button'>
                Supprimer
            </button>


            <div id='popup-modal' tabindex='-1'
                class='fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full'>
                <div class='relative w-full h-full max-w-md md:h-auto'>
                    <div class='relative bg-white rounded-lg shadow dark:bg-gray-700'>
                        <button type='button'
                            class='absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white'
                            data-modal-hide='popup-modal'>
                            <svg aria-hidden='true' class='w-5 h-5' fill='currentColor'
                                viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'>
                                <path fill-rule='evenodd'
                                    d='M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z'
                                    clip-rule='evenodd'></path>
                            </svg'
                            <span class='sr-only'>Close modal</span>
                        </button>
                        <div class='p-6 text-center'>
                            <svg aria-hidden='true'
                                class='mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200'
                                fill='none' stroke='currentColor' viewBox='0 0 24 24'
                                xmlns='http://www.w3.org/2000/svg'>
                                <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
                                    d='M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'></path>
                            </svg>
                            <h3 class='mb-5 text-lg font-normal text-gray-500 dark:text-gray-400'>Are
                                you sure you want to delete this product?</h3>
                            <form action='{{ route('etudiant.destroy', $etudiant) }}' method='POST'
                                class='text-white font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2'>
                                @csrf
                                @method('DELETE')
                                <button type='submit'
                                    class='text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2'>Je
                                    suis sure</button>
                            </form>
                            <button data-modal-hide='popup-modal' type='button'
                                class='text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600'>No,
                                cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </td>
        </tr>

        ";
    }



return response($output);
    // return view('etudiant.recherche', compact('etudiants', 'query'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Professeur $professeur)
    {
        return view('professeur.edit', compact('professeur'));
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
