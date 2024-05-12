<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function create(StudentRequest $request)
{

      $validatedData = $request->validated();
     $student = Student::create($validatedData);
     return response()->json($student, 201);

    return response()->json($student,201);

}

    public function item($id)
    {
        $stud = Student::findOrFail($id);
        return response()->json($stud, 200);
    }

    public function list(Request $request)
    {
        $students = Student::paginate(5);
        return response()->json($students, 200);
    }

    public function update(StudentRequest $request, $id)
    {
        $stud = Student::findOrFail($id);
        $stud->update($request->all());
        return response()->json($stud, 202);
    }

    public function delete($id)
    {
        $stud = Student::findOrFail($id);
        $stud->delete();
        return response()->json(null, 204);
    }

}
