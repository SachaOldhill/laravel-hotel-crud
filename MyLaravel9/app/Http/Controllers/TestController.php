<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function home() {
    $employees = Employee::all();
    return view('pages.home', compact(
      'employees'
    ));
  }
  public function employee($id) {
    $employee = Employee::findOrFail($id);
    return view('pages.employee', compact(
        'employee'
    ));
  }
  public function create(){

    return view('pages.create');
  }

  public function store(Request $request){

    $validate = $request -> validate([
      'firstname' => 'nullable|max:128',
      'lastname' => 'nullable|max:128',
      'role' => 'nullable',
      'ral' => 'nullable',
    ]);
    $employee = Employee::create($validate);
    // return redirect() -> route('home');
    return redirect() -> route('employee', $employee -> id);
  }
  public function destroy($id){
    $employee = Employee::findOrFail($id);
    $employee -> delete();
    return redirect() -> route('home');
  }
  public function edit($id){
    $employee = Employee::findOrFail($id);
    return view('pages.edit', compact('employee'));
  }
  public function update(Request $request, $id){
    $validData = $request -> validate([
      'firstname' => 'nullable|max:128',
      'lastname' => 'nullable|max:128',
      'role' => 'nullable',
      'ral' => 'nullable',
      ]);
    $employee = Employee::findOrFail($id);
    $employee -> update($validData);
    return redirect() -> route('home');
  }
}
