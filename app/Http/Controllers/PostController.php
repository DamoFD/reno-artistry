<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show all posts
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    // Show single post
    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    // Show Create Form
    public function create() {
        return view('posts.create');
    }

    // Store Listing Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'image' => 'required',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('uploads', 'public');
        }

        Post::create($formFields);

        return redirect('/')->with('message', 'Post created successfully!');
    }

    // Show Edit Form
    public function edit(Post $post) {
        return view('posts.edit', ['post' => $post]);
    }

    // Update Post Data
    public function update(Request $request, Post $post) {
        $formFields = $request->validate([
            'title' => 'required',
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('uploads', 'public');
        }

        $post->update($formFields);

        return back()->with('message', 'Post updated successfully!');
    }

    // Delete Post
    public function destroy(Post $post) {
        $post->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }
}
