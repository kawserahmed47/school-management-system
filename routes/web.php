<?php

use App\Http\Controllers\AssignSubjectController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\StudentYearController;
use App\Http\Controllers\StudentGroupController;
use App\Http\Controllers\StudentShiftController;
use App\Http\Controllers\FeeCategoryController;
use App\Http\Controllers\FeeCategoryAmountController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DesignationController;






use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);



	Route::resource('studentClass', StudentClassController::class);
	Route::resource('studentYear', StudentYearController::class);
	Route::resource('studentGroup', StudentGroupController::class);
	Route::resource('studentShift', StudentShiftController::class);
	Route::resource('feeCategory', FeeCategoryController::class);
	Route::resource('feeCategoryAmount', FeeCategoryAmountController::class);
	Route::resource('examType', ExamTypeController::class);
	Route::resource('subject', SubjectController::class);
	Route::resource('designation', DesignationController::class);
	Route::resource('assignSubject', AssignSubjectController::class);










});

