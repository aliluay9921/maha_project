<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Models\Program;
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

Route::middleware('auth')->group(function () {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get("all_users", [HomeController::class, "users"])->name("all_users");
    Route::get("get_users", [HomeController::class, "getUsers"])->name("get.users");
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/programs', [ProgramController::class, 'Programs'])->name("programs");
    Route::get("get_program", [ProgramController::class, 'getProgram'])->name("get.program");
    Route::get("get_program_student", [ProgramController::class, "getProgramStudent"])->name("get_program_student");
    Route::post("add_program", [ProgramController::class, "addProgram"])->name("add.program");
    Route::get("delete_program/{id}", [ProgramController::class, "deleteProgram"]);
    Route::get("edit_program/{id}", [ProgramController::class, "editProgram"]);
    Route::get("download/{id}", [ProgramController::class, "download"]);
    Route::put("update_program", [ProgramController::class, "updateProgram"])->name("update.program");
    Route::post("search", [ProgramController::class, "search"])->name("search");
});



// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();