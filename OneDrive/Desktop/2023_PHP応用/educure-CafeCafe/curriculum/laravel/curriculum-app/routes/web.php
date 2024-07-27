<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact_form', function () {
    return view('contact_form');
})->name('contact_form');

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/contact/complete', [ContactController::class, 'complete'])->name('contact.complete');
Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit'); // 編集画面表示
Route::post('/contact/update/{id}', [ContactController::class, 'update'])->name('contact.update'); // 更新処理
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
