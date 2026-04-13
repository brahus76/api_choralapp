<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CantiqueController;
// Dans routes/api.php pour tester la connexion
use Illuminate\Support\Facades\DB;

Route::get('/cantiques', [CantiqueController::class, 'index']);


Route::get('/test-db', function () {
    return DB::select('SELECT table_name FROM information_schema.tables WHERE table_schema = \'public\'');
});