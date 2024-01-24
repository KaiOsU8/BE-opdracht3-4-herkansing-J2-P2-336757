<?php

namespace App\Http\Controllers;

use App\Models\Instructeur;
use App\Models\Voertuig; // Import the Voertuig model class
use Illuminate\Http\Request;

class InstructeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('instructeur.index', [
            'instructeurs' => Instructeur::orderBy('AantalSterren', 'desc')->get(),
            'count' => Instructeur::count(),
        ]);

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructeur $instructeur)
    {
        // Load the relationship to eager load vehicles and their types
        $voertuigen = $instructeur->voertuigInstructeurs()->with('voertuig.typeVoertuig')->get();
    
        // Get all voertuig values per id
        $voertuigValues = $voertuigen->pluck('voertuig');
    
        // Extract TypeVoertuig and Rijbewijscategorie from each voertuig
        $typeVoertuigValues = $voertuigValues->pluck('typeVoertuig.TypeVoertuig');
        $rijbewijscategorieValues = $voertuigValues->pluck('typeVoertuig.Rijbewijscategorie');
    
        return view('instructeur.show', [
            'instructeur' => $instructeur,
            'voertuigen' => $voertuigen,
            'voertuigValues' => $voertuigValues,
            'typeVoertuigValues' => $typeVoertuigValues,
            'rijbewijscategorieValues' => $rijbewijscategorieValues,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructeur $instructeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructeur $instructeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructeur $instructeur)
    {
        //
    }

    public function addVoertuig(Instructeur $instructeur, Voertuig $voertuig)
    {
        $instructeur->voertuigen()->attach($voertuig->id, ['DatumToekenning' => now()]);

        return redirect()->back();
    }
}
