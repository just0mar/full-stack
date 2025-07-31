<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $classrooms= Classroom::with('user')->get();
        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
                return view('classrooms.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       $request->validate([
        'name' => 'required|string|max:255',
        'rool' => 'required|string|max:255',
    ]);

    Classroom::create([
        'name' => $request->name,
        'rool' => $request->rool,
        'user_id' => auth()->id(),
    ]);
       
        return redirect()->route('classrooms.index')->with('success', 'Classroom created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Classroom $classroom)
    {
        //
        return view('classrooms.show', compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit', compact('classroom'));
    }
    
    /**
     * Update the specified resource in storage.
    */
    public function update(Request $request, Classroom $classroom)
    {
        $classroom->update([
            'name' => $request->name,
            'rool' => $request->rool,
            'user_id' => auth()->id(),
        ]);
        
        return redirect()->route('classrooms.index')->with('success', 'Classroom updated successfully!');
    }
    
    /**
     * Remove the specified resource from storage.
    */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();
        return redirect()->route('classrooms.index')->with('success', 'Classroom deleted successfully!');
    }
}
