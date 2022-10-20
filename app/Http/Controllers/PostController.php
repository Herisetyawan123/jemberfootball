<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::where("category", "match")->get();
        return view("dashboard.pertandingan.index", ["posts" => $posts]);
    }
    
    public function meet(){
        $posts = Post::where("category", "meeting")->get();
        return view("dashboard.meeting.index", ["posts" => $posts]);
    }

    public function create($category){
        return view("dashboard.post.tambah", ["category" => $category]);
    }

    public function store(Request $request){
        $data = $request->all();
        // dd($data);
        Post::create([
            "title" => $data['title'],
            "description" => $data['description'],
            "place" => $data['place'],
            "date" => $data['date'],
            "category" => $data['category'],
        ]);

        return back();
    }


}
