<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Forum;
use App\Models\Discussion;

class FrontendController extends Controller
{
    public function index () {

        $categories = Category::with('forums')->get();
        return view ('welcome', \compact('categories'));

    }

    public function categoryOverview($id){
        $category = Category::find($id);

        return view('client.category-overview', \compact('category'));
    }

    public function forumOverview($id)
    {
        $forum = Forum::find($id);
        return view('client.forum-overview', \compact('forum'));
    }
}
