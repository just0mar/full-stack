<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
class StudentController extends Controller
{
    //
    public function index()
    {
        $students = Student::with('user')->get();
        return view('student.index' , compact('students'));
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request){
        // dd($request);
        Student::create([
                 'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'age' => $request->age,
                'user_id'=>auth()->id()
        ]);
            // with to add a session
            return redirect()->route('student.index')->with('success', 'Student created successfully!');

    }
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'age' => $request->age,
        ]);
        return redirect()->route('student.index')->with('success', 'Student updated successfully!');
    }
    public function destroy($id){
        $student= Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index')->with('success', 'Student deleted successfully!');

    }
}
