<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-8">
                    <div class="flex justify-between items-start mb-6">
                        <h1 class="text-3xl font-bold text-gray-800">{{ $project->title }}</h1>
                        <a href="{{ route('admin.projects.index') }}" 
                           class="text-blue-500 hover:text-blue-600 transition-colors">
                            ← Torna alla lista
                        </a>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-gray-600 font-medium">Data di inizio:</span>
                            <span class="text-gray-800">{{ $project->start_date }}</span>
                        </div>

                        <div class="flex items-center space-x-2">
                            <span class="text-gray-600 font-medium">Data di fine:</span>
                            <span class="text-gray-800">{{ $project->end_date ?? 'In corso' }}</span>
                        </div>

                        <div class="mt-6">
                            <h2 class="text-xl font-semibold text-gray-800 mb-3">Descrizione</h2>
                            <p class="text-gray-700 leading-relaxed">{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
