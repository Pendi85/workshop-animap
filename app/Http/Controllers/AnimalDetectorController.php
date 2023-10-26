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
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
    
            // Stockez l'image sur Google Drive en utilisant le package yaza/laravel-google-drive-storage
            Gdrive::put('images/' . $image->getClientOriginalName(), $image);
    
            return "Image téléchargée avec succès sur Google Drive.";
        }
    
        return "Échec du téléchargement de l'image.";
    }
}
