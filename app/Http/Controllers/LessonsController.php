<?php


namespace App\Http\Controllers;


use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function getListLessons() {
        $lessons = Lesson::all();
        return response()->json($lessons);
    }
    public function createLesson(Request $request) {
        $inputData = $request->all();
        $lesson = Lesson::create($inputData);
        return response()->json([
            'lesson' => $lesson,
            'message' => 'Lesson created'
        ]);
    }
}
