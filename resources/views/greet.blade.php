<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #1a1a1a;
            font-family: 'Poppins', sans-serif;
            color: white;
            overflow: hidden;
        }

        .container {
            text-align: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }

        .emoji-container {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .emoji {
            display: inline-block;
            animation: floating 3s ease-in-out infinite;
            margin: 0 10px;
        }

        .emoji:nth-child(2) { animation-delay: 0.2s; }
        .emoji:nth-child(3) { animation-delay: 0.4s; }
        .emoji:nth-child(4) { animation-delay: 0.6s; }

        .greeting {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, #FF6B6B, #4ECDC4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: pulse 2s ease-in-out infinite;
        }

        .name {
            font-size: 3.5rem;
            font-weight: 600;
            margin: 1rem 0;
            position: relative;
            display: inline-block;
            background: linear-gradient(45deg, #FFE66D, #FF6B6B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: typewriter 2s steps(7) 1s forwards;
            white-space: nowrap;
            overflow: hidden;
            border-right: 4px solid #FFE66D;
        }

        /* Background animation */
        .background-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: floatShape 20s linear infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes typewriter {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes floatShape {
            0% { transform: translate(0, 0); }
            50% { transform: translate(100px, 100px); }
            100% { transform: translate(0, 0); }
        }

        /* Interactive hover effect */
        .container:hover {
            transform: translateY(-10px);
            transition: transform 0.3s ease;
        }

        /* Generate random shapes */
        .shape:nth-child(1) {
            width: 100px;
            height: 100px;
            left: 10%;
            top: 20%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 150px;
            height: 150px;
            right: 20%;
            bottom: 20%;
            animation-delay: 5s;
        }

        .shape:nth-child(3) {
            width: 80px;
            height: 80px;
            left: 50%;
            top: 50%;
            animation-delay: 10s;
        }
    </style>
</head>
<body>
    <div class="background-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
    <div class="container">
        <div class="emoji-container">
            @foreach($emojis as $emoji)
                <span class="emoji">{{ $emoji }}</span>
            @endforeach
        </div>
        <h2 class="greeting">{{ $greeting }}</h2>
        <h1 class="name">My name is {{ $name }}</h1>
    </div>
</body>
</html>