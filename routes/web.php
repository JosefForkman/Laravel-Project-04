<?php



use App\Models\categories;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\BoughtController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AdminAuthenticated;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome', ["categorie" => categories::all()])->name('login');
})->middleware('admin');

// Singel prodokt
Route::get("/prodokt/{ProdoktName}", [ProductController::class, 'getProdukt']);
Route::post("/prodokt", [ProductController::class, 'postProdukt'])->middleware('auth');

//login user
Route::post('login', LoginController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');

//logout user
Route::get('logout', LogoutController::class);

//register
Route::get('/register_form', function () {
    return view('register_form');
});
Route::post('register', RegisterController::class);

Route::get('About', function () {
    return view('about');
});

//Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        // Route::get('/', function () {
        //     return view('welcome', ["categorie" => categories::all()]);
        // })->name('adminDashboard');
    });
});

Route::view('/', 'welcome', ["categorie" => categories::all()])->name('login');

Route::get('login_form', function () {
    return view('login_form');
})->name('login');
//login user
Route::post('login', LoginController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');

//logout user
Route::get('logout', LogoutController::class);

//register
Route::get('/register_form', function () {
    return view('register_form');
});
Route::post('register', RegisterController::class);

Route::get('About', function () {
    return view('about');
});

//login Admin
Route::post('admin_login', [AdminAuthController::class, 'postLogin']);

Route::get('adminDashboard', AdminDashboardController::class)->middleware(AdminAuthenticated::class)->name('adminDashboard');

//logout Admin
Route::get('admin_logout', [AdminAuthController::class, 'adminLogout']);

//Cart
Route::get('cart', function () {
    return view('cart');
});

//bought
Route::post('shopping', [BoughtController::class, 'store']);

Route::get('succesfully_bought', function () {
    return view('succesfully_bought');
});
