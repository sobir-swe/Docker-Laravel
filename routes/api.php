<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/tokens/create', function () {
    $user = User::query()->create([
        'name' => 'Creator',
        'email' => 'creator@gmail.com',
        'password' => Hash::make('creator')
    ]);

    $token = $user->createToken('creator')->plainTextToken;

    return response()->json(['token' => $token]);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
