<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $students = Student::orderBy('id', 'asc')->where(function ($query){
        if ($search = request()->query('search')) {
            $query->where("stu_name", "LIKE", "%{$search}%");
        }
    })->paginate(10);

    return view('dashboard', ['students' => $students]);

    // return view('dashboard', [StudentController::class, 'index']);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/students/student', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/student/create', [StudentController::class, 'create'])->name('students.create');

Route::post('/students/student', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/student/{student}', [StudentController::class, 'show'])->name('students.show');

Route::get('/students/student/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/student/{student}', [StudentController::class, 'update'])->name('students.update');

Route::delete('/students/student/{student}', [StudentController::class, 'destroy'])->name('students.destroy');