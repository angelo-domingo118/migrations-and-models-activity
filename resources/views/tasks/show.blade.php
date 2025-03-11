@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="mb-6">
        <a href="{{ route('tasks.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg transition-colors">
            <span class="mr-1">←</span> Back to Task List
        </a>
    </div>

    <div class="bg-white rounded-lg shadow-sm p-6">
        <div class="flex justify-between items-start mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">{{ $task->title }}</h1>
            <span class="px-3 py-1 rounded-full text-sm font-medium {{ $task->is_completed ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                {{ $task->is_completed ? 'Completed' : 'In Progress' }}
            </span>
        </div>

        <div class="mb-8">
            <h3 class="text-lg font-medium text-gray-700 mb-2">Description</h3>
            <p class="text-gray-800 leading-relaxed">
                {{ $task->description ?? 'No description provided.' }}
            </p>
        </div>

        <div class="text-sm text-gray-600 border-t border-gray-200 pt-4">
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="font-medium mb-1">Created:</p>
                    <p>{{ $task->created_at->format('F j, Y, g:i a') }}</p>
                </div>
                <div>
                    <p class="font-medium mb-1">Last Updated:</p>
                    <p>{{ $task->updated_at->format('F j, Y, g:i a') }}</p>
                </div>
            </div>
        </div>

        <div class="flex gap-4 mt-8">
            <a href="{{ route('tasks.edit', $task) }}" class="px-6 py-2.5 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg transition-colors">
                Edit Task
            </a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-6 py-2.5 bg-red-500 hover:bg-red-600 text-white font-medium rounded-lg transition-colors"
                        onclick="return confirm('Are you sure you want to delete this task?')">
                    Delete Task
                </button>
            </form>
        </div>
    </div>
@endsection
