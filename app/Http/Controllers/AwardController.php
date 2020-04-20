<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
        $filename = $request->file('filename');
    $extension = $filename->getClientOriginalExtension();
    Storage::disk('public')->put($filename->getFilename().'.'.$extension,  File::get($filename));

        $award = new Award;
        //$award->filename = $request->input('filename');
        $award->character_id = $request->input('character_id');
        $award->mime = $filename->getClientMimeType();
        $award->original_filename = $filename->getClientOriginalName();
    $award->filename = $filename->getFilename().'.'.$extension;


        $award->save();

        
    
    

        return view('myCharacters',['award' => $award])->with('message','successfully');
        
    }

    public function showAllAwards()
    {
        
        $awards = Award::all();
        return view('allAwards', ['awards' => $awards]);
    }


}
