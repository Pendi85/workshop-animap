<?php

namespace App\Http\Controllers;

use App\Models\AnimalDetector;
use Illuminate\Http\Request;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

use Illuminate\Support\Facades\Storage;

class AnimalDetectorController extends Controller
{   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = AnimalDetector::all();

        return view("images", ['animals' => $animals]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $detector = new AnimalDetector();
        $detector->identify('https://drive.google.com/u/0/uc?id=1h67h9QfeHMgvhrPJ7EK_YsCZMm0sUg2P&export=download');
        $detector->save();
        $data = $detector;
        return view("identifyAnimal", ['detector' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $detector = new AnimalDetector();
        $detector->probability = 0.9;
        $detector->animal = "Ecureuil";
        $detector->url = "https://drive.google.com/u/0/uc?id=10H2SbYaLchaxltiYNRvClC_LcrJjFRmV&export=download​";
        $detector->save();
        return redirect()->to('/camera');
    }
}
