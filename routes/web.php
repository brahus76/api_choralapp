<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

// Route directe à la racine pour éviter les soucis de préfixe
Route::get('/debug-db', function () {
    try {
        // Test de connexion simple
        DB::connection()->getPdo();
        
        // Liste des tables
        $tables = DB::select("SELECT table_name FROM information_schema.tables WHERE table_schema = 'public'");
        
        return response()->json([
            'message' => 'Connexion réussie !',
            'database' => DB::connection()->getDatabaseName(),
            'tables' => $tables
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Erreur de connexion',
            'details' => $e->getMessage()
        ], 500);
    }
});
