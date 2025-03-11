<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings!</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 p-0 flex justify-center items-center min-h-screen bg-gray-900 font-['Poppins'] text-white overflow-hidden">
    <div class="fixed top-0 left-0 w-full h-full z-0">
        <div class="absolute w-[100px] h-[100px] left-[10%] top-[20%] rounded-full bg-white/10 animate-float"></div>
        <div class="absolute w-[150px] h-[150px] right-[20%] bottom-[20%] rounded-full bg-white/10 animate-float delay-500"></div>
        <div class="absolute w-[80px] h-[80px] left-[50%] top-[50%] rounded-full bg-white/10 animate-float delay-1000"></div>
    </div>
    
    <div class="relative text-center p-8 bg-white/10 rounded-2xl backdrop-blur-lg shadow-lg hover:-translate-y-2.5 transition-transform duration-300 z-10">
        <div class="text-3xl mb-4">
            @foreach($emojis as $emoji)
                <span class="inline-block mx-2.5 animate-bounce">{{ $emoji }}</span>
            @endforeach
        </div>
        <h2 class="text-4xl mb-2 bg-gradient-to-r from-[#FF6B6B] to-[#4ECDC4] bg-clip-text text-transparent animate-pulse">{{ $greeting }}</h2>
        <h1 class="text-5xl font-semibold mt-4 mb-4 bg-gradient-to-r from-[#FFE66D] to-[#FF6B6B] bg-clip-text text-transparent inline-block">My name is {{ $name }}</h1>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translate(0, 0); }
            50% { transform: translate(100px, 100px); }
        }
        .animate-float {
            animation: float 20s linear infinite;
        }
        .delay-500 {
            animation-delay: 5s;
        }
        .delay-1000 {
            animation-delay: 10s;
        }
    </style>
</body>
</html>
