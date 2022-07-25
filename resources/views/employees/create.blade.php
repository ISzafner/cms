@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" enctype="multipart/form-data" action="/employee/added">
                    @csrf
                <div class="card">
                    <div class="card-header">Formularz rejestarcyjny nowego pracownika</div>
{{--TODO refactor to select--}}
                    <div class="card-body">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Imię</label>
                                <div class="col-md-6">
                                    <input id="name"
                                           type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{ old('name') }}"
                                           required autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-end">Nazwisko</label>
                            <div class="col-md-6">
                                <input id="surname"
                                       type="text"
                                       class="form-control @error('surname') is-invalid @enderror"
                                       name="surname"
                                       value="{{ old('surname') }}"
                                       required autofocus>

                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                                <div class="col-md-6">
                                    <input id="email"
                                           type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email"
                                           value="{{ old('email') }}"
                                           autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Opis</label>
                                <div class="col-md-6">
                                    <input id="description"
                                           type="text"
                                           class="form-control @error('description') is-invalid @enderror"
                                           name="description"
                                           value="{{ old('description') }}"
                                           autofocus>
                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                </div>
                            </div>

                            <div class="card-header">Kompetencje pracownika</div>
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <label for="testingSystems" class="col-md-4 col-form-label text-md-end">Systemy testujące</label>
                                        <div class="col-md-6">
                                            <input id="testingSystems"
                                            type="text"
                                            class="form-control @error('testingSystems') is-invalid @enderror"
                                            name="testingSystems"
                                            value="{{ old('testingSystems') }}"
                                            autofocus>
                                            @error('testingSystems')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="reportingSystems" class="col-md-4 col-form-label text-md-end">Systemy raportujące</label>
                                        <div class="col-md-6">
                                            <input id="reportingSystems"
                                            type="text"
                                            class="form-control @error('reportingSystems') is-invalid @enderror"
                                            name="reportingSystems"
                                            value="{{ old('reportingSystems') }}"
                                            autofocus>
                                            @error('reportingSystems')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="selenium" class="col-md-4 col-form-label text-md-end">Znajomość selenium</label>
                                        <div class="col-md-6">
                                            <input id="selenium"
                                            type="text"
                                            class="form-control @error('selenium') is-invalid @enderror"
                                            name="selenium"
                                            value="{{ old('selenium') }}"
                                            autofocus>
                                            @error('selenium')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="ide" class="col-md-4 col-form-label text-md-end">Środowiska ide</label>
                                        <div class="col-md-6">
                                            <input id="ide"
                                                   type="text"
                                                   class="form-control @error('ide') is-invalid @enderror"
                                                   name="ide"
                                                   value="{{ old('ide') }}"
                                                   autofocus>
                                                   @error('ide')
                                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="programmingLanguages" class="col-md-4 col-form-label text-md-end">Znajomość języków programowania</label>
                                        <div class="col-md-6">
                                        <input id="programmingLanguages"
                                               type="text"
                                               class="form-control @error('programmingLanguages') is-invalid @enderror"
                                               name="programmingLanguages"
                                               value="{{ old('programmingLanguages') }}"
                                               autofocus>
                                                @error('programmingLanguages')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="mysql" class="col-md-4 col-form-label text-md-end">Znajomość mysql</label>
                                        <div class="col-md-6">
                                        <input id="mysql"
                                               type="text"
                                               class="form-control @error('mysql') is-invalid @enderror"
                                               name="mysql"
                                               value="{{ old('mysql') }}"
                                               autofocus>
                                                @error('mysql')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="projectManagementMethodologies" class="col-md-4 col-form-label text-md-end">Metodologia zarządzania projaktami</label>
                                        <div class="col-md-6">
                                            <input id="projectManagementMethodologies"
                                                   type="text"
                                                   class="form-control @error('projectManagementMethodologies') is-invalid @enderror"
                                                   name="projectManagementMethodologies"
                                                   value="{{ old('projectManagementMethodologies') }}"
                                                   autofocus>
                                            @error('projectManagementMethodologies')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="scrum" class="col-md-4 col-form-label text-md-end">Znajomość scrum</label>
                                        <div class="col-md-6">
                                            <input id="scrum" type="text" class="form-control @error('scrum') is-invalid @enderror" name="scrum" value="{{ old('scrum') }}" autofocus>
                                            @error('scrum')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-outline-success">
                                                Zarejestruj nowego pracownika
                                            </button>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
