<?php

namespace App\Http\Controllers;

use App\Models\AnimalDetector;
use Illuminate\Http\Request;

class AnimalDetectorController extends Controller
{   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detector = new AnimalDetector();
        $detector->identify('https://drive.google.com/u/0/uc?id=1h67h9QfeHMgvhrPJ7EK_YsCZMm0sUg2P&export=download');
        $detector->save();
        $data = $detector;
        return view("identifyAnimal", ['detector' => $data]);
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
    public function show(AnimalDetector $detector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnimalDetector $detector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnimalDetector $detector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnimalDetector $detector)
    {
        //
    }
}
