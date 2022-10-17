<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
        $match = Post::with('photos')->where('category', 'match')->get();  
        $meeting = Post::with('photos')->where('category', 'meeting')->get();   

        $data = [
            'match' => $match,
            'parent_meetings' => $meeting,
        ];
        return new PostResource(true, 'Data Landing page', $data);
    }




    public function show($id)
    {
        //
    }

    
}
