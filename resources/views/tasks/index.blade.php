<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Tasks</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Daily Tasks</h1>

            <a href="{{ route('tasks.create') }}" class="btn btn-primary">
                + Add Task
            </a>
        </div>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if ($tasks->isEmpty())
            <div class="card">
                <p>No tasks yet.</p>
            </div>
        @else
            @foreach ($tasks as $task)
                <div class="card">
                    <h2>{{ $task->task_name }}</h2>

                    <p>
                        <strong>Description:</strong>
                        {{ $task->description ?: 'No description' }}
                    </p>

                    <p>
                        <strong>Due Date:</strong>
                        {{ $task->due_date->format('F d, Y') }}
                    </p>

                    <p>
                        <strong>Status:</strong>
                        {{ $task->status }}
                    </p>

                    <div class="actions">
                        <a href="{{ route('tasks.show', $task) }}"
                           class="btn btn-secondary">
                            View
                        </a>

                        <a href="{{ route('tasks.edit', $task) }}"
                           class="btn btn-primary">
                            Edit
                        </a>

                        <form action="{{ route('tasks.destroy', $task) }}"
                              method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn danger">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>