<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    $users = User::all();
    return response()->json($users);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
