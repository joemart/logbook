<?php

use App\Models\Car;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {

    //  try {
    //     DB::connection()->getPdo();
    //     return "Connected successfully to database: " . DB::connection()->getDatabaseName();
    // } catch (\Exception $e) {
    //     return "Error connecting to database: " . $e->getMessage();
    // }



    return view('welcome');
});

