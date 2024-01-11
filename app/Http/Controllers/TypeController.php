<?php

namespace App\Http\Controllers;

use App\Models\Name;
use App\Models\Type;
use Illuminate\Foundation\Http\Events\RequestHandled;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    //save types
    public function index()
    {
        //save types
        // view evry type
        Type::firstOrCreate(['types' => 'Závodník']);
        Type::firstOrCreate(['types' => 'Spolujezdec']);
        Type::firstOrCreate(['types' => 'Technik']);
        Type::firstOrCreate(['types' => 'Manažer']);
        Type::firstOrCreate(['types' => 'Fotograf']);
        $types = Type::all();

        return view('layout.layout', compact('types'));
    }
    public function list(Type $type)
    {
        //get type from DB evry name whit type_id 2 .Tipes ->id 2 get evry names
        // $type = Type::find(2);
        $types = Type::all();
        // $names=Name::find
        $names = Name::where('type_id', $type->id)->get();
        
        // $names = Name::where('type_id', $type->id)->get();
    
        return view('createTeam', compact('types','names'));
    }
    public function test(){
        
        $typeR = Type::find(2);
        $names=Name::where('type_id',$typeR->id)->get();
        dd($names);

    }

}
