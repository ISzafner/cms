<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employee/added', [EmployeeController::class, 'store']);
Route::get('/admin',  [EmployeeController::class, 'showAll'])->name('admin.admin');
Route::get('/employee/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::patch('/employee/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employee/{employee}/delete', [EmployeeController::class, 'delete'])->name('employees.delete');
Route::get('/employee/{employee}/delete', ['as' => 'employee.show', 'uses' => 'EmployeeController@show']);
