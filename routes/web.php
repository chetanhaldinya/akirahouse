<?php

use App\Http\Controllers\Admin\AdminErrorPageController;
use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('front.home');
    Route::get('/rooms', 'rooms')->name('front.room');
    Route::get('/blogs', 'blogs')->name('front.blog');
    Route::get('/contact-us', 'contact')->name('front.contact');
    Route::get('/about-us', 'about')->name('front.about');
    Route::get('/services', 'service')->name('front.service');
    Route::get('/galleries', 'gallery')->name('front.gallery');
    Route::get('/faqs', 'faq')->name('front.faq');
    Route::get('/flat/{slug}', 'flat_detail')->name('front.flat_detail');
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'showLoginForm')->name('login');
        Route::post('/login', 'login')->name('login');
        Route::post('/logout', 'logout')->name('logout');
    });
    Route::controller(AdminErrorPageController::class)->group(function () {
        Route::get('/404', 'pageNotFound')->name('notfound');
        Route::get('/500', 'serverError')->name('server_error');
    });
    Route::group(['middleware' => ['auth'], 'namespace' => 'Admin'], function () {

        Route::controller(DashboardController::class)->group(function () {
            Route::get('/test', 'test')->name('test');
            Route::get('/dashboard', 'index')->name('dashboard');
            Route::get('dashboard-counts', 'dashboardCountsData')->name('dashboard-counts');
        });

        Route::controller(AdminProfileController::class)->group(function () {
            Route::get('/profile', 'profile')->name('profile');
            Route::get('change-password', 'changePassword')->name('change_password');
            Route::patch('change-password/{user}', 'updatePassword')->name('update.password');
        });

        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::controller(UserController::class)->group(function () {
            Route::get('/update_language/{user}/{language}', 'updateLanguage')->name('users.update_language');
            Route::get('/users/status/{id}/{status}', 'status')->name('users.status');
            Route::post('/users/download', 'export')->name('users.download');
        });
        Route::resource('/users', UserController::class);

        Route::controller(CustomerController::class)->group(function () {
            Route::get('/customers/status/{id}/{status}', 'status')->name('customers.status');
            Route::post('/customers/download', 'export')->name('customers.download');
            Route::get('/customers/download', 'export')->name('customers.getdownload');
        });
        Route::resource('/customers', CustomerController::class);

        Route::controller(ProductController::class)->group(function () {
            Route::get('/products/status/{id}/{status}', 'status')->name('products.status');
            Route::post('/products/download', 'export')->name('products.download');
            Route::get('/products/download', 'export')->name('products.getdownload');
            Route::post('/products/import', 'import')->name('products.import');
            Route::get('products/get-format-files', 'downloadImportFormatFile')->name('products.getfile');
            Route::delete('products/delete-images/{id}', 'deleteImage')->name('products.delete_image');
        });
        Route::resource('/products', ProductController::class);

        //Setting manager
        Route::controller(SettingController::class)->group(function () {
            Route::get('/settings/general', 'edit_general')->name('settings.edit_general');
            Route::post('/settings/general', 'update_general')->name('settings.update_general');
        });

        //Admin PageContent
        Route::get('/page-contents/status/{id}/{status}', 'PageContentController@status');
        Route::resource('page-contents', PageContentController::class);
        //Admin Banner
        Route::get('/banners/status/{banner}/{status}', 'BannerController@status');
        Route::resource('banners', BannerController::class);

         //Admin Faq
         Route::get('/faqs/status/{banner}/{status}', 'BannerController@status');
         Route::resource('faqs', FaqController::class);

        //Admin Flat
        Route::get('/flats/status/{flat}/{status}', 'FlatController@status');
        Route::resource('flats', FlatController::class);

         //Admin Blog manager
         Route::get('/blogs/status/{blog}/{status}', 'BlogController@status');
         Route::resource('blogs', BlogController::class);

        //testimonials routes
        Route::controller(TestimonialController::class)->group(function () {
            Route::get('/testimonials/status/{id}/{status}', 'status');
        });
        Route::resource('/testimonials', TestimonialController::class);
        //end::testimonials routes

          //teams routes
          Route::controller(TeamController::class)->group(function () {
            Route::get('/teams/status/{id}/{status}', 'status');
        });
        Route::resource('/teams', TeamController::class);
        //end::teams routes
        //start::Gallery manager
        Route::resource('/galleries', GalleryController::class)->only('index', 'store', 'destroy');
        //end::Gallery manager
    });
});
