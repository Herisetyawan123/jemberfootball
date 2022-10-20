<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class MatchController extends Controller
{
    public function index(){
        $posts = Post::where("category", "match")->get();
        return view("dashboard.pertandingan.index", ["posts" => $posts]);
    }

    public function detail($id){
        return view('dashboard.pertandingan.detail');
    }

    public function delete($id){
        Photo::where('post_id', $id)->delete();
        Post::destroy($id);
        return back();
    }

}
