<?php

namespace App\Http\Controllers;

use App\Models\Instructeur;
use App\Models\Voertuig; // Import the Voertuig model class
use App\Models\VoertuigInstructeur; 
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

    public function addVoertuig(Request $request, $instructeurId, $voertuigId)
    {
        $voertuigInstructeur = new VoertuigInstructeur;
        $voertuigInstructeur->VoertuigId = $voertuigId;
        $voertuigInstructeur->InstructeurId = $instructeurId;
        $voertuigInstructeur->save();
    
        return redirect()->back();
    }

    public function activate($id)
{
    $instructeur = Instructeur::find($id);
    $instructeur->update(['IsActief' => true]);

    // Restore the vehicle assignments from the history table
    $voertuigHistories = DB::table('instructeur_voertuig_histories')->where('InstructeurId', $id)->get();
    foreach ($voertuigHistories as $voertuigHistory) {
        VoertuigInstructeur::create([
            'InstructeurId' => $id,
            'VoertuigId' => $voertuigHistory->VoertuigId,
        ]);
    }

    // Delete the records from the history table
    DB::table('instructeur_voertuig_histories')->where('InstructeurId', $id)->delete();

    return redirect()->route('instructeur.index')->with('success', 'Instructeur is active');
}

    public function deactivate($id)
    {
        $instructeur = Instructeur::find($id);
        $instructeur->update(['IsActief' => false]);

        // Store the vehicle assignments in the history table
        $voertuigen = VoertuigInstructeur::where('InstructeurId', $id)->get();
        foreach ($voertuigen as $voertuig) {
            DB::table('instructeur_voertuig_histories')->insert([
                'InstructeurId' => $id,
                'VoertuigId' => $voertuig->VoertuigId,
            ]);
        }

        // Delete the related VoertuigInstructeur records
        VoertuigInstructeur::where('InstructeurId', $id)->delete();

        return redirect()->route('instructeur.index')->with('success', 'Instructeur is niet actief');
    }
}
