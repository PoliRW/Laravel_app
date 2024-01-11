<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Name;
use App\Models\Team;
use App\Models\Type;
use Egulias\EmailValidator\Warning\TLD;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NameController extends Controller
{
    //return view and type
    // public function index()
    // {


    //     $types =  Type::all();
    //     return view('layout.layout', compact('types'));
    // }
    public function create()
    {
        $types =  Type::all();
        return view('create', compact('types'));
    }
    public function store()
    {

        $newName = request()->validate([
            'name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'types' => 'required'

        ]);

        $name = Name::firstOrCreate([
            'name' => $newName['name'],
            'last_name' => $newName['last_name'],
            'type_id' => $newName['types']
        ]);

        return (redirect()->route('name.create')->with('success', 'Vytvořeno a úspěšně uloženo !'));
        // zapisvam i otivam na stranica updejit   
    }
    public function edit(){
        
        $names=Name::where('type_id', );
        return;
    }




    //from model team get team name=team_id into table name



    public function update(Name $name, Team $team)
    {
        $newName = request()->validate([
            'name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'types' => 'required',
            'team_id' => 'required'
        ]);

        $name->update([
            'name' => $newName['name'],
            'last_name' => $newName['last_name'],
            'type_id' => $newName['types'],
            'team_id' => $newName['name_team']
        ]);
        // pro update potrebuju vytahnot jmane jdno typu

    }
}
