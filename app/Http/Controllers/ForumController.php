<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Forum; 
use App\Models\category;

class ForumController extends Controller
{
    //
    public function index(){
        $forums = Forum::latest()->paginate(10);
        return view('admin.pages.forums', compact('forums'));
    }


    public function create(){
        $categories = Category::latest()->get();
        return view('admin.pages.new_forum', compact('categories'));
    }

    public function store(Request $request){
        Forum::create($request->all());

        Session::flash('message', 'forum criado com sucesso');
        Session::flash('alert-class', 'alert-success');
        return back();
    }
}
