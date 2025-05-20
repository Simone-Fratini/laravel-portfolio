<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">My Projects</h1>
            <a href="{{ route('admin.projects.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                New Project
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $project->title }}</h2>
                        <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 100) }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">
                                {{ $project->start_date }} - {{ $project->end_date ?? 'In progress' }}
                            </span>
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.projects.edit', $project->id) }}" 
                                   class="text-blue-500 hover:text-blue-600 transition-colors">
                                    Edit
                                </a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" 
                                            class="text-red-500 hover:text-red-600 transition-colors"
                                            onclick="return confirm('Are you sure you want to delete this project?')">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
