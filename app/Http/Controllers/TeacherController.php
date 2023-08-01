<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Teacher;
use Illuminate\View\View;

class TeacherController extends Controller
{

   public function index(): View
   {
      $teachers = Teacher::all();
      return view('teacher.index')->with('teachers', $teachers);
   }


   public function create(): View
   {
      return view('teacher.create');
   }


   public function store(Request $request): RedirectResponse
   {
      $input = $request->all();
      Teacher::create($input);
      return redirect('/teachers')->with('flash_message', 'teacher Added!');
   }

   public function show(string $id): View
   {
      $teacher = Teacher::find($id);
      return view('teacher.show')->with('teachers', $teacher);
   }

   public function edit(string $id): View
   {
      $teacher = Teacher::find($id);
      return view('teacher.edit')->with('teachers', $teacher);
   }

   public function update(Request $request, string $id): RedirectResponse
   {
      $teacher = Teacher::find($id);
      $input = $request->all();
      $teacher->update($input);
      return redirect('teachers')->with('flash_message', 'teacher Updated!');
   }

   public function destroy(string $id): RedirectResponse
   {
      Teacher::destroy($id);
      return redirect('teachers')->with('flash_message', 'teacher deleted!');
   }
}