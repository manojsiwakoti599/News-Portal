<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubDistrictController;
use Illuminate\Support\Facades\Route;

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');



// Admin Logout
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');



// Admin Category All Routes
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');


// Add Category
Route::get('/add/category', [CategoryController::class, 'addCategory'])->name('add.category');



// Store data in  Categories
Route::post('/store/category', [CategoryController::class, 'storeCategory'])->name('store.category');


// edit data in  Categories
Route::get('/edit/category/{id}', [CategoryController::class, 'editCategory'])->name('edit.category');



// Update data in  Categories
Route::post('/update/category/{id}', [CategoryController::class, 'updateCategory'])->name('update.category');



// Update data in  Categories
Route::get('/delete/category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');


// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// All Routes for SubCategories

// index for table
Route::get('/subcategories', [SubCategoryController::class, 'index'])->name('subcategories');


// Create a  subCategory table
Route::get('/add/subcategories', [SubCategoryController::class, 'addSubCategory'])->name('add.subcategory');


// Store  subCategory to a SubCategory table
Route::post('/store/subcategories', [SubCategoryController::class, 'storeSubCategory'])->name('store.subcategory');


// edit data in  subCategories
Route::get('/edit/subcategory/{id}', [SubCategoryController::class, 'editSubCategory'])->name('edit.subcategory');



// Update data in  Categories
Route::post('/update/subcategory/{id}', [SubCategoryController::class, 'updateSubCategory'])->name('update.subcategory');



// Update data in  Categories
Route::get('/delete/subcategory/{id}', [SubCategoryController::class, 'deleteSubCategory'])->name('delete.subcategory');



// ----DISTRICT ROUTE------------------------------------------------------------------------------------------------------------------------------------------------------

// Index for District
Route::get('/district', [DistrictController::class, 'index'])->name('district');



// create for District
Route::get('/add/district', [DistrictController::class, 'addDistrict'])->name('add.district');


// Store  District to a District table
Route::post('/store/district', [DistrictController::class, 'storeDistrict'])->name('store.district');


// edit data in  District
Route::get('/edit/district/{id}', [DistrictController::class, 'editDistrict'])->name('edit.district');


// Update data in  Categories
Route::post('/update/district/{id}', [DistrictController::class, 'updateDistrict'])->name('update.district');


// Update data in  Categories
Route::get('/delete/district/{id}', [DistrictController::class, 'deleteDistrict'])->name('delete.district');



// -----------------------------------SUBDISTRICT ROUTE--------------------------------------------------------------------------------------------------------------------



// Index for SubDistrict
Route::get('/subdistrict', [SubDistrictController::class, 'index'])->name('subdistrict');


// Add SubDistrict
Route::get('/add/SubDistrict', [SubDistrictController::class, 'addSubDistrict'])->name('add.subdistrict');


// Store  SubDistrict to a Subdistrict table
Route::post('/store/subdistrict', [SubDistrictController::class, 'storeSubDistrict'])->name('store.subdistrict');


// edit data in  subdistrict
Route::get('/edit/subdistrict/{id}', [SubDistrictController::class, 'editSubDistrict'])->name('edit.subdistrict');


// Update data in  subdistrict
Route::post('/update/subdistrict/{id}', [SubDistrictController::class, 'updateSubDistrict'])->name('update.subdistrict');


// Delete data in  subdistrict
Route::get('/delete/subdistrict/{id}', [SubDistrictController::class, 'deleteSubDistrict'])->name('delete.subdistrict');


//-----------------------------ALL POSTS ROUTE---------------------------------------------------------------------------------------------------------------------------


// CRATE POSTS
Route::get('/createposts', [PostController::class, 'createPost'])->name('create.post');





// using jQUery to fetch the data from caregory_id
Route::get('/get/subcategory/{category_id}', [PostController::class, 'getSubCategory']);


// using jQUery to fetch the data from district_id
Route::get('/get/subdistrict/{district_id}', [PostController::class, 'getSubDistrict']);



// Store data in  POSTS
Route::post('/store/post', [PostController::class, 'storePost'])->name('store.post');


