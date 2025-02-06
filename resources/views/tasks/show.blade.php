@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="mb-4">
        <a href="{{ route('tasks.index') }}" class="button button-secondary">
            ← Back to Task List
        </a>
    </div>

    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1.5rem;">
            <h1 style="margin-bottom: 0;">{{ $task->title }}</h1>
            <span class="badge {{ $task->is_completed ? 'badge-success' : 'badge-warning' }}">
                {{ $task->is_completed ? 'Completed' : 'In Progress' }}
            </span>
        </div>

        <div style="margin-bottom: 2rem;">
            <h3 style="color: #4a5568; font-size: 1.1rem; margin-bottom: 0.5rem;">Description</h3>
            <p style="color: #2d3748; line-height: 1.6;">
                {{ $task->description ?? 'No description provided.' }}
            </p>
        </div>

        <div class="text-sm text-gray" style="border-top: 1px solid #e2e8f0; padding-top: 1rem;">
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                <div>
                    <p><strong>Created:</strong><br>
                    {{ $task->created_at->format('F j, Y, g:i a') }}</p>
                </div>
                <div>
                    <p><strong>Last Updated:</strong><br>
                    {{ $task->updated_at->format('F j, Y, g:i a') }}</p>
                </div>
            </div>
        </div>

        <div style="display: flex; gap: 1rem; margin-top: 2rem;">
            <a href="{{ route('tasks.edit', $task) }}" class="button button-primary">
                Edit Task
            </a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="button button-danger" 
                        onclick="return confirm('Are you sure you want to delete this task?')">
                    Delete Task
                </button>
            </form>
        </div>
    </div>
@endsection