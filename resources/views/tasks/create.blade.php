@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <div class="mb-6">
        <a href="{{ route('tasks.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg transition-colors">
            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Tasks
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-sm p-6 md:p-8 border-t-4 border-indigo-500">
        <h1 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
            <svg class="h-8 w-8 text-indigo-600 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Create New Task
        </h1>

        @include('partials.error-messages')

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                        </svg>
                    </div>
                    <input 
                        type="text" 
                        id="title" 
                        name="title" 
                        value="{{ old('title') }}" 
                        placeholder="Enter task title"
                        required
                        class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
                    >
                </div>
                <p class="mt-1 text-xs text-gray-500">Choose a clear and concise title for your task</p>
            </div>

            <div class="mb-8">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <div class="relative rounded-md shadow-sm">
                    <div class="absolute top-3 left-3 flex items-start pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </div>
                    <textarea 
                        id="description" 
                        name="description" 
                        rows="5" 
                        placeholder="Enter task description (optional)"
                        class="pl-10 w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors"
                    >{{ old('description') }}</textarea>
                </div>
                <p class="mt-1 text-xs text-gray-500">Provide any additional details about the task</p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 items-center">
                <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg transition-colors shadow-sm flex items-center justify-center">
                    <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Create Task
                </button>
                <a href="{{ route('tasks.index') }}" class="w-full sm:w-auto px-6 py-3 border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 font-medium rounded-lg transition-colors flex items-center justify-center">
                    Cancel
                </a>
            </div>
        </form>
    </div>

    <!-- Task Creation Tips -->
    <div class="mt-8 bg-indigo-50 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-indigo-900 mb-4 flex items-center">
            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Task Creation Tips
        </h3>
        <ul class="list-disc list-inside text-sm text-indigo-800 space-y-2">
            <li>Create clear, actionable task titles</li>
            <li>Break down complex tasks into smaller, manageable ones</li>
            <li>Include any relevant details in the description</li>
            <li>Consider adding due dates or priority levels (coming soon)</li>
        </ul>
    </div>
@endsection