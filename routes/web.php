<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'catalog']);
Route::get('/admin/products', [ProductController::class, 'index']);
Route::get('/admin/products/create', [ProductController::class, 'create']);
Route::post('/admin/products', [ProductController::class, 'store']);
Route::delete('/admin/products/{product}', [ProductController::class, 'destroy']);


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
        $request->session()->put('admin_logged_in', true);

        return redirect('/admin/dashboard');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
})->name('admin.login');

Route::get('/admin/dashboard', function (Request $request) {
    if (!$request->session()->get('admin_logged_in')) {
        return redirect()->route('admin.login.form');
    }

    return view('admin-dashboard');
});

Route::post('/admin/logout', function (Request $request) {
    $request->session()->forget('admin_logged_in');

    return redirect()->route('admin.login.form');
})->name('admin.logout');
Route::get('/admin/profiles', [ProfileController::class, 'index']);

Route::get('/admin/profiles/create', [ProfileController::class, 'create']);

Route::post('/admin/profiles', [ProfileController::class, 'store']);


Route::get('/admin/profiles/{profile}/edit', [
    ProfileController::class,
    'edit'
]);

Route::put('/admin/profiles/{profile}', [
    ProfileController::class,
    'update'
]);

Route::delete('/admin/profiles/{profile}', [
    ProfileController::class,
    'destroy'
]);

