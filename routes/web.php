<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PermissionController;
//use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyFeesController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolProfileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentProfileController;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/verify-student','StudentController@StudentNum')->name('getStudent');
Route::get('/fetchStudent','StudentController@getStudentNum')->name('Student');


Route::middleware(['auth','role:admin'])->group(function (){  
    Route::resource('/roles', RoleController::class);
    Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
    Route::resource('/permissions', PermissionController::class);
    Route::post('/permissions/{permission}/roles', [PermissionController::class, 'assignRole'])->name('permissions.roles');
    Route::delete('/permissions/{permission}/roles/{role}', [PermissionController::class, 'removeRole'])->name('permissions.roles.remove');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/{user}/roles', [UserController::class, 'assignRole'])->name('users.roles');
    Route::delete('/users/{user}/roles/{role}', [UserController::class, 'removeRole'])->name('users.roles.remove');
    Route::post('/users/{user}/permissions', [UserController::class, 'givePermission'])->name('users.permissions');
    Route::delete('/users/{user}/permissions/{permission}', [UserController::class, 'revokePermission'])->name('users.permissions.revoke');
    Route::get('/schoolprofile', [SchoolProfileController::class, 'index'])->name('schoolprofile');
    Route::get('/schoolprofile/create', [SchoolProfileController::class, 'create'])->name('schoolprofile.create');
    Route::post('/schoolprofile/create',[SchoolProfileController::class, 'store'])->name('schoolprofile.store');
    Route::get('/schoolprofile/{id}/edit', [SchoolProfileController::class, 'edit'])->name('schoolprofile.edit');
    Route::post('/schoolprofile/{id}/edit',[SchoolProfileController::class, 'update'])->name('schoolprofile.update');
    Route::get('/forms/letterhead',[FormController::class,'printLetterHead'])->name('letterhead');
});   
    
Route::middleware(['auth','role:student'])->group(function (){
    Route::get('/myfess/myusd/usdstatement',[FormController::class,'printStatement'])->name('usdstatement');
    Route::prefix('myfees')->group(function() {
        Route::get('/', 'MyFeesController@index')->name("myfees");
        Route::post('/myusd', 'MyFeesController@myusd')->name("myusd");
        Route::post('/myrtgs', 'MyFeesController@myrtgs')->name("myrtgs");
    });
    Route::prefix('studentdashboard')->group(function() {
        Route::get('/', 'StudentDashboardController@index')->name('studentdashboard');
        Route::post('/store-student', 'StudentController@store')->name('storeStudent');

        // profile routes
        Route::get('/student-profile', 'StudentProfileController@index')->name('studentProfile');
        Route::get('/student-profile-create', 'StudentProfileController@create')->name('createProfile');
        Route::get('/student-profile/{id}/edit', 'StudentProfileController@edit')->name('editStudentProfile');
        Route::put('/student-profile/{id}/edit', 'StudentProfileController@update')->name('updateStudentProfile');

        Route::post('/store-student-profile', 'StudentProfileController@store')->name('storeStudentProfile');
        Route::put('/edit-profile/{id}', 'StudentController@updateProfile')->name('editProfile');

        // parent route
        Route::put('/create-parent', 'StudentController@updateProfile')->name('createParent');
    });
});
    
// student-parent profile
Route::get('/add-profile', 'StudentController@addprofile')->name('addStudentProfile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
