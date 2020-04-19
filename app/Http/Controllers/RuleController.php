<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rule;



class RuleController extends Controller
{

    //get all rules on the index
    public function index()
    {
        //Show all rules from the database and return to view
        $rules = Rule::all();
        return view('rules.index',['rules'=>$rules]);
    }


    //return create rules view
    public function create()
    {
        return view('rules.create');
    }


    //store newly created rule
    public function store(Request $request)
    {
        //put new rule in db
        //form data is available in the request object
        $rule = new Rule();
        //get the value of input with the name specified
        $rule->rule = $request->input('rule');
        $rule->more_info = $request->input('more_info');
        
        $rule->save();
        return redirect()->route('rules.index')->with('info','Rule Added Successfully');
    }



    //delete rule
    public function destroy($id)
    {
        $rule = Rule::find($id);
        $rule->delete();
        return redirect()->route('rules.index');
    }

    

}