<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

class AnimalDetector extends Model
{
    protected $fillable = ['animal', 'probability', 'url'];
    protected $table = "animals";

    public function __construct() {
        $this->init();
    }

    private function init() {
        $this->probability = 0.0;
        $this->animal = "";
        $this->message = "";
        $this->url = "";
    }

    private function askApi(string $url)
    {

        $client = new Client(['verify' => false]);

        $response = $client->request('POST', 'https://general-classification1.p.rapidapi.com/v1/results?algo=algo1', [
            'multipart' => [
                [
                    'name' => 'url',
                    'contents' => $url
                ]
            ],
            'headers' => [
                'X-RapidAPI-Host' => 'general-classification1.p.rapidapi.com',
                'X-RapidAPI-Key' => 'f21f8c1538msh11a3c29e2c78f60p1293eejsn2eeced636187',
            ]
        ]);

        return $response->getBody()->getContents();

    }

    public function identify(string $url) {

        $this->init();
        $json = $this->askApi($url);
        $data = json_decode($json, true)["results"][0];
        $classes = null;

        if($data["status"]["code"] == "ok") {
            $classes = $data["entities"][0]["classes"];
            arsort($classes);
            $this->animal = array_keys($classes)[0];
            $this->probability = $classes[$this->animal];
        }
        else
            $this->message = $data["status"]["message"];
    }
}
