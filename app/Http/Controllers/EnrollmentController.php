<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Enrollment;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
   /**
    * Display a listing of the resource.
    */
   public function index(): View
   {
      $enrollments = Enrollment::all();
      return view('enrollment.index')->with('enrollments', $enrollments);
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create(): View
   {

      $batches = Batch::pluck('name', 'id');
      $students = Student::pluck('name', 'id');
      return view('enrollment.create', compact('batches', 'students'));
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request): RedirectResponse
   {
      $input = $request->all();
      Enrollment::create($input);
      return redirect('/enrollment')->with('flash_message', 'Enrollment Added!');
   }

   /**
    * Display the specified resource.
    */
   public function show(string $id): View
   {
      $enroll = Enrollment::find($id);
      return view('enrollment.show')->with('enrollments', $enroll);
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(string $id): View
   {
      $enroll = Enrollment::find($id);
      return view('enrollment.edit')->with('enrollments', $enroll);
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, string $id): RedirectResponse
   {
      $course = Enrollment::find($id);
      $input = $request->all();
      $course->update($input);
      return redirect('enrollment')->with('flash_message', 'Enrollment Updated!');
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id): RedirectResponse
   {
      Enrollment::destroy($id);
      return redirect('enrollment')->with('flash_message', 'Enrollment Deleted!');
   }
}
