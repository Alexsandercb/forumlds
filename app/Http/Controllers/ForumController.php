<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forum; 
use App\Models\Caregory;

class ForumController extends Controller
{
    //

    public function create(){
        $categories = Category::latest()->get();
        return view('admin.oages.new_forum');
    }
}
