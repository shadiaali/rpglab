<?php

namespace Webdevmatics\Chatter\Controllers;

use Auth;
use Webdevmatics\Chatter\Helpers\ChatterHelper as Helper;
use Webdevmatics\Chatter\Models\Models;
use Illuminate\Routing\Controller as Controller;
use App\Http\Controllers\CharacterController;
use App\User as User;
use App\Character as Character;

class ChatterController extends Controller
{
    public function index($slug = '')
    {
        $pagination_results = config('chatter.paginate.num_of_results');

    

        $discussions = Models::discussion()->with('user')->with('character')->with('post')->with('postsCount')->with('category')->orderBy(config('chatter.order_by.discussions.order'), config('chatter.order_by.discussions.by'));
        if (isset($slug)) {
            $category = Models::category()->where('slug', '=', $slug)->first();
            
            if (isset($category->id)) {
                $current_category_id = $category->id;
                $discussions = $discussions->where('chatter_category_id', '=', $category->id);
            } else {
                $current_category_id = null;
            }
        }
        
        $discussions = $discussions->paginate($pagination_results);
        
        $categories = Models::category()->get();
        $categoriesMenu = Helper::categoriesMenu(array_filter($categories->toArray(), function ($item) {
            return $item['parent_id'] === null;
        }));
        
        $chatter_editor = config('chatter.editor');
        
        if ($chatter_editor == 'simplemde') {
            // Dynamically register markdown service provider
            \App::register('GrahamCampbell\Markdown\MarkdownServiceProvider');
        }
        $characters = Character::all();
        //return view('allCharacters', ['characters' => $characters]);
        $id = 'character_id';
        $character = Character::find($id);
        //$character->character_name = $request->get('character_name');
        
        return view('chatter::home', ['characters' => $characters, 'character'=> $character],compact('discussions', 'categories', 'categoriesMenu', 'chatter_editor', 'current_category_id'));
    }
    
    public function login()
    {
        if (!Auth::check()) {
            return \Redirect::to('/'.config('chatter.routes.login').'?redirect='.config('chatter.routes.home'))->with('flash_message', 'Please create an account before posting.');
        }
    }
    
    public function register()
    {
        if (!Auth::check()) {
            return \Redirect::to('/'.config('chatter.routes.register').'?redirect='.config('chatter.routes.home'))->with('flash_message', 'Please register for an account.');
        }
    }

    
}
