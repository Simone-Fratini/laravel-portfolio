<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$post->title}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-10">
        <a href="{{ route('posts.index') }}" class="inline-block mb-8 text-blue-600 hover:underline">
            &larr; Back to Posts
        </a>
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">{{$post->title}}</h1>
            <div class="flex items-center text-sm text-gray-600 mb-6">
                <span class="mr-4">By: {{$post->author}}</span>
                <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs">{{$post->category}}</span>
            </div>
            <div class="prose max-w-none text-gray-700 mb-6">
                {{($post->content)}}
            </div>
            @if(isset($post->created_at))
                <div class="text-right text-xs text-gray-400">
                    Published on {{$post->created_at->format('F j, Y')}}
                </div>
            @endif
        </div>
    </div>
</body>
</html>