<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Task</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Task Details</h1>

            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                Back to Tasks
            </a>
        </div>

        <div class="card">
            <h2>{{ $task->task_name }}</h2>

            <p>
                <strong>Description:</strong>
                {{ $task->description ?: 'No description' }}
            </p>

            <p>
                <strong>Status:</strong>
                {{ $task->status }}
            </p>

            <p>
                <strong>Due Date:</strong>
                {{ $task->due_date->format('F d, Y') }}
            </p>

            <div class="actions">
                <a href="{{ route('tasks.edit', $task) }}"
                   class="btn btn-primary">
                    Edit Task
                </a>
            </div>
        </div>
    </div>
</body>
</html>