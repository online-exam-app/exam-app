<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Students;


class StudentsController extends Controller
{
    //
     //List all Students in a Table and Pass Students to the Index Component
     public function index(){
        $students = Students::orderBy('created_at', 'ASC')->get();
        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new patient.
     */
    public function create()
    {
    
        return view('admin.students.register_students');
    }

    /**
     * Store a newly created patient in storage.
     */
    public function store(Request $request)
    {
        // $purchaseData = $request->except('purchase_date'); // Exclude 'purchase_date' from the purchase data
        Students::create($request->all());
        return redirect()->route('students.create')->with('success', 'Students Registered Successfully');
    }
    

     
  /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Students::findOrFail($id);
  
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Students::findOrFail($id);
  
        $student->update($request->all());
  
        return redirect()->route('students')->with('success', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Students::findOrFail($id);
  
        $student->delete();
  
        return redirect()->route('students')->with('success', 'Students Deleted Successfully');
    }
}
