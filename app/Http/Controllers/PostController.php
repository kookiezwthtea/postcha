<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function deletePost(Post $post) {
        if (auth()->user()->id === $post['user_id']) {
            $post->delete();
            if ($post->photo) {
                Storage::delete('public/' . $post->photo);
            }
        }
        return redirect('/');
    }

    public function actuallyUpdatePost(Post $post, Request $request) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        }
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'photo' => 'nullable|image',
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos','public');
            $incomingFields['photo'] = $photoPath;
        }
        $post->update($incomingFields);
        return redirect('/');
    }

    public function showEditScreen(Post $post) {
        if (auth()->user()->id !== $post['user_id']) {
            return redirect('/');
        }
        return view('edit-post', ['post' => $post]);
    }

    public function createPost(Request $request) {
        // Validate incoming fields
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'photo' => 'nullable|image',
        ]);
    
        $validatedData['title'] = strip_tags($validatedData['title']);
        $validatedData['body'] = strip_tags($validatedData['body']);
        $validatedData['user_id'] = auth()->id();
    
        // Handle photo upload if present
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos','public');
            $validatedData['photo'] = $photoPath;
        }
        Post::create($validatedData);
        return redirect('/');
    }
    
}