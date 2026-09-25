<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
    @vite('resources/css/app.css')
</head>

<body>

    <h1>
        @if($action === 'edit')
            Edit Tasks
        @elseif($action === 'delete')
            Delete Tasks
        @elseif($action === 'status')
            Update Task Status
        @else
            View Tasks
        @endif
    </h1>


    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
    <div class="success-message">
        {{ session('success') }}
    </div>
    @endif


    <table class="task-table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Due Date</th>

                {{-- Only show Actions for Edit/Delete/Status --}}
                @if($action !== 'view')
                    <th>Actions</th>
                @endif
            </tr>
        </thead>


        <tbody>

            @forelse($tasks as $task)

                <tr>
                    <td>{{ $task->id }}</td>

                    <td>{{ $task->task_name }}</td>

                    <td>{{ $task->description }}</td>

                    <td>{{ $task->status }}</td>

                    <td>
                        {{ $task->due_date ?? 'No due date' }}
                    </td>


                    {{-- ACTIONS --}}
                    @if($action !== 'view')

                        <td>

                            {{-- EDIT --}}
                            @if($action === 'edit')

                                <a href="{{ route('tasks.edit', $task) }}">
                                    <button class="edit-button">
                                        Edit
                                    </button>
                                </a>


                            {{-- DELETE --}}
                            @elseif($action === 'delete')

                                <form
                                    action="{{ route('tasks.destroy', $task) }}"
                                    method="POST"
                                    style="display:inline;"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="delete-button"
                                        onclick="return confirm('Are you sure you want to delete this task?')"
                                    >
                                        Delete
                                    </button>

                                </form>


                            {{-- UPDATE STATUS --}}
                            @elseif($action === 'status')

                                <form
                                    action="{{ route('tasks.updateStatus', $task) }}"
                                    method="POST"
                                    style="display:inline;"
                                >

                                    @csrf
                                    @method('PATCH')

                                    <button
                                        type="submit"
                                        class="status-button"
                                    >

                                        @if($task->status === 'Pending')
                                            Complete
                                        @else
                                            Set Pending
                                        @endif

                                    </button>

                                </form>

                            @endif

                        </td>

                    @endif

                </tr>

            @empty

                <tr>
                    <td
                        colspan="{{ $action === 'view' ? 5 : 6 }}"
                        style="text-align:center;"
                    >
                        No tasks found.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>


    <a href="/" class="back-button">
    ← Back to Home
    </a>

</body>
</html>