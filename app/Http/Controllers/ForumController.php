<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Forum; 
use App\Models\Category;

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

    public function edit($id){
        $forum = Forum::find($id);
        $categories = Category::latest()->get();

        return view('admin.pages.edit_forum', compact('forum','categories'));
    }

    public function update(Request $request, $id){
        $forum = Forum::find($id);
        $forum->update($request->all());
        Session::flash('message', 'forum atualizado com sucesso');
        Session::flash('alert-class', 'alert-success');
        return back();
    }

    public function destroy($id){
        $forum = Forum::find($id);
        $forum->delete();
        Session::flash('message', 'forum apagado com sucesso');
        Session::flash('alert-class', 'alert-success');
        return back();
    }
    
    
}
