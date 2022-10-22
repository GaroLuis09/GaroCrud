<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
  
    public function index()
    {
        $employees = Employee::all();
      return view ('employees.index')->with('employees', $employees);
    }
 
    
    public function create()
    {
        return view('employees.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Employee::create($input);
        return redirect('employees')->with('flash_message', 'Employee Added!');  
    }
 
    
    public function show($id)
    {
        $employees = Employee::find($id);
        return view('employees.show')->with('employees', $employees);
    }
 
    
    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employees.edit')->with('employees', $employees);
    }
 
  
    public function update(Request $request, $id)
    {
        $employees = Employee::find($id);
        $input = $request->all();
        $employees->update($input);
        return redirect('employees')->with('flash_message', 'Employee Updated!');  
    }
 
  
    public function destroy($id)
    {
        Employee::destroy($id);
        return redirect('employees')->with('flash_message', 'Employees deleted!');  
    }
}
