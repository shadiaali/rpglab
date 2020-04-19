<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Award;
use App\Character;
use Auth;
use App\Http\Controllers\Controller;
use App\User;
use Webdevmatics\Chatter\Models\Models;
use Webdevmatics\Chatter\Models\Category;


class CategoryController extends Controller
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
        $categories = Category::all();

        return view('addCategory', ['categories' => $categories]);       
    }



    public function store(Request $request)
    {
        $category = new Category;
        $category->parent_id = $request->input('parent_id');
        $category->order = $request->input('order');
        $category->name = $request->input('name');
        $category->color = $request->input('color');
        $category->slug = $request->input('slug');


        $category->save();

        return view('addCategory')->with('message','successfully added');
        
    }

    


}
