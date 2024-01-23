<?php

namespace App\Http\Controllers;

use App\Models\Instructeur;
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
        $voertuigen = $instructeur->voertuigen;

        return view('instructeur.show', [
            'instructeurs' => $instructeur,
            'voertuigen' => $voertuigen,
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
}
