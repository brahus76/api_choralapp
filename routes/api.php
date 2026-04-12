<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CantiqueController;


Route::get('/cantiques', [CantiqueController::class, 'index']);