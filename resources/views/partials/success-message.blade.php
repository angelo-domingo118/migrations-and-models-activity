@if(session('success'))
    <div class="bg-white border-l-4 border-green-500 shadow-sm rounded-lg p-6 mb-6 flex items-start">
        <div class="flex-shrink-0 mr-4">
            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </div>
        <div>
            <p class="text-gray-800 font-medium">{{ session('success') }}</p>
        </div>
    </div>
@elseif(session('info'))
    <div class="bg-white border-l-4 border-blue-500 shadow-sm rounded-lg p-6 mb-6 flex items-start">
        <div class="flex-shrink-0 mr-4">
            <svg class="h-6 w-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div>
            <p class="text-gray-800 font-medium">{{ session('info') }}</p>
        </div>
    </div>
@elseif(session('status'))
    <div class="bg-white border-l-4 border-indigo-500 shadow-sm rounded-lg p-6 mb-6 flex items-start">
        <div class="flex-shrink-0 mr-4">
            <svg class="h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
        </div>
        <div>
            <p class="text-gray-800 font-medium">{{ session('status') }}</p>
        </div>
    </div>
@endif