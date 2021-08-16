<?php

use App\Http\Controllers\ArticleController;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

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
    return view('welcome');
});


Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/articles/{article}', [ArticleController::class , 'show'])->name('articles.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('auth.facebook.redirect');

Route::get('/auth/facebook/callback', function () {

    $user = Socialite::driver('facebook')->user();
    if(! $u = User::where('email' , $user->email)->first())  {
        $u = User::create([
            'email' => $user->email ,
            'username' => $user->nickname ,
            'name' => $user->name,
            'password' => Hash::make(Str::random(30)) 
        ]);
        $u->setRole('member');
    } 

        $u->facebook_token = $user->token ;
        $u->save();
    

    Auth::login($u , true);

    
})->name('auth.facebook.callback');
    