<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Login;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\PaymentGateway\Payment;


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

// Route::get('/{locale}', function($locale){
//     App::setlocale($locale);
//     return view('index');
// });

// Route::get('/',[ProductController::class,'index'])->name('product.index');

Route::get('/home/{name}',[HomeController::class,'index'])->name('home.index');

Route::get('/user',[UserController::class,'index'])->name('user.index');

Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getallpost');

Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getpostbyid');

Route::get('/add-post',[ClientController::class,'addPost'])->name('posts.addPost');

Route::get('/update-post',[ClientController::class,'updatePost'])->name('posts.update');

Route::get('/delete-post/{id}', [ClientController::class,'deletePost'])->name('posts.delete');

// Route::get('/login',[LoginController::class,'index'])->name('login.index')->middleware('checkuser');

// Route::post('/login',[LoginController::class,'loginSubmit'])->name('login.submit');

Route::get('/session/get',[SessionController::class ,'getSessionDate'])->name('session.get');

Route::get('/session/set',[SessionController::class ,'storeSessionData'])->name('session.store');

Route::get('/session/remove',[SessionController::class ,'deleteSessionDate'])->name('session.delete');

Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getallpost');
//modal
// Route::get('/posts',[PostController::class,'index']);

Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');
//modal 
// Route::post('/add-post',[PostController::class,'addPost'])->name('post.add');

Route::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/posts/{id}', [PostController::class,'getPostById'])->name('post.getbyid');

Route::get('/delete-post/{id}', [PostController::class,'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}', [PostController::class,'editPost'])->name('post.edit');

Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');

Route::get('/home' ,function(){
    return view('index');
});

Route::get('/payment',function(){
    return Payment::process();
});

Route::get('/send-email', [MailController::class, 'sendEmail']);

Route::get('/upload', [UploadController::class,'uploadForm']);

Route::post('/upload', [UploadController::class,'uploadFile'])->name('upload.uploadfile');

Route::get('/dropzone', [DropzoneController::class, 'dropzone']);

Route::post('/dropzone-store', [DropzoneController::class,'dropzoneStore'])->name('dropzone.store');

Route::get('/gallery', [GalleryController::class, 'gallery']);

Route::get('/resize-image',[ImageController::class, 'resizeImage']);

Route::post('/resize-image',[ImageController::class, 'resizeImageSubmit'])->name('image.resize');

Route::get('/editor',[EditorController::class,'editor']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/add-student', [StudentController::class, 'addStudent']);

Route::post('/add-student', [StudentController::class, 'storeStudent'])->name('student.store');

Route::get('/all-students', [StudentController::class, 'students']);

Route::get('/edit-student/{id}' ,[StudentController::class, 'editStudent']);

Route::post('/update-student', [StudentController::class, 'updateStudent'])->name('student.update');

Route::get('/delete-student/{id}', [StudentController::class, 'deleteStudent']);

Route::get('/employee', [EmployeeController::class, 'index']);