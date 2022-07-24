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

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'another' => '',
        ]);

        Employee::create($data);

        dd(\request()->all());
    }

}
