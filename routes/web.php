<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});

// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//     $request->fulfill();

//     return redirect('/home');
// })->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/articles/{article}', [ArticleController::class , 'show'])->name('articles.show');
Route::get('/videos/{video}', [VideoController::class , 'show'])->name('videos.show');
Route::get('/audios/{audio}', [AudioController::class , 'show'])->name('audios.show');
Route::get('/profile/{user}', [ProfileController::class , 'show'])->name('profile.show');
Route::get('/watch', [VideoController::class , 'index'])->name('videos.index');
Route::get('/hear', [AudioController::class , 'index'])->name('audios.index');
Route::get('/read', [ArticleController::class , 'index'])->name('articles.index');
Route::get('/videos', function () {
    return redirect()->route('videos.index');
});
Route::get('/audios', function () {
    return redirect()->route('audios.index');
});
Route::get('/articles', function () {
    return redirect()->route('articles.index');
});
Route::get('/', [FeedController::class , 'index'])->name('feed.index');

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
    