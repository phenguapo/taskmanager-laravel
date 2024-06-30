@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Tasks</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Completed</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-{{ $task->completed ? 'success' : 'danger' }}">
                            {{ $task->completed ? 'Yes' : 'No' }}
                        </button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm text-light">Edit</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><img src="https://api.iconify.design/ion/trash.svg?height=18" aria-hidden="true"></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('tasks.create') }}" class="btn btn-success mb-3 text-light">Create Task!</a>
</div>


<!-- Button to toggle background color -->
<div class="text-center mt-5">
    <button id="toggleButton" onclick="toggleBackgroundColor()" class="btn btn-dark" style="position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%);">
        Dark Mode
    </button>
</div>

<!-- JavaScript to toggle background color -->
<script>
function toggleBackgroundColor() {
    var body = document.body;
    var button = document.getElementById('toggleButton');
    var isBlack = body.style.backgroundColor === 'rgb(13, 12, 12)';
    var formText = document.querySelectorAll('table th, table td, h1, a.btn');

    if (isBlack) {
        body.style.backgroundColor = 'white';
        button.textContent = 'Dark Mode';
        h1 = 'black';
        formText.forEach(function(element) {
            element.style.color = 'rgb(13, 12, 12)';

        });


    } else {
        body.style.backgroundColor = 'rgb(13, 12, 12)';
        
        button.textContent = 'Light Mode';
        h1 = 'white';

        formText.forEach(function(element) {
            element.style.color = 'white';

        });

    }
}
</script>


@endsection

