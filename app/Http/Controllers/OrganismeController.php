<?php

namespace App\Http\Controllers;

use App\Models\Organisme;
use Illuminate\Http\Request;

class OrganismeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organismes=Organisme::orderBy('idorg','desc')->paginate(2);
         return view('organisme.orgIndex',compact('organismes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organisme.addOrga');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $organisme=new Organisme;
       $organisme->design=$request->design;
       $organisme->lieu=$request->lieu;
       $organisme->save();

       return redirect('organisme');
    }

    /**
     * Display the specified resource.
     */
    public function show(Organisme $organisme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Organisme $organisme)
    {
        return view('organisme.editOrga');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organisme $organisme)
    {
        $organisme=new Organisme;
        $organisme->design=$request->design;
        $organisme->lieu=$request->lieu;
        $organisme->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organisme $organisme)
    {
        //
    }
}
