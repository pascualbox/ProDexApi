<?php

namespace App\Http\Controllers;

use App\Models\TeamModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function getTeams($id)
    {
        return response()->json(DB::select('select * from teams where user_id = ?', [$id]));
    }
}
