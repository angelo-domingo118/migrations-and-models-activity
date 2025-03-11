<!DOCTYPE html>
<html>
<head>
    <title>Raw Output Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">Output Test</h1>
        <div class="space-y-4">
            <div class="bg-gray-50 p-4 rounded-md">
                <h2 class="text-sm font-medium text-gray-600 mb-2">Escaped Output:</h2>
                <p class="text-gray-800">{{ $content }}</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-md">
                <h2 class="text-sm font-medium text-gray-600 mb-2">Raw Output:</h2>
                <p class="text-gray-800">{!! $content !!}</p>
            </div>
        </div>
    </div>
</body>
</html>
