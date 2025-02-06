@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <div class="mb-4">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <h1>Task List</h1>
            <a href="{{ route('tasks.create') }}" class="button button-primary">
                + Create New Task
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success fade-in">
            {{ session('success') }}
        </div>
    @endif

    @forelse($tasks as $task)
        <div class="card">
            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                <div>
                    <h3 style="color: #2d3748; font-size: 1.25rem; margin-bottom: 0.5rem;">
                        <a href="{{ route('tasks.show', $task) }}" style="text-decoration: none; color: inherit;">
                            {{ $task->title }}
                        </a>
                    </h3>
                    <p class="text-gray">{{ $task->description ?? 'No description' }}</p>
                </div>
                <span class="badge {{ $task->is_completed ? 'badge-success' : 'badge-warning' }}">
                    {{ $task->is_completed ? 'Completed' : 'In Progress' }}
                </span>
            </div>

            <div style="display: flex; gap: 0.5rem; margin-top: 1rem;">
                <a href="{{ route('tasks.show', $task) }}" class="button button-secondary">View</a>
                <a href="{{ route('tasks.edit', $task) }}" class="button button-primary">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button button-danger" 
                            onclick="return confirm('Are you sure you want to delete this task?')">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @empty
        <div class="card" style="text-align: center;">
            <p class="text-gray">No tasks found. Create your first task to get started!</p>
            <a href="{{ route('tasks.create') }}" class="button button-primary" style="margin-top: 1rem;">
                Create First Task
            </a>
        </div>
    @endforelse
@endsection