<?php

use Illuminate\Http\Request;
use App\Mail\VerificationMail;
use App\Models\Admin\DelivaryCharge;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Location;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PaytrailController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\ProductContoller;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Admin\TopingsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\CurrencyController;
use App\Http\Controllers\Admin\NutritionController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\OptionTitleController;
use App\Http\Controllers\Admin\TimeScheduleController;
use App\Http\Controllers\Admin\DelivaryChargeController;
use App\Http\Controllers\Admin\ProductMnagementController;


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'ourServices'])->name('services');
Route::get('/service/{id}', [FrontendController::class, 'serviceWiseProduct'])->name('serviceWiseProduct');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/product/{id}', [FrontendController::class, 'productDetails'])->name('productDetails');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/product_3d_view/{id}', [FrontendController::class, 'product3DView'])->name('product_3d_view');
Route::get('category/{slug}', [FrontendController::class,'categoryWiseProduct'])->name('categoryWiseProduct');




Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::group(['middleware' => ['permission:product-management']], function () {
        Route::resource('categories', CategoryController::class);
        Route::resource('sub-categories', SubCategoryController::class);
        Route::resource('products', ProductContoller::class);
        Route::resource('sizes', SizeController::class);
        Route::resource('nutritions', NutritionController::class);
        Route::resource('optiontitles', OptionTitleController::class);
        Route::get('product-sizes/{id}', [ProductContoller::class, 'size'])->name('product_size');
        Route::delete('delete-product-sizes/{id}', [ProductContoller::class, 'deleteProductSize'])->name('productSize.destroy');
        Route::post('store-product-sizes', [ProductContoller::class, 'storeSize'])->name('product_size.store');
        Route::get('create-product-sizes/{id}', [ProductContoller::class, 'createProductSize'])->name('product_size.create');
        Route::get('edit-product-sizes/{id}', [ProductContoller::class, 'editProductSize'])->name('product_size.edit');
        //topings assign
        Route::get('store-product-topings/{id}', [ProductContoller::class, 'topings'])->name('product_topting');
        Route::post('store-product-topings', [ProductContoller::class, 'storeToping'])->name('product_toping.store');
        Route::patch('updatel-product-sizes/{id}', [ProductContoller::class, 'updateSize'])->name('product_size.update');
        Route::resource('topings', TopingsController::class);
    });
    Route::group(['middleware' => ['permission:settings']], function () {
        Route::resource('delivery_charges', DelivaryChargeController::class);
        Route::resource('currency', CurrencyController::class);
        Route::resource('schedule', TimeScheduleController::class);
        Route::resource('location', Location::class);
        Route::resource('coupons', CouponController::class);
    });

    //Order Management
    Route::group(['middleware' => ['permission:order-management']], function () {
        Route::get('orders', [OrderController::class, 'getOrders'])->name('orders.index');
        Route::post('order-update', [OrderController::class, 'updateQty'])->name('orders.update');
        Route::get('order-details/{id}', [OrderController::class, 'getOrderDetails'])->name('order.details');
        Route::post('update-status', [OrderController::class, 'updateStatus'])->name('update.status');
        Route::post('update-payment-status', [OrderController::class, 'updatePaymentStatus'])->name('update.payment.status');
        Route::post('assign-delivery-boy', [OrderController::class, 'assignDeliveryBoy'])->name('assign.deliveryboy');
        Route::post('update-address', [OrderController::class, 'updateAddress'])->name('address.update');
    });

    //Order Management
    Route::group(['middleware' => ['permission:content-management']], function () {
        Route::resource('slider', SliderController::class);
        Route::resource('home-ad', AdsController::class);
    });
});

