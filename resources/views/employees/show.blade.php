@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <h2>Dane osobowe pracownika</h2>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Imię</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opis</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ isset($employee) ? $employee->id : ''}}</th>
                    <td>{{ isset($employee->name) ? $employee->name : ''}}</td>
                    <td>{{ isset($employee->surname) ? $employee->surname : ''}}</td>
                    <td>{{ isset($employee->email) ? $employee->email : ''}}</td>
                    <td>{{ isset($employee->description) ? $employee->description : ''}}</td>
                </tr>
                </tbody>
            </table>
            <table class="table">
                <h4>Umiejętności testerskie</h4>
                <thead class="thead-light">
                <tr>
                    <th scope="col">systemy testujące</th>
                    <th scope="col">systemy raportujące</th>
                    <th scope="col">znajomość selenium</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ isset($employee->testingSystems) ? $employee->testingSystems : '-'}}</td>
                    <td>{{ isset($employee->reportingSystems) ? $employee->reportingSystems : '-'}}</td>
                    <td>{{ isset($employee->selenium) ? $employee->selenium : '-'}}</td>
                </tr>
                </tbody>
            </table>
            <table class="table">
                <h4>Umiejętności developerskie</h4>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">środowiska ide</th>
                    <th scope="col">języki programowania</th>
                    <th scope="col">znajomość sql</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ isset($employee->ide) ? $employee->ide : '-'}}</td>
                    <td>{{ isset($employee->programmingLanguages) ? $employee->programmingLanguages : '-'}}</td>
                    <td>{{ isset($employee->mysql) ? $employee->mysql : '-'}}</td>
                </tr>
                </tbody>
            </table>
            <table class="table">
                <h4>Umiejętności testerskie</h4>
                <thead class="thead-light">
                <tr>
                    <th scope="col">metodologie prowadzenia projektów</th>
                    <th scope="col">systemy raportowe</th>
                    <th scope="col">zna scrum</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{ isset($employee->projectManagementMethodologies) ? $employee->projectManagementMethodologies : '-'}}</td>
                    <td>{{ isset($employee->reportingSystems) ? $employee->reportingSystems : '-'}}</td>
                    <td>{{ isset($employee->scrum) ? $employee->scrum : '-'}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <a type="button" href="/employee/{{ isset($employee) ? $employee->id : ''}}" class="btn btn-secondary">Edytuj</a>
        <a type="button" href="/admin" class="btn btn-dark">Zobacz listę pracowników</a>
    </div>
@endsection
