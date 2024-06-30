<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager v1.0</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body >
    
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('tasks.index') }}">Task Manager v1.0</a>
            <a href="https://github.com/phenguapo"  class="navbar ml-auto text-light" >by phenguapo :)</a>
        </nav>
        <div class="container">
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>


