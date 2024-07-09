<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;

class EnrollmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        Enrollment::create([
            'user_id' => auth()->id(),
            'course_id' => $validated['course_id'],
        ]);

        return redirect()->route('courses.show', $validated['course_id']);
    }
}

