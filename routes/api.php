<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeoController;


Route::get("/districts", [GeoController::class, "index"]);
Route::get("/districts/{province}", [GeoController::class, "show"]);