Route::group(['middleware' => ['permission:Administration']], function () {
    Route::resource('users', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
});
Route::get('/success', [PaytrailController::class, 'success']);
Route::get('/cancel', [PaytrailController::class, 'cancel']);
Route::get('/pending', [PaytrailController::class, 'pending']);
Route::get('/notification', [PaytrailController::class, 'notification']);




Route::get('get-location-schedule', [Location::class, 'locationSchedule']);
Route::get('get-delivery-charge', [DelivaryChargeController::class, 'getDeliveryCharge']);
Route::post('palce-order', [OrderController::class, 'placeOrder'])->name("placeOrder");
Route::post('get-related-product', [ProductContoller::class, 'getRelatedProduct']);
Route::prefix('frontend')->middleware(['auth'])->group(function () {
    Route::post('update-customer-data',   [CustomerController::class, 'updateCustomerData']);
    Route::post('verify-and-update-mail',   [CustomerController::class, 'verifyAndUpdateMail']);
    Route::post('update-customer-password',   [CustomerController::class, 'updatePassword']);
});


Auth::routes([
    'register' => true,
    'reset' => false,
    'verify' => false,
]);


//Api for axios
Route::get('get-sliders', [SliderController::class, 'getSliders'])->name('get.sliders');
Route::get('get-ads', [AdsController::class, 'getAds'])->name('get.ads');
Route::get('get-categories', [CategoryController::class, 'getCategories'])->name('get.categories');
Route::get('get-products', [ProductContoller::class, 'getProducts'])->name('get.products');
Route::get('get-popular-products', [ProductContoller::class, 'getPopularProducts'])->name('get.popular.products');
Route::get('get-product-details', [ProductContoller::class, 'getProductDetails']);
Route::get('get-coupon', [CouponController::class, 'getCoupon']);
Route::get('check-coupon', [CouponController::class, 'checkCoupon']);
Route::get('get-currency', [CurrencyController::class, 'getCurrency'])->name('get.currency');

Route::middleware('guest')->group(function () {
    Route::get('customer-signUp', [CustomerController::class, 'signUpPage'])->name('customersignUpPage');
    Route::get('customer-signIn', [CustomerController::class, 'loginPage'])->name('customerLoginPage');
    Route::post('customer-signUp', [CustomerController::class, 'customerSignUp'])->name('customersignUp');
    Route::post('customer-signIn', [CustomerController::class, 'customerLogin'])->name('customerLogin');
});

Route::middleware('auth')->group(function () {
    // Authenticated routes
    Route::post('customer-logout', [CustomerController::class, 'customerLogout'])->name('customerLogout');
    Route::get('customer-dashboard', [CustomerController::class, 'dashboard'])->name('customerDashboard'); 
    Route::get('customer-profile', [CustomerController::class, 'customerProfile'])->name('customerProfile'); // Example authenticated route
    Route::get('customer-support', [CustomerController::class, 'customerSupport'])->name('customerSupport'); // Example authenticated route
});

Route::post('send-verification-mail', [CustomerController::class, 'sendVerificationMail']);
Route::post('verify-account', [CustomerController::class, 'verifyAccount']);
Route::post('verify-account-forgot-password', [CustomerController::class, 'verifyAccountForgotPassword']);
Route::post('change-password', [CustomerController::class, 'changePassword']);
Route::get('get-my-orders', [OrderController::class, 'getCustomerProduct']);
Route::get('get-order-status', [OrderController::class, 'getOrderStatus']);
Route::get('order-info', [OrderController::class, 'getCustomerOrderInfo']);
Route::post('update-notification', [NotificationController::class, 'update'])->name('update-notification');
Route::post('/paytrail/create-payment', [PaytrailController::class, 'createPayment']);
Route::post('/contact-us-submit', [CustomerController::class, 'submitContact']);

Route::get('/add-to-cart/{id}', [OrderController::class, 'addToCart'])->name('add_to_cart');
Route::post('/update-cart-qty', [OrderController::class, 'updateCartQty'])->name('update_cart_qty');
Route::post('/remove-cart-item', [OrderController::class, 'removeCartItem'])->name('remove_cart_item');

