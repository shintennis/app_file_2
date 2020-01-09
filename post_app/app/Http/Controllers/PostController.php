<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->get();

        return view('index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required'
        ]);
            $post = new Post;
            $user = \Auth::user();
            $post->content = $request->content;
            $post->image =  base64_encode(file_get_contents($request->image));
            $post->user_id = $user->id;
            $post->save();

        return redirect()->route('index');

    }

    public function profile()
    {
        return view('profile');
    }

    public function upload(Request $request)
    {
        if ($request->file('file')->isValid([])) {
            $path = $request->file->store('public');
            return view('profile')->with('filename', basename($path));
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors();
        }
    }

    public function edit(Request $request)  
    {  
        $post = Post::find($request->id);
        return view('edit',['post' => $post]);
    }

    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $content = $request->validate(['content' => 'required|max:500']);
        $post->fill($content)->save();

        return redirect()->route('index');
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        return redirect()->route('index');
    }
}
