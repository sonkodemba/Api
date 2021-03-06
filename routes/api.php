<?php

use App\Http\Controllers\Api\DesignationController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\LocationController;
use App\Models\Gender;
use App\Models\MaritalStatus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'departments' => DepartmentController::class,
    'designations' => DesignationController::class,
    'banks' => LocationController::class,
    'locations' => LocationController::class,
    'genders' => Gender::class,
    'maritalstatus' => MaritalStatus::class,
    'users' => User::class,
    ]);
