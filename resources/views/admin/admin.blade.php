@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <h2>Lista wszystkich pracowników</h2>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Imię</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Email</th>
                    <th scope="col">Wyświetlanie</th>
                    <th scope="col">Edycja</th>
                    <th scope="col">Usuwanie</th>
                </tr>
                </thead>
                <tbody>
{{--            TODO    need to fix codes for foreach. throws an error after deletion. the delete method works fine and removes the record from the database--}}
                    @if (is_array($employees) || is_object($employees))
                    @foreach ($employees as $employee)
                        <tr>
                            <th scope="row">{{ isset($employee->id) ? $employee->id: '-'}}</th>
                            <td>{{ isset($employee->name) ? $employee->name : '-'}}</td>
                            <td>{{ isset($employee->surname) ? $employee->surname : '-'}}</td>
                            <td>{{ isset($employee->email) ? $employee->email : '-'}}</td>
                            <td><a type="button" href="/employee/{{ isset($employee) ? $employee->id : ''}}" class="btn btn-outline-secondary">Zobacz</a></td>
                            <td><a type="button" href="/employee/{{ isset($employee) ? $employee->id : ''}}/edit" class="btn btn-secondary">Edytuj</a></td>
                            <td>
                                <form action="/employee/{{ isset($employee->id) ? $employee->id: '-'}}/delete" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-dark">Usuń</button>
                                </form>
                            </td>
                        </tr>
                @endforeach
                @endif
            </table>
        </div>
    </div>
    </div>
@endsection
