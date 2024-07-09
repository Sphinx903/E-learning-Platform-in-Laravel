@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Lesson: {{ $lesson->title }}</h1>
    <form method="POST" action="{{ route('lessons.update', [$course->id, $lesson->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $lesson->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $lesson->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Lesson</button>
    </form>
</div>
@endsection
