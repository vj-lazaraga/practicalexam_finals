<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('index')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Request $request)
    {
        $post = Post::find ($request->id);
        return view('edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        
        $validated = $request->validate([    
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::find($request->id);
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->save();

        return redirect()->route('index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Request $request)    
    {
        $post = Post::find($request->id);
        if ($post)
        {
            $post->delete();
        }

        return redirect()->route('index')->with('success', 'Post deleted successfully.');
    }
}