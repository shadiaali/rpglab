<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Award;

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

    

    public function myCharacters()
    {
        //Show list of owned characters from the database and return to view
        return view('myCharacters');
       
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
        $character->character_name = $request->get('character_name');
        

        $character->save();

        return redirect('character')->with('success', trans('laravelusers::laravelusers.messages.update-success'));
    }

    //character details/profile
    public function details($id)
    {
        //$character = Character::find($id);
        
        
        //return view('characterProfile',['character'=> $character]);

        
        $character = Character::find($id);

        $character->load('awards')->get();

        return view('characterProfile', compact('character'));
    }



    
    public function editCharacter($id)
    {
        $character = Character::find($id);
        return view('editCharacter',['character'=> $character]);
    } 

    

    
    public function updateCharacter(Request $request)
    {


        //$user = Auth::user();
        //$character = Character::find($id);

        $character = Character::find($request->input('id'));

            $character->character_name = $request->character_name;
            $character->save(); 

            return redirect('character')->with('success', trans('laravelusers::laravelusers.messages.update-success'));
            
        }  

            
    public function destroyCharacter($id)
    {
        $character = Character::find($id);
        $character->delete();
        return redirect('character')->with('success', trans('laravelusers::laravelusers.messages.delete-success'));
    }
        

}
