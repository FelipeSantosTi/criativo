<?php

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

Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function () {

    // TESTES //
    Route::get('test-acl', function () {
        dd(auth()->user()->isAdmin());
    });

    // ROLES //
    Route::any('roles/search', 'ACL\RoleController@search')->name('roles.search');
    Route::resource('roles', 'ACL\RoleController');

    // GRADE x COURSE //
    Route::get('grades/{id}/courses/{idCourse}/detach', 'CourseGradeController@detachCoursesGrade')->name('grades.courses.detach');
    Route::post('grades/{id}/courses', 'CourseGradeController@attachCoursesGrade')->name('grades.courses.attach');
    Route::any('grades/{id}/courses/create', 'CourseGradeController@coursesAvailable')->name('grades.courses.available');
    Route::get('grades/{id}/courses', 'CourseGradeController@courses')->name('grades.courses');
    Route::get('courses/{id}/grades', 'CourseGradeController@grades')->name('courses.grades');

    // GRADES //
    Route::any('grades/search', 'GradeController@search')->name('grades.search');
    Route::resource('grades', 'GradeController');

    // COURSES //
    Route::any('courses/search', 'CourseController@search')->name('courses.search');
    Route::resource('courses', 'CourseController');

    // USERS //
    Route::any('users/search', 'UserController@search')->name('users.search');
    Route::resource('users', 'UserController');

    // PLAN x PROFILE //
    Route::get('plans/{id}/profiles/{idProfile}/detach', 'ACL\PlanProfileController@detachProfilesPlan')->name('plans.profiles.detach');
    Route::post('plans/{id}/profiles', 'ACL\PlanProfileController@attachProfilesPlan')->name('plans.profiles.attach');
    Route::any('plans/{id}/profiles/create', 'ACL\PlanProfileController@profilesAvailable')->name('plans.profiles.available');
    Route::get('plans/{id}/profiles', 'ACL\PlanProfileController@profiles')->name('plans.profiles');
    Route::get('profiles/{id}/plans', 'ACL\PlanProfileController@plans')->name('profiles.plans');

    // PERMISSION x PROFILE //
    Route::get('profiles/{id}/permission/{idPermission}/detach', 'ACL\PermissionProfileController@detachPermissionsProfile')->name('profiles.permissions.detach');
    Route::post('profiles/{id}/permissions', 'ACL\PermissionProfileController@attachPermissionsProfile')->name('profiles.permissions.attach');
    Route::any('profiles/{id}/permissions/create', 'ACL\PermissionProfileController@permissionsAvailable')->name('profiles.permissions.available');
    Route::get('profiles/{id}/permissions', 'ACL\PermissionProfileController@permissions')->name('profiles.permissions');
    Route::get('permissions/{id}/profile', 'ACL\PermissionProfileController@profiles')->name('permissions.profiles');

    // PERMISSIONS //
    Route::any('permissions/search', 'ACL\PermissionController@search')->name('permissions.search');
    Route::resource('permissions', 'ACL\PermissionController');

    // PROFILES //
    Route::any('profiles/search', 'ACL\ProfileController@search')->name('profiles.search');
    Route::resource('profiles', 'ACL\ProfileController');

    // PLAN DETAILS //
    Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plan.create');
    Route::delete('plans/{url}/details/{idDetail}', 'DetailPlanController@destroy')->name('details.plan.destroy');
    Route::get('plans/{url}/details/{idDetail}', 'DetailPlanController@show')->name('details.plan.show');
    Route::put('plans/{url}/details/{idDetail}', 'DetailPlanController@update')->name('details.plan.update');
    Route::get('plans/{url}/details/{idDetail}/edit', 'DetailPlanController@edit')->name('details.plan.edit');
    Route::post('plans/{url}/details', 'DetailPlanController@store')->name('details.plan.store');
    Route::get('plans/{url}/details', 'DetailPlanController@index')->name('details.plan.index');

    // PLANS //
    Route::get('plans/create', 'PlanController@create')->name('plans.create');
    Route::put('plans/{url}', 'PlanController@update')->name('plans.update');
    Route::get('plans/{url}/edit', 'PlanController@edit')->name('plans.edit');
    Route::any('plans/search', 'PlanController@search')->name('plans.search');
    Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');
    Route::get('plans/{url}', 'PlanController@show')->name('plans.show');
    Route::post('plans', 'PlanController@store')->name('plans.store');
    Route::get('plans', 'PlanController@index')->name('plans.index');

    // ADMIN DASHBOARD //
    Route::get('/', 'PlanController@index')->name('admin.index');
});

// ADMIN DASHBOARD //
Route::get('/plan/{url}', 'Site\SiteController@plan')->name('plan.subscription');
Route::get('/', 'Site\SiteController@index')->name('site.home');

Auth::routes();
//Auth::routes(['register' => false]);
