<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use http\Encoding\Stream\Enbrotli;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        return view('registerEmployee');
    }

    public function create()
    {
        return view('employees.create');
    }

    public function show($id)
    {
        $employee = Employee::where('id', $id)->first();
        if($employee){
            return view('employees.show', ['employee' => $employee]);
        } else {
            return 'no records found';
        }
    }

    public function store()
    {
        $employee = Employee::create(request()->all());
        return redirect('/employee/' . $employee->id);
    }

    public function showAll()
    {
        $employees = Employee::all();
        return view('admin.admin', compact('employees'));
    }

    public function edit($id)
    {
        $employee = Employee::where('id', $id)->first();
        if($employee){
            return view('employees.edit', compact('employee'));
        } else {
            return 'no records found';
        }
    }

    public function update(Employee $employee)
    {

        $data = \request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
        ]);

        $employee->update($data);
        return redirect('/employee/' . $employee->id);
    }

    public function delete($id)
    {
        $employee = Employee::where('id', $id)->firstOrFail();
        $employee->delete();
        return view('admin.admin');
    }
}
