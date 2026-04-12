<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cantique;
use Illuminate\Http\Request;

class CantiqueController extends Controller
{
    public function index() {
        return response()->json(Cantique::all());
    }
}
