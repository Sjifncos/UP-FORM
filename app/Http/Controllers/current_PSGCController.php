<?php
    namespace App\Http\Controllers;
    use Illuminate\Support\Facades\Http;
    
    class PsgcController extends Controller
    {
        public function index()
        {
            $baseUrl = 'https://psgc.cloud/api';

            //HTTP REQUEST FOR REGIONS
            $response = Http::get("$baseUrl/current_regions");
            $regions = $response->successful() ? $response->json() : [];

            // FETFCHING PROVINCES
            $provinces = Http::get("$baseUrl/current_provinces")->successful()
                        ? Http::get("$baseUrl/_currentprovinces")->json()
                        : [];

            return view('psgc.index', compact('current_regions', 'current_provinces'));
        }
    }