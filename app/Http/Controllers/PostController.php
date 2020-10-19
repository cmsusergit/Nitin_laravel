<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $post_list=post::orderBy('Post_date','DESC')->get();
        return view('Project',compact('post_list'));
    }

    public function show($id){
        $post1=post::findOrFail($id);
        return view('single',compact('post1'));
    }
}
