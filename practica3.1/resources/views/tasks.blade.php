<!-- resources/views/tasks.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <ul>
        @foreach($tasks as $task)
            <li @if($task['completed']) style="text-decoration: line-through;" @endif>
                {{ $task['title'] }}
            </li>
        @endforeach
    </ul>
</body>
</html>
