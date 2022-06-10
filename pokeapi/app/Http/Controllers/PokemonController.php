<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        return response()->json(Pokemon::all(), 200);
    }
    public function getPokemon($id)
    {
        return response()->json(Pokemon::find($id));
    }
    public function deletePokemon($id)
    {
        return response()->json(Pokemon::delete($id));
    }
}
