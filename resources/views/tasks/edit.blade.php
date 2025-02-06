@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <div class="mb-4">
        <a href="{{ route('tasks.index') }}" class="button button-secondary">
            ← Back to Task List
        </a>
    </div>

    <div class="card">
        <h1>Edit Task</h1>

        @if ($errors->any())
            <div class="alert alert-error">
                <ul style="list-style-position: inside;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="title">Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title', $task->title) }}" 
                    placeholder="Enter task title"
                    required
                >
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea 
                    id="description" 
                    name="description" 
                    rows="4" 
                    placeholder="Enter task description (optional)"
                >{{ old('description', $task->description) }}</textarea>
            </div>

            <div class="form-group" style="margin-bottom: 2rem;">
                <label class="checkbox-wrapper" style="display: flex; align-items: center; cursor: pointer;">
                    <input 
                        type="checkbox" 
                        id="is_completed" 
                        name="is_completed" 
                        value="1" 
                        {{ $task->is_completed ? 'checked' : '' }}
                        style="margin-right: 0.5rem; width: auto;"
                    >
                    <span style="color: #4a5568;">Mark as completed</span>
                </label>
            </div>

            <div style="display: flex; gap: 1rem;">
                <button type="submit" class="button button-primary">
                    Update Task
                </button>
                <a href="{{ route('tasks.index') }}" class="button button-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection