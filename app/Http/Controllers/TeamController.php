<?php

namespace App\Http\Controllers;

use App\Team;

class TeamController extends Controller
{
    public function show(Team $team)
    {
        dd($team);
    }
}
