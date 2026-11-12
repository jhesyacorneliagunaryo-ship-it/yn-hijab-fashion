
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureAdminLoggedIn;


 // WEBSITE PENGUNJUNG: bebas diakses tanpa login
Route::get('/', [ProductController::class, 'catalog'])->name('home');

// HALAMAN ABOUT: bisa diakses tanpa login
Route::view('/about', 'about')->name('about');

// HALAMAN COLLECTION, WHY US, DAN CONTACT
Route::get('/collection', [\App\Http\Controllers\ProductController::class, 'collection'])->name('collection');
Route::view('/why-us', 'why-us')->name('why-us');
Route::view('/contact', 'contact')->name('contact');


// FORM LOGIN ADMIN: bisa diakses sebelum login
Route::get('/admin/login', function () {
    return view('admin-login');
})->name('admin.login.form');

Route::post('/admin/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (
        $credentials['email'] === config('admin.email') &&
        $credentials['password'] === config('admin.password')
    ) {
        $request->session()->regenerate();
        $request->session()->put('admin_logged_in', true);

        return redirect('/admin/dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
})->name('admin.login');

// SEMUA HALAMAN ADMIN: wajib login
Route::middleware([EnsureAdminLoggedIn::class])
    ->prefix('admin')
    ->group(function () {

    Route::get('/dashboard', function () {
    return view('admin-dashboard');
})->name('admin.dashboard');
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::delete('/products/{product}', [ProductController::class, 'destroy']);

    Route::get('/profiles', [ProfileController::class, 'index']);
    Route::get('/profiles/create', [ProfileController::class, 'create']);
    Route::post('/profiles', [ProfileController::class, 'store']);
    Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit']);
    Route::put('/profiles/{profile}', [ProfileController::class, 'update']);
    Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy']);

});

// Logout admin
Route::post('/admin/logout', function (Request $request) {
    $request->session()->forget('admin_logged_in');
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('admin.login.form');
})->name('admin.logout');
