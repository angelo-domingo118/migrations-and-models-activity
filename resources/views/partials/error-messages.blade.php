@if ($errors->any())
    <div class="bg-white border-l-4 border-red-500 shadow-sm rounded-lg p-6 mb-6">
        <ul class="space-y-2">
            @foreach ($errors->all() as $error)
                <li class="flex items-center">
                    <svg class="h-6 w-6 text-red-600 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-gray-800 font-medium">{{ $error }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@elseif (session('error'))
    <div class="bg-white border-l-4 border-red-500 shadow-sm rounded-lg p-6 mb-6 flex items-start">
        <div class="flex-shrink-0 mr-4">
            <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-800 font-medium">{{ session('error') }}</p>
        </div>
    </div>
@elseif (session('warning'))
    <div class="bg-white border-l-4 border-yellow-500 shadow-sm rounded-lg p-6 mb-6 flex items-start">
        <div class="flex-shrink-0 mr-4">
            <svg class="h-6 w-6 text-yellow-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-800 font-medium">{{ session('warning') }}</p>
        </div>
    </div>
@endif