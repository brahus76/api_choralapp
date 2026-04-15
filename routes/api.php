<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CantiqueController;
// Dans routes/api.php pour tester la connexion


Route::apiResource('cantiques', CantiqueController::class);
