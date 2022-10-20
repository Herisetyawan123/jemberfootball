<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{


    


    public function create($category){
        return view("dashboard.post.tambah", ["category" => $category]);
    }

    public function store(Request $request){
        $data = $request->all();
        $post = Post::create([
            "title" => $data['title'],
            "description" => $data['description'],
            "place" => $data['place'],
            "date" => $data['date'],
            "category" => $data['category'],
        ]);

        foreach($request->file('gambar') as $gambar){
            $timeMd5 = md5(date("HismdY"));
            $newName = Str::slug(explode(".", $gambar->getClientOriginalName())[0]).$timeMd5.".".$gambar->getClientOriginalExtension();

            $path = $gambar->storeAs('public/content', $newName);
            $link = Storage::url($path);
            Photo::create([
                "path" => config('app.url').$link,
                "post_id" => $post->id
            ]);
            // array_push($content, config('app.url').$link);
        }

        return redirect()->route("pertandingan.index");
    }



}
