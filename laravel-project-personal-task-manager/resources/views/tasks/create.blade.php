<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>

    @vite('resources/css/app.css')
</head>

<body>

    <div class="form-container">

        <h1>Add Task</h1>

        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tasks.store') }}" method="POST">

            @csrf

            <div class="form-group">
                <label>Task Name</label>

                <input
                    type="text"
                    name="task_name"
                    required
                >
            </div>


            <div class="form-group">
                <label>Description</label>

                <textarea name="description"></textarea>
            </div>


            <div class="form-group">
                <label>Status</label>

                <select name="status">

                    <option value="Pending">
                        Pending
                    </option>

                    <option value="Completed">
                        Completed
                    </option>

                </select>
            </div>


            <div class="form-group">
                <label>Due Date</label>

                <input
                    type="date"
                    name="due_date"
                >
            </div>


            <button
                type="submit"
                class="submit-button"
            >
                Add Task
            </button>

        </form>


        <a href="/" class="back-button">
            ← Back to Home
        </a>

    </div>

</body>
</html>