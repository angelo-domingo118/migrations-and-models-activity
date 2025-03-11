@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <div class="mb-6">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-semibold text-gray-800">Task List</h1>
            <a href="{{ route('tasks.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg transition-colors">
                <span class="mr-1">+</span> Create New Task
            </a>
        </div>
    </div>

    @include('partials.success-message')

    @forelse($tasks as $task)
        <div class="bg-white rounded-lg shadow-sm p-6 mb-4 hover:shadow-md transition-shadow">
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="text-xl font-medium text-gray-800 mb-2">
                        <a href="{{ route('tasks.show', $task) }}" class="hover:text-blue-600 transition-colors">
                            {{ $task->title }}
                        </a>
                    </h3>
                    <p class="text-gray-600">{{ $task->description ?? 'No description' }}</p>
                </div>
                <span class="px-3 py-1 rounded-full text-sm font-medium {{ $task->is_completed ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                    {{ $task->is_completed ? 'Completed' : 'In Progress' }}
                </span>
            </div>

            <div class="flex gap-2 mt-4">
                <a href="{{ route('tasks.show', $task) }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white font-medium rounded-lg transition-colors">View</a>
                <a href="{{ route('tasks.edit', $task) }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg transition-colors">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-medium rounded-lg transition-colors"
                            onclick="return confirm('Are you sure you want to delete this task?')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @empty
        <div class="bg-white rounded-lg shadow-sm p-8 text-center">
            <p class="text-gray-600 mb-4">No tasks found. Create your first task to get started!</p>
            <a href="{{ route('tasks.create') }}" class="inline-block px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-medium rounded-lg transition-colors">
                Create First Task
            </a>
        </div>
    @endforelse
@endsection
