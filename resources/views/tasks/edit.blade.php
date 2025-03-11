@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <div class="mb-6">
        <a href="{{ route('tasks.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg transition-colors">
            <span class="mr-1">←</span> Back to Task List
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-sm p-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Edit Task</h1>

        @include('partials.error-messages')

        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title', $task->title) }}" 
                    placeholder="Enter task title"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                >
            </div>

            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4" 
                    placeholder="Enter task description (optional)"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                >{{ old('description', $task->description) }}</textarea>
            </div>

            <div class="mb-8">
                <label class="inline-flex items-center cursor-pointer">
                    <input 
                        type="checkbox" 
                        id="is_completed" 
                        name="is_completed" 
                        value="1" 
                        {{ $task->is_completed ? 'checked' : '' }}
                        class="w-4 h-4 text-blue-500 border-gray-300 rounded focus:ring-blue-500 transition-colors"
                    >
                    <span class="ml-2 text-gray-700">Mark as completed</span>
                </label>
            </div>

            <div class="flex gap-4">
                <button type="submit" class="px-6 py-2.5 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg transition-colors">
                    Update Task
                </button>
                <a href="{{ route('tasks.index') }}" class="px-6 py-2.5 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg transition-colors">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
