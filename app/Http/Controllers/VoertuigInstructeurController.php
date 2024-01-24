<?php

namespace App\Http\Controllers;
use App\Models\VoertuigInstructeur;
use Illuminate\Http\Request;

class VoertuigInstructeurController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate and process form data
        $voertuigId = $request->input('voertuig_id');
        $instructeurId = $request->input('instructeur_id');
    
        // Create a new VoertuigInstructeur record
        VoertuigInstructeur::create([
            'VoertuigId' => $voertuigId,
            'InstructeurId' => $instructeurId,
            // other fields...
        ]);
    
        // Redirect or respond as needed
    }
    /**
     * Display the specified resource.
     */
    public function show(VoertuigInstructeur $voertuigInstructeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VoertuigInstructeur $voertuigInstructeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $id)
    {
        // Validate and process form data
        $newVoertuigId = $request->input('new_voertuig_id');
        $newInstructeurId = $request->input('new_instructeur_id');
    
        // Find the existing VoertuigInstructeur record
        $voertuigInstructeur = VoertuigInstructeur::find($id);
    
        // Update the record
        $voertuigInstructeur->update([
            'VoertuigId' => $newVoertuigId,
            'InstructeurId' => $newInstructeurId,
            // other fields...
        ]);
    
        // Redirect or respond as needed
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VoertuigInstructeur $voertuigInstructeur)
    {
        //
    }
}
