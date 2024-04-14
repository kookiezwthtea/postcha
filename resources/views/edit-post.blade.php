@extends('layout')
@section('content')
@auth
@include('navbar')

<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg overflow-hidden my-8">
    <div class="bg-gradient-to-r from-blue-500 to-purple-500 py-4 px-6">
        <h1 class="text-3xl font-bold text-white">Edit Post</h1>
    </div>
    <form id="editPostForm" action="/edit-post/{{$post->id}}" method="POST" class="p-6" enctype="multipart/form-data" onsubmit="return confirm('Are you sure you want to update your post?');">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}" class="w-full border-b border-gray-200 focus:outline-none focus:border-blue-500 mb-4 text-xl font-semibold">
        <textarea name="body" class="w-full border border-gray-200 rounded-md px-4 py-2 mb-4 focus:outline-none focus:border-blue-500" rows="6">{{$post->body}}</textarea>
        <div class="mb-4">
            <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
            <input type="file" name="photo" id="photo" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
        <button type="submit" class="bg-gradient-to-r from-blue-500 to-purple-500 hover:from-blue-600 hover:to-purple-600 text-white font-bold py-2 px-4 rounded-md transition-colors duration-300">Save Changes</button>
    </form>
</div>
@else
@include('login')
@endauth

@endsection


