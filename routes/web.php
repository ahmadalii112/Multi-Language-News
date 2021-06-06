<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;
/*
 * --------------------------------------------------------------------------
 * Back END Controllers
 * --------------------------------------------------------------------------
 */
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\SubDistrictController;
use App\Http\Controllers\Backend\PostsController;
use App\Http\Controllers\Backend\setting\SocialController;
use App\Http\Controllers\Backend\setting\SeoController;
use App\Http\Controllers\Backend\setting\Prayers;
use App\Http\Controllers\Backend\setting\LiveTvController;
use \App\Http\Controllers\Backend\setting\NoticeContoller;
use \App\Http\Controllers\Backend\setting\WebsiteController;
use App\Http\Controllers\Backend\Gallary\PhotoContoller;
use App\Http\Controllers\Backend\Gallary\VideoContoller;
/*
 * --------------------------------------------------------------------------
 * Front END Controllers
 * --------------------------------------------------------------------------
 */
use App\Http\Controllers\Frontend\ExtraController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/index', function () {
    return view('admin.index');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
//    return Inertia::render('Dashboard');
})->name('dashboard');

//Todo: Logout
Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');


//-----------------------------------Todo: Admin Category All Routes----------------------------------------------------
Route::resource('categories',CategoryController::class);

//-----------------------------------Todo: Admin SubCategory All Routes-------------------------------------------------
Route::resource('sub_categories',SubCategoryController::class);
Route::get('delete/subcategory/{id}',[SubCategoryController::class,'DeleteSubCategory'])->name('delete.subcategory');

//-----------------------------------Todo: Admin District All Routes----------------------------------------------------
Route::resource('district',DistrictController::class);

//-----------------------------------Todo: Admin SubDistrict All Routes-------------------------------------------------
Route::resource('sub_district',SubDistrictController::class);
Route::get('delete/subdistrict/{id}',[SubDistrictController::class,'DeleteSubDistrict'])->name('delete.subdistrict');

//-----------------------------------Todo: Admin Post All Routes--------------------------------------------------------
Route::resource('posts',PostsController::class);

//-----------------------------------Todo: Json Data For Category and District------------------------------------------
Route::get('get/subcategory/{category_id}',[PostsController::class,'getsubcategory']);
Route::get('get/subcdistrict/{district_id}',[PostsController::class,'getsubdistrict']);

//-----------------------------------TODO: Social-----------------------------------------------------------------------

Route::get('social/setting',[SocialController::class,'index'])->name('social_setting');
Route::put('social/{social}',[SocialController::class,'update'])->name('social.update');

//------------------------------------TODO: Seos------------------------------------------------------------------------
Route::get('seo/setting',[SeoController::class,'index'])->name('seo_setting');
Route::put('seo/{seo}',[SeoController::class,'update'])->name('seo.update');

//-----------------------------------TODO: Prayers----------------------------------------------------------------------
Route::get('prayer/setting',[Prayers::class,'index'])->name('prayer_setting');
Route::put('prayer/{prayer}',[Prayers::class,'update'])->name('prayer.update');

//-----------------------------------TODO: liveTv-----------------------------------------------------------------------
Route::get('liveTV/setting',[LiveTvController::class,'index'])->name('liveTV_setting');
Route::put('liveTv/{liveTv}',[LiveTvController::class,'update'])->name('liveTv.update');
Route::get('liveTv/active/{liveTv}',[LiveTvController::class,'activate'])->name('liveTv.active');
Route::get('liveTv/deactive/{liveTv}',[LiveTvController::class,'De_active'])->name('liveTv.De_active');

//-----------------------------------TODO: Notice-----------------------------------------------------------------------
Route::get('notice/setting',[NoticeContoller::class,'index'])->name('notice.setting');
Route::put('notice/{notice}',[NoticeContoller::class,'update'])->name('notice.update');
Route::get('notice/active/{notice}',[NoticeContoller::class,'activate'])->name('notice.active');
Route::get('notice/deactive/{notice}',[NoticeContoller::class,'De_active'])->name('notice.De_active');

//-----------------------------------TODO: Website----------------------------------------------------------------------
Route::resource('weblinks',WebsiteController::class);
Route::get('weblinks/{weblinks}/delete',[WebsiteController::class,'delete'])->name('weblinks.delete');

//---------------------------------TODO: For Photo Gallery--------------------------------------------------------------
Route::resource('photo',PhotoContoller::class);
Route::resource('video',VideoContoller::class);

//--------------------------------Todo: For Multi language--------------------------------------------------------------

Route::get('language/english',[ExtraController::class,'LanguageEnglish'])->name('language.english');
Route::get('language/urdu',[ExtraController::class,'LanguageUrdu'])->name('language.urdu');



//FRONT END


Route::get('/welcome', function () {
    return view('main.home');
});

//--------------------------------Todo: For Single Post Page--------------------------------------------------------------

Route::get('view/post/{post}',[ExtraController::class,'singlePost'])->name('single.post');
//--------------------------------Todo: For Category Post Page--------------------------------------------------------------
Route::get('/category/{id}/{name}',[ExtraController::class,'categoryPost'])->name('category.post');
Route::get('subcategory/{id}/{name}',[ExtraController::class,'subcategoryPost'])->name('subcategory.post');

//search district
Route::get('subdistrict/search/{district_id}',  [ExtraController::class, 'getDistrict'])->name('search.district');
Route::get('/search/district',  [ExtraController::class, 'searchDistrict'])->name('searchBy');















Route::get('callback',function(){

    function ahmad($i){
        if ($i <= 5) {
            echo $i;
        }
           return ahmad($i+1);
    }
    ahmad(1);
});