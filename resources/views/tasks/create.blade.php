@extends('layouts.app')

@section('title', 'Create Task')

@section('content')
    <div class="mb-4">
        <a href="{{ route('tasks.index') }}" class="button button-secondary">
            ← Back to Task List
        </a>
    </div>

    <div class="card">
        <h1>Create New Task</h1>

        @if ($errors->any())
            <div class="alert alert-error">
                <ul style="list-style-position: inside;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="title">Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title') }}" 
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
                >{{ old('description') }}</textarea>
            </div>

            <div style="display: flex; gap: 1rem;">
                <button type="submit" class="button button-primary">
                    Create Task
                </button>
                <a href="{{ route('tasks.index') }}" class="button button-secondary">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection