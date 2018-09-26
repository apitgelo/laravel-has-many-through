<?php

namespace App\Http\Controllers;

use App\Team;

class TeamController extends Controller
{
    public function show(Team $team)
    {
        $goals = $team->goals()->get();

        return view('team.show', compact('goals'));
    }
}
