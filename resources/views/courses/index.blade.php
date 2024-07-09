<!-- resources/views/courses/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Courses</h1>
        <a href="{{ route('courses.create') }}">Create New Course</a>
        <ul>
            @foreach ($courses as $course)
                <li>
                    <a href="{{ route('courses.show', $course->id) }}">{{ $course->title }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
