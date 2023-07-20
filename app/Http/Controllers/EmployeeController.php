<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use Symfony\Contracts\Service\Attribute\Required;

class EmployeeController extends Controller
{
    public function index()
    {
        $employee = Employee::all();
        $id = 0;
        return view('employee.index', [
            'employees'=>$employee, 
            'ID'=>$id
        ]);
    }
    
    public function create()
    {
        return view('employee.create');
    }
    
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->num = $request->num;
        $employee->name = $request->name;
        $employee->department = $request->department;
        $employee->gender = $request->gender;
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Register Employee Successfuly');
    }
    public function show($id){
        $employee = Employee::find($id);
        return view('employee.detail', ['employee' => $employee]);
    }
    
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employee.edit', ['employee' => $employee]);
    }
    
    public function update(Request $request, Employee $employee )
    {
        $employee = Employee::find($request->hidden_id);
        $employee->num = $request->num;
        $employee->name = $request->name;
        $employee->department = $request->department;
        $employee->gender = $request->gender;
        $employee->save();
        return redirect()->route('employee.index')->with('success', 'Edit employee successfuly');
    }
    
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return redirect('employee')->with('success', 'Delete Employee Successfuly');
    }
}