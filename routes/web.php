<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route goc: GET / se goi StudentController@index.
// name('student.index') tao ten route de tao URL bang helper route('student.index').
Route::get('/', [StudentController::class, 'index'])->name('student.index');

// Gom nhom route theo PageController de tranh lap lai ten controller.
// name('page.') dat prefix ten route cho toan bo nhom:
// - page.home
// - page.about
// - page.profile
// profile/{username} la route parameter, gia tri {username}
// se duoc inject vao tham so $username trong PageController@profile.
Route::controller(PageController::class)
	->name('page.')
	->group(function () {
		// GET /home -> PageController@home
		Route::get('/home', 'home')->name('home');

		// GET /about -> PageController@about
		Route::get('/about', 'about')->name('about');

		// GET /profile/{username} -> PageController@profile
		Route::get('/profile/{username}', 'profile')->name('profile');
	});
