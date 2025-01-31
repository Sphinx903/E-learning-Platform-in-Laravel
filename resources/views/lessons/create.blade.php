@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Lesson to {{ $course->title }}</h1>
    <form method="POST" action="{{ route('lessons.store', $course->id) }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Lesson</button>
    </form>
</div>
@endsection
