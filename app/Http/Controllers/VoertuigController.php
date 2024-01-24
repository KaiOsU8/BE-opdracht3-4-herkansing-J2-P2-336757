<?php

namespace App\Http\Controllers;

use App\Models\Voertuig;
use Illuminate\Http\Request;
use App\Models\Instructeur;

class VoertuigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Instructeur $instructeur)
    {
        $voertuigen = Voertuig::whereDoesntHave('voertuigInstructeur.instructeur')->get();
    
        return view('voertuig.create', ['voertuigen' => $voertuigen, 'instructeur' => $instructeur]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Voertuig $voertuig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Voertuig  $voertuig
     * @return \Illuminate\Http\Response
     */
    public function edit(Voertuig $voertuig)
    {
        $typeVoertuigs = \App\Models\TypeVoertuig::all();
        $instructeurs = \App\Models\Instructeur::all();

        return view('voertuig.edit', compact('voertuig', 'typeVoertuigs', 'instructeurs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Voertuig  $voertuig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate and process form data
        $newVoertuigTypeId = $request->input('TypeVoertuigId');
        $newInstructeurId = $request->input('InstructeurId');
        $newType = $request->input('Type');
    
        // Find the existing Voertuig record
        $voertuig = Voertuig::find($id);
    
        // Update the Voertuig record
        $voertuig->update([
            'TypeVoertuigId' => $newVoertuigTypeId,
            'Type' => $newType,
            // other fields...
        ]);
    
        // Update the associated Instructeur record in the pivot table
        $voertuig->instructeurs()->sync([$newInstructeurId]);
    
        return redirect()->route('instructeur.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voertuig $voertuig)
    {
        //
    }
}
