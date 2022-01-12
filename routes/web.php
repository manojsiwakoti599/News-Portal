<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\SubDistrictController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\SinglePageController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


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


// index all  POSTS
Route::get('/allpost', [PostController::class, 'index'])->name('all.post');


// edit  POST
Route::get('/edit/post/{id}', [PostController::class, 'editPost'])->name('edit.post');


// Update  POST
Route::post('/update/post/{id}', [PostController::class, 'updatePost'])->name('update.post');


// DELETE  POST
Route::get('/delete/post/{id}', [PostController::class, 'deletePost'])->name('delete.post');


//----------------------------SOCIAL SETTINGS-----------------------------------------------------------------------------------------------------------------------

//  Edit social settings
Route::get('/social/setting', [SettingController::class, 'socialSetting'])->name('social.setting');


//  uodate social settings
Route::post('/update/social-setting/{id}', [SettingController::class, 'updateSocial'])->name('update.social');



//  Edit Seo settings
Route::get('/seo/setting', [SettingController::class, 'seoSetting'])->name('seo.setting');



//  update Seo settings
Route::post('/update/seo-setting/{id}', [SettingController::class, 'updateSeo'])->name('update.seo');


//   Prayer settings
Route::get('/prayer/setting', [SettingController::class, 'prayerSetting'])->name('prayer.setting');


//  update Prayer settings
Route::post('/update/prayer/{id}', [SettingController::class, 'updatePrayer'])->name('update.prayer');


//   Live Tv  settings
Route::get('/livetv/setting', [SettingController::class, 'liveTvSetting'])->name('livetv.setting');


//  update Live Tv settings
Route::post('/update/livetv/{id}', [SettingController::class, 'updateLiveTv'])->name('update.livetv');


// Active  Live Tv  settings
Route::get('/activate/livetv/{id}', [SettingController::class, 'activeLiveTv'])->name('active.livetv');


//  Deactive Live Tv settings
Route::get('/deactive/livetv/{id}', [SettingController::class, 'deactiveLiveTv'])->name('deactive.livetv');


//  Edit Notice  settings
Route::get('/notice/setting', [SettingController::class, 'noticeSetting'])->name('notice.setting');


//  update Live Tv settings
Route::post('/update/notice/{id}', [SettingController::class, 'updateNotice'])->name('update.notice');


// Active  Notification  settings
Route::get('/activate/notice/{id}', [SettingController::class, 'activeNotice'])->name('active.notice');


//  Deactive Notification settings
Route::get('/deactive/notice/{id}', [SettingController::class, 'deactiveNotice'])->name('deactive.notice');

//-------------------------------------------------------------------------------------------------------------------------------------------------------
//  Index Website  settings
Route::get('/website/setting', [SettingController::class, 'websiteSetting'])->name('all.website');


//  Add Website  settings
Route::get('/add/website/links', [SettingController::class, 'addWebsiteLink'])->name('add.website');


//  srore Website  settings
Route::post('/store/website', [SettingController::class, 'StoreWebsiteLink'])->name('store.website');


//  Ediit Website  settings
Route::get('/edit/website/{id}', [SettingController::class, 'editeWebsiteLink'])->name('edit.website');


//  Update Website  settings
Route::post('/update/website/{id}', [SettingController::class, 'updateWebsiteLink'])->name('update.website');



// DELETE  POST
Route::get('/delete/website/{id}', [SettingController::class, 'deleteWebsite'])->name('delete.website');

//----------------------------------------------------------------------------------------------------------------------------------------------------------
//  Index Photo Gallery
Route::get('/photo/gallery/', [GalleryController::class, 'photoGallery'])->name('photo.gallery');


// Add Photo in Photo Gallery
Route::get('/add/photo/', [GalleryController::class, 'Addphoto'])->name('add.photo');


// Store Photo in Photo Gallery
Route::post('/store/photo/', [GalleryController::class, 'storePhoto'])->name('store.photo');


// Edit Photo in Photo Gallery
Route::get('/edit/photo/{id}', [GalleryController::class, 'editPhoto'])->name('edit.photo');


// Update Photo in Photo Gallery
Route::post('/update/photo/{id}', [GalleryController::class, 'updatePhoto'])->name('update.photo');


// Delete Photo in Photo Gallery
Route::get('/delete/photo/{id}', [GalleryController::class, 'deletePhoto'])->name('delete.photo');
//--------------------------------------------------------------------------------------------------------------------------------------------------------
// Index For Video Gallery
Route::get('/video/gallery/', [GalleryController::class, 'videoGallery'])->name('video.gallery');


// Add video in video Gallery
Route::get('/add/video/', [GalleryController::class, 'AddVideo'])->name('add.video');


// Store Video in Video Gallery
Route::post('/store/video/', [GalleryController::class, 'storeVideo'])->name('store.video');


// Store Video in Video Gallery
Route::get('/edit/video/{id}', [GalleryController::class, 'editVideo'])->name('edit.video');


// Update a Video in Video Gallery.
Route::post('/update/video/{id}', [GalleryController::class, 'updateVideo'])->name('update.video');


// Delete Photo in Photo Gallery
Route::get('/delete/video/{id}', [GalleryController::class, 'deleteVideo'])->name('delete.video');

//-----------------------------------------------------------------------------------------------------------------------------------------------------------
// FRONTEND MULTI LANGUAGE ROUTE
Route::get('/lang/english', [LanguageController::class, 'LangEnglish'])->name('lang.english');
Route::get('/lang/nepali', [LanguageController::class, 'LangNepali'])->name('lang.nepali');


// Single Page Route
Route::get('/view/post/{id}', [SinglePageController::class, 'singlePage']);

// category Links
Route::get('/category-post/{id}/{category_en}', [SinglePageController::class, 'categoryPost']);

