<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Pages publiques
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/competences', [PageController::class, 'competences'])->name('competences');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/success', [ContactController::class, 'success'])->name('contact.success');

// Gestion des projets (CRUD complet)
Route::resource('projects', ProjectController::class);

// Administration des messages
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/messages', [ContactController::class, 'messages'])->name('messages');
    Route::get('/messages/{id}/read', [ContactController::class, 'markAsRead'])->name('message.read');
    Route::delete('/messages/{id}', [ContactController::class, 'destroyMessage'])->name('message.destroy');
});
