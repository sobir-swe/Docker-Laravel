<?php

use App\Models\Ad;
use App\Models\Branch;
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    $users = User::all();
    return response()->json($users);
});

Route::get('/branches', function () {
    $branches = Branch::all();
    return response()->json($branches);
});


Route::get('/ads', function () {
    $ads = Ad::all();
    return response()->json($ads);
});

Route::get('/statuses', function () {
    $statuses = Status::all();
    return response()->json($statuses);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
