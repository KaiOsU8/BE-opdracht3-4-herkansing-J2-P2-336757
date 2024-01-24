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
    public function update(Request $request, Voertuig $voertuig)
    {
        $validatedData = $request->validate([
            'Kenteken' => 'required|max:255',
            'Type' => 'required|max:255',
            'Bouwjaar' => 'required|date',
            'Brandstof' => 'required|max:255',
            'TypeVoertuigId' => 'required|exists:type_voertuigs,id',
            'InstructeurId' => 'required|exists:instructeurs,id',
        ]);
    
        $voertuig->update($validatedData);
    
        // Update the InstructeurId through the voertuigInstructeur relationship
        if ($voertuig->voertuigInstructeur) {
            $voertuig->voertuigInstructeur->update(['InstructeurId' => $validatedData['InstructeurId']]);
        } else {
            // Handle the case where voertuigInstructeur doesn't exist
            // For example, you might create a new voertuigInstructeur:
            $voertuig->voertuigInstructeur()->create([
                'InstructeurId' => $validatedData['InstructeurId']
            ]);
        }
    
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Voertuig $voertuig)
    {
        //
    }
}
