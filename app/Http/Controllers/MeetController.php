<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;

class MeetController extends Controller
{
    public function index(){
        $posts = Post::where("category", "meeting")->get();
        return view("dashboard.meeting.index", ["posts" => $posts]);
    }

    public function detail($id){
        return view('dashboard.meeting.detail');
    }

    public function delete($id){
        Photo::where('post_id', $id)->delete();
        Post::destroy($id);
        return back();
    }
}
