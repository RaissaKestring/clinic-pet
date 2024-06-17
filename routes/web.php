<?php

use Illuminate\Support\Facades\Route;
use App\Routes\web;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('login/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('login/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();

    // Aqui você pode procurar o usuário no banco de dados e logá-lo
    $user = User::firstOrCreate(
        ['email' => $googleUser->getEmail()],
        ['name' => $googleUser->getName(), 'google_id' => $googleUser->getId()]
    );

    Auth::login($user);

    return redirect('/home');
});
