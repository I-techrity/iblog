<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
use App\Models\Article;
use App\Models\Audio;
use App\Models\User;
use App\Models\Video;
use Composer\DependencyResolver\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request as HttpRequest;
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
Route::get('/watch', [VideoController::class , 'index'])->name('watch');
Route::get('/hear', [AudioController::class , 'index'])->name('hear');
Route::get('/read', [ArticleController::class , 'index'])->name('read');
Route::get('/videos', function () {
    return redirect()->route('watch');
})->name('videos.index');
Route::get('/audios', function () {
    return redirect()->route('hear');
})->name('audios.index');
Route::get('/articles', function () {
    return redirect()->route('articles.index');
})->name('articles.index');
Route::get('/', [FeedController::class , 'index'])->name('feed');

Auth::routes();

Route::get('/home',function () {
    return redirect()->route('feed');
})->name('home');


Route::get('/search',function (Request $request) {
    $query =  Request('query') ;
    $posts = [];
    if( $query ) {
        $articles = Article::where('title' , 'like' , "%{$query}%")->orWhere('body' , 'like' , "%{$query}%")->get();
        $videos = Video::where('title' , 'like' , "%{$query}%")->orWhere('desc' , 'like' , "%{$query}%")->get();
        $audios = Audio::where('title' , 'like' , "%{$query}%")->orWhere('desc' , 'like' , "%{$query}%")->get();

        $posts = [ 'articles' =>$articles , 'videos' => $videos , 'audios' => $audios] ;

        
    }

    if(request()->wantsJson()) {

        return response()->json($posts);
    }
    dump($posts);
})->name('search');



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



Route::get('test', function () {
    $search = Unsplash::search()
    ->term(request('query'))
    ->page(request('page'))
    ->perPage(12)
    // ->color('black_and_white')
    // ->orientation('squarish')
    ->toJson();
    return response()->json(['results' => $search] ,200);
});
    