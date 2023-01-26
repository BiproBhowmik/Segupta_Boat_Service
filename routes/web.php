<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\PackagesController;
use App\Http\Controllers\User\LoginRegisterController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\DetailsController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BookingsController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\AdminPackagesController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserInfoController;
use App\Http\Controllers\Admin\loginController;



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

Route::group([
    'middleware' => ['api', 'cors'],
    // 'namespace' => $this->namespace,
    'prefix' => 'api',
], function ($router) {
    Route::get('/registrationData', function () {  //Joy
        return "Joy";
    });
});

Route::get('/', [IndexController::class, 'index']);
Route::get('/contact-us', [ContactController::class, 'index']);
Route::get('/packages', [PackagesController::class, 'index']);
Route::get('/register', [LoginRegisterController::class, 'register']);
Route::get('/login-register', [LoginRegisterController::class, 'login']);
Route::get('/package/details/{package}', [PackagesController::class, 'details']);
Route::get('/package/booking/{package}', [BookingController::class, 'index'])->middleware('auth');
Route::get('/package/booking', [BookingController::class, 'bookingStore'])->middleware('auth');


Route::prefix('admin')->name('admin.')->middleware('auth', 'admin')->group(function() {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('bookings', [BookingsController::class, 'index'])->name('bookings');
    Route::get('bookings/confirm', [BookingsController::class, 'approved'])->name('bookings.approved');
   


    Route::get('booking/delete/{id}', [BookingsController::class, 'delete'])->name('booking.delete');
    Route::get('booking/confirm/{id}', [BookingsController::class, 'confirm'])->name('booking.confirm');
    Route::get('booking/cancle/{id}', [BookingsController::class, 'cancle'])->name('booking.cancle');

    Route::get('payments', [PaymentController::class, 'index'])->name('payments');

    Route::get('offers', [OfferController::class, 'index'])->name('offers');
    Route::get('create_offers', [OfferController::class, 'create'])->name('create_offers');
    Route::post('store_offer', [OfferController::class, 'store'])->name('store_offer');
    Route::get('offer_update/{id}', [OfferController::class, 'update'])->name('offer_update');
    Route::post('offer/update', [OfferController::class, 'updateOffer'])->name('offer.update');
    Route::get('offer/delete/{id}', [OfferController::class, 'delete'])->name('offer.delete');

    Route::get('packages', [AdminPackagesController::class, 'index'])->name('packages');
    Route::get('create_packages', [AdminPackagesController::class, 'create'])->name('create_packages');
    Route::post('store_package', [AdminPackagesController::class, 'store'])->name('store_package');
    Route::get('package_update/{id}', [AdminPackagesController::class, 'update'])->name('package_update');
    Route::post('package/update', [AdminPackagesController::class, 'updatePackage'])->name('package.update');
    Route::get('package/delete/{id}', [AdminPackagesController::class, 'delete'])->name('package.delete');

    Route::get('/login', [loginController::class, 'login'])->name('loginRegister.login');
    Route::get('/register', [loginController::class, 'register'])->name('register');


    Route::get('users', [UserController::class, 'index'])->name('users');
    Route::get('user_info', [UserInfoController::class, 'index'])->name('user_info');
    Route::get('admin/user_info/{id}', [UserController::class, 'userInfo']);
    Route::get('admin/admin/{id}', [UserController::class, 'admin']);
    Route::get('admin/user/{id}', [UserController::class, 'user']);


});

// Route::get('admin/admin/admin/{id}', [UserController::class, 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
