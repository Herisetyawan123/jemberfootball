<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class MeetController extends Controller
{
    public function index(){
        $posts = Post::where("category", "meeting")->get();
        return view("dashboard.meeting.index", ["posts" => $posts]);
    }
}
