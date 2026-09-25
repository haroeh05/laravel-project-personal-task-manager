<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>

    @vite('resources/css/app.css')
</head>

<body>
    
    <div class="home-container">

        <h1>Personal Task Manager</h1>

        <p>Manage your tasks efficiently.</p>

        <a href="{{ route('tasks.create') }}" class="home-button">
            Add Task
        </a>

        <a href="{{ route('tasks.index', ['action' => 'view']) }}" class="home-button">
            View Tasks
        </a>

        <a href="{{ route('tasks.index', ['action' => 'edit']) }}" class="home-button">
            Edit Task
        </a>

        <a href="{{ route('tasks.index', ['action' => 'delete']) }}" class="home-button">
            Delete Task
        </a>

        <a href="{{ route('tasks.index', ['action' => 'status']) }}" class="home-button">
            Update Status
        </a>

    </div>

</body>
</html>