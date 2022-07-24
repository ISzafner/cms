<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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

}
