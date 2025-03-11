<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Task Manager</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 font-sans text-gray-800 min-h-screen">
    <div class="max-w-4xl mx-auto p-8 animate-[fadeIn_0.3s_ease-in]">
        @yield('content')
    </div>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</body>
</html>
