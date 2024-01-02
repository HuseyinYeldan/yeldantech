<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileUpdateController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CommentController;


use Laravel\Fortify\Fortify;
use App\Blog;
use App\Project;

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

Route::get('/', [HomeController::class, 'index'])->name('mainpage');

Route::get('/hakkimizda', [AboutController::class, 'index']);

Route::get('/projelerimiz', [ProjectsController::class, 'index']);

//Blog

Route::get('/blog', [BlogController::class, 'blogs']);

Route::get('/blog-ekle', [BlogController::class, 'add'])->middleware('auth');

Route::get('/blog-duzenle/{id}', [BlogController::class, 'edit'])->middleware('auth');

Route::put('/blog-guncelle/{id}', [BlogController::class, 'update'])->middleware('auth')->name('blog.guncelle');

Route::delete('/blog-sil/{id}', [BlogController::class, 'destroy'])->middleware('auth')->name('blog.delete');

Route::get('/blog/{slug}', [BlogController::class, 'index']);

Route::get('/kategori/{category}', [BlogController::class, 'category']);

Route::post('/blog-paylas', [BlogController::class, 'share']);

Route::post('/upload-image', [BlogController::class, 'uploadImage']);

Route::post('/upload-file', [BlogController::class, 'uploadFile']);

Route::get('/arama-sonucu', [SearchController::class, 'index'])->name('search');


Route::post('/comment/{blogId}', [CommentController::class, 'add'])->name('comment.share');

Route::delete('/comments/{comment}', [CommentController::class, 'deleteComment'])->name('comments.delete');
Route::post('/comments/approve/{comment}', [CommentController::class, 'approveComment'])->name('comments.approve');


//Profil

Route::get('/profil/{slug}', [ProfileController::class, 'index']);

Route::get('/profil-duzenle', [ProfileUpdateController::class,'edit'])->middleware('auth.profile.edit')->name('profile.edit');

Route::post('/profil-guncelle', [ProfileUpdateController::class,'update'])->name('profile.update');

Route::post('/link-guncelle', [ProfileUpdateController::class, 'updateLinks'])->name('profile.linkUpdate');

// Route::get('/testler', function (){
//     return view('quiz');
// });

Route::get('/iletisim',[ContactController::class, 'index']);

Route::post('/mesaj-gonder', [ContactController::class, 'mesaj'])->name('mesaj.gonder');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Fortify::loginView(function () {
    $blogs = Blog::all();
    $projects = Project::all();
    return view('auth.login', compact('blogs','projects'));
});

Fortify::registerView(function () {
    $blogs = Blog::all();
    $projects = Project::all();
    return view('auth.register', compact('blogs','projects'));
});




Route::post('/update-password', [ChangePasswordController::class, 'updatePassword'])->name('update-password');


Route::any('{catchall}', [HomeController::class, 'notfound'])->where('catchall', '.*')->name('404');

