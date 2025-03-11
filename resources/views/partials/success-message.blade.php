@if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-6 animate-[fadeIn_0.3s_ease-in]">
        {{ session('success') }}
        <div class="mt-2">
            @for ($i = 0; $i < 5; $i++)
                <span class="text-yellow-400 text-xl">★</span>
            @endfor
        </div>
    </div>
@elseif(session('info'))
    <div class="bg-blue-100 text-blue-800 p-4 rounded-lg mb-6 animate-[fadeIn_0.3s_ease-in]">
        {{ session('info') }}
    </div>
@elseif(session('status'))
    <div class="bg-indigo-100 text-indigo-800 p-4 rounded-lg mb-6 animate-[fadeIn_0.3s_ease-in]">
        {{ session('status') }}
    </div>
@endif
