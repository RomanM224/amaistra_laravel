<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function store(Request $request){
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->img = $request->img;
        $post->text = $request->text;
        $post->save();
        return redirect()->back()->withSuccess('Новость Сохранена');
    }

    public function showAll(){
        $posts = Post::all();
        
        return view("post.showAll", ['posts' => $posts]);
    }
    
    public function showAllAdmin(){
        $posts = Post::all();
        
        return view("admin.post.showAll", ['posts' => $posts]);
    }

    public function showOne($id){
        $post = Post::find($id);
        
        return view("post.showOne", ['post' => $post]);
    }
    
    public function showOneAdmin($id){
        $post = Post::find($id);
        
        return view("admin.post.showOne", ['post' => $post]);
    }

    public function edit($id){
        $post = Post::find($id);
        
        return view("admin.post.edit", ['post' => $post]);
    }

    public function postEdit(Request $request){
        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'text' => 'required',
        ]);
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->img = $request->img;
        $post->text = $request->text;
        $post->save();
        return redirect()->back()->withSuccess('Новость Изменена');
    }

    public function delete($id) {
        $post = Post::find($id);
        $post->delete();
        $posts = Post::all();
        return redirect()->route('showAllPostsAdmin')->withSuccess('Новость Удалина');
    }
}
