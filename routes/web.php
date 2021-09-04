<?php

use App\Http\Controllers\AssignStudentController;
use App\Http\Controllers\AssignSubjectController;
use App\Http\Controllers\StudentClassController;
use App\Http\Controllers\StudentYearController;
use App\Http\Controllers\StudentGroupController;
use App\Http\Controllers\StudentShiftController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeeCategoryController;
use App\Http\Controllers\FeeCategoryAmountController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeSalaryController;
use App\Http\Controllers\GoverningBodyController;
use App\Http\Controllers\MarkSheetController;
use App\Http\Controllers\OtherCostController;
use App\Http\Controllers\ResultSheetController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffSalaryController;
use App\Http\Controllers\StudentFeeController;
use App\Http\Controllers\StudentMarkController;
use App\Http\Controllers\StudentScholarshipController;
use App\Http\Controllers\StudentWeaverController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherSalaryController;
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

	Route::resource('student', StudentController::class);
	Route::resource('assignStudent', AssignStudentController::class);
	Route::resource('scholarship', StudentScholarshipController::class);
	Route::resource('waiver', StudentWeaverController::class);



	Route::resource('teacher', TeacherController::class);
	Route::resource('employee', EmployeeController::class);
	Route::resource('staff', StaffController::class);
	Route::resource('governingBody', GoverningBodyController::class);


	Route::resource('mark', StudentMarkController::class);
	Route::resource('studentFee', StudentFeeController::class);

	Route::resource('revenue', RevenueController::class);
	Route::resource('otherCost', OtherCostController::class);
	Route::resource('staffSalary', StaffSalaryController::class);
	Route::resource('employeeSalary', EmployeeSalaryController::class);
	Route::resource('teacherSalary', TeacherSalaryController::class);

	Route::post('/markSheet', [MarkSheetController::class, 'index'])->name('markSheet.index');
	Route::get('/markSheet/generate', [MarkSheetController::class, 'create'])->name('markSheet.create');

	Route::post('/resultSheet', [ResultSheetController::class, 'index'])->name('resultSheet.index');
	Route::get('/resultSheet/generate', [ResultSheetController::class, 'create'])->name('resultSheet.create');















});

