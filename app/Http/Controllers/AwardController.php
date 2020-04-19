<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;
use App\Character;
use Auth;
use App\Http\Controllers\Controller;
use App\User;

class AwardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    //send award to character view
    public function create()
    {       
        $characters = Character::all();

        return view('sendaward', ['characters' => $characters]);       
    }



    public function store(Request $request)
    {
        $award = new Award;
        $award->filename = $request->input('filename');
        $award->character_id = $request->input('character_id');

        $award->save();

        return view('myCharacters')->with('message','successfully');
        
    }


}
