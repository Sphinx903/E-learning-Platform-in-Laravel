@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>

    <h3>Lessons</h3>
    <ul>
        @foreach($course->lessons as $lesson)
            <li>{{ $lesson->title }}</li>
        @endforeach
    </ul>

    <form method="POST" action="{{ route('enrollments.store') }}">
        @csrf
        <input type="hidden" name="course_id" value="{{ $course->id }}">
        <button type="submit" class="btn btn-success">Enroll</button>
    </form>
</div>
@endsection
