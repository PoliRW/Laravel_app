<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NameController;
use App\Models\Name;
use App\Models\Team;
use App\Models\Type;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Psy\CodeCleaner\ReturnTypePass;
use Symfony\Component\Console\Input\Input;

class TeamController extends Controller
{
    //strart whit update names table end create table teams
    public function create()
    {
        $types = Type::all();
        return view('createTeam', compact('types'));
    }
    public function store()
    {

        $newTeam = request()->validate([
            'name_team' => 'required|min:2',

        ]);


        $team = Team::firstOrCreate($newTeam);

        return (redirect()->route('team.create'));
        // return (redirect()->route('test'));
    }

}
