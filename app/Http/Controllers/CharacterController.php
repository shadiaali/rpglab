<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use Auth;
use App\Http\Controllers\Controller;
use App\User;

class CharacterController extends Controller
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

    public function create()
    {
        return view('createCharacter');
        
        
    }

    

    public function showMyCharacters()
    {
        //Show list of owned characters from the database and return to view
       
    }

    public function showAllCharacters()
    {
        //Show all characters from the database and return to view
        $characters = Character::all();
        return view('allCharacters', ['characters' => $characters]);
    }



    public function store(Request $request)
    {
        $character = new Character;
        $character->user_id = Auth::user()->id;
        $character->first_name = $request->get('first_name');
        $character->last_name = $request->get('last_name');

        $character->save();

        return 'Success';
    }

   
}
