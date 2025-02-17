<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KepenggurusanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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
// Home
Route::get('/', [HomeController::class, 'index'])->name('homeIKBKSY');
// Route::get('/home', [HomeController::class, 'index'])->name('homeIKBKSY');

// About
Route::get('/about/sejarah', [HomeController::class, 'sejarah'])->name('sejarahIKBKSY');
Route::get('/about/logo', [HomeController::class, 'logo'])->name('logoIKBKSY');
Route::get('/about/visi-misi', [HomeController::class, 'visiMisi'])->name('visimisiIKBKSY');
Route::get('/about/pengurus', [KepenggurusanController::class, 'index'])->name('pengurusIKBKSY');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blogIKBKSY');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blogDetail');

// Galeri
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeriIKBKSY');
Route::get('/galeri/{slug}', [GalleryController::class, 'view'])->name('galeriDetail');

// Kontak
Route::get('/kontak', [HomeController::class, 'contact'])->name('kontakIKBKSY');


Auth::routes();

// admin
Route::get('/admin', [HomeController::class, 'dashboard'])->name('admin');

// Pengurus
Route::get('/admin/struktur/pengurus/', [KepenggurusanController::class, 'all'])->name('allPengurus');
Route::get('/admin/struktur/pengurus/add', [KepenggurusanController::class, 'create'])->name('addPengurus');
Route::post('/admin/struktur/pengurus/add', [KepenggurusanController::class, 'store'])->name('storePengurus');
Route::get('/admin/struktur/pengurus/edit/{id}', [KepenggurusanController::class, 'edit'])->name('editPengurus');
Route::patch('/admin/struktur/pengurus/edit/{id}', [KepenggurusanController::class, 'update'])->name('updatePengurus');
Route::delete('/admin/struktur/pengurus/delete/{id}', [KepenggurusanController::class, 'destroy'])->name('deletePengurus');

// Department
Route::get('/admin/struktur/department/', [DepartmentController::class, 'index'])->name('department');
Route::get('/admin/struktur/department/add', [DepartmentController::class, 'create'])->name('addDepartment');
Route::post('/admin/struktur/department/add', [DepartmentController::class, 'store'])->name('storeDepartment');
Route::get('/admin/struktur/department/edit/{id}', [DepartmentController::class, 'edit'])->name('editDepartment');
Route::patch('/admin/struktur/department/edit/{id}', [DepartmentController::class, 'update'])->name('updateDepartment');
Route::delete('/admin/struktur/department/delete/{id}', [DepartmentController::class, 'destroy'])->name('deleteDepartment');

// Blog
Route::get('/admin/blog/', [BlogController::class, 'all'])->name('allBlog');
Route::get('/admin/blog/add', [BlogController::class, 'create'])->name('addBlog');
Route::post('/admin/blog/add', [BlogController::class, 'store'])->name('storeBlog');
Route::get('/admin/blog/edit/{id}/', [BlogController::class, 'edit'])->name('editBlog');
Route::patch('/admin/blog/edit/{id}/', [BlogController::class, 'update'])->name('updateBlog');
Route::delete('/admin/blog/delete/{id}', [BlogController::class, 'destroy'])->name('deleteBlog');

// Category
Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');
Route::get('/admin/category/add', [CategoryController::class, 'create'])->name('addCategory');
Route::post('/admin/category/add', [CategoryController::class, 'store'])->name('storeCategory');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('editCategory');
Route::patch('/admin/category/edit/{id}', [CategoryController::class, 'update'])->name('updateCategory');
Route::delete('/admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('deleteCategory');

// Event
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/admin/event/add', [EventController::class, 'create'])->name('addEvent');
Route::post('/admin/event/add', [EventController::class, 'store'])->name('storeEvent');
Route::get('/admin/event/edit/{id}', [EventController::class, 'edit'])->name('editEvent');
Route::patch('/admin/event/edit/{id}', [EventController::class, 'update'])->name('updateEvent');
Route::delete('/admin/event/delete/{id}/{source}', [EventController::class, 'destroy'])->name('deleteEvent');

// Gallery
Route::get('/admin/gallery', [GalleryController::class, 'all'])->name('allGallery');
Route::get('/admin/gallery/{id}', [GalleryController::class, 'show'])->name('showGallery');
Route::get('/admin/gallery/add/new/{id_event?}', [GalleryController::class, 'create'])->name('addGallery');
Route::get('/admin/gallery/add/show/{id_event}', [GalleryController::class, 'showEventGalleries'])->name('showEventGalleries');
Route::post('/admin/gallery/upload', [GalleryController::class, 'uploadImage'])->name('uploadGalleryImage');
Route::get('/admin/gallery/release/{id_event}', [GalleryController::class, 'releaseGallery'])->name('releaseGallery');
Route::get('/admin/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('editGallery');
Route::patch('/admin/gallery/edit/{id}', [GalleryController::class, 'update'])->name('updateGallery');
Route::delete('/admin/gallery/delete/{id}/{source}', [GalleryController::class, 'destroy'])->name('deleteGallery');
Route::delete('/admin/gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('deleteImageGallery');
